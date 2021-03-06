@extends('admin.master')

@section('title')
    الدورات 
@endsection

@section('content-title')
   الدورات 
@endsection

@section('content')
    <section class="content">
        <form class="ajax-form" 
        action="{{url('admin/cources/edit')}}" method="post" enctype="multipart/form-data">
  {!! csrf_field() !!}
  <input type="hidden" name="id" value="{{$course->id}}"/>

            <div class="row">
                <div class="col-md-12">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="box box-default">
                        <div class="box-header with-border">


                            <div class="box-tools pull-left">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">


                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <!-- Profile Image -->
                                  <div class="box box-primary">
                                    <div class="box-body box-profile file-box">
                                      <img   style="cursor:pointer; min-height: 250px"  class=" file-btn img-responsive" src="{{url('storage/uploads/images/course/')}}/{{$course->image->name}}"  alt="اضغط لاضافه صوره للدوره ">

                                      <input type="file"  style="visibility: hidden;" name="avatar">

                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /.box -->
                            </div>
                        </div>
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label class="col-md-4">
                                   اسم الدورة
                                    </label>
                                    <input class="form-control" type="text"
                                    value="{{$course->name}}" 
                                     name="name" 
                                    placeholder="مثال: دورة تصميم المواقع" value="">
                                </div>

                            
                                <div class="form-group col-md-6">
                                    <label class="col-md-4">
                                    الميعاد   
                                    </label>
                                    <input 
                                    value="{{$course->time}}" 
                                    class="form-control" type="number" min="" name="time" placeholder=" 200 " >
                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label class="col-md-4">
                                  عدد المحاضرت 
                                    </label>
                                    <input
                                    value="{{$course->lecture_number}}" 
                                     class="form-control" type="number" name="lecture_number" 
                                    placeholder="مثال: 20" value="">
                                </div>

                            
                                <div class="form-group col-md-6">
                                    <label class="col-md-4">
                                   عدد الطلاب 
                                    </label>
                                    <input 
                                    value="{{$course->student_number}}" 
                                    class="form-control" type="number"  name="student_number" placeholder=" 200 " >
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="col-md-4"> القسم </label>
                                    <select 

                                    name="cat_id" class="form-control">
                                        <option value="{{$course->cat_id}}">
                                        {{$course->Category['name']}}
                                        </option>
                                        @foreach ($categories as $category)
                                           
                                           <option value="{{$category->id}}">
                                           {{$category->name}}
                                           </option>
                                        @endforeach
                                    </select>
                                </div>
                               <div class="form-group col-md-6 col-sm-6">
                                   <label class="col-md-4"> المحاضر  </label>
                                   <select name="instarctor_id" class="form-control">
                                      <option value="{{$course->instarctor_id}}">
                                        {{$course->instarctor->name}}
                                        </option>
                                       @foreach ($instructores as $i)
                                          
                                          <option value="{{$i->id}}">
                                          {{$i->name}}
                                          </option>
                                       @endforeach
                                   </select>
                               </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-6">
                                <label class="col-md-4">
                                مدة الكورس   
                                </label>
                                <input 
                                value="{{$course->period}}" 
                                class="form-control" type="number" min="" name="period" placeholder=" 200 " >
                            </div>
                                
                                 <div class="form-group col-md-6 col-sm-6">
                                    <label class="col-md-4">
                                    حاله 
                                    </label>
                                    <select name="active" class="form-control">
                                        <option value="">
                                        اختر حاله 
                                        </option>
                                        <option value="1">
                                       فعال </option>
                                        <option value="0"> غير فعال</option>
                                    </select>
                                </div>
                            </div>

                            <div class="panel">
                                <a class="collapsed" href="#question2" data-toggle="collapse" data-parent="#faq-1">
                                  <h3><u>المحتوى </u></h3>
                                </a>
                                <div class="panel-collapse collapse in" id="question2">
                                    <div class="panel-content">
                                    


                            <div class="row">
                                <label class="col-md-6"> عن الكورس </label>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control tiny-editor"
                                     name="body" rows="3" placeholder="">
                                       
                                       {{$course->body}}
                                     </textarea>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-6"> واجبات ومهام  </label>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control tiny-editor"

                                     name="tasks" rows="3" placeholder="ادخل واجبات ومهام الدورة">
                                         {{$course->tasks}}
                                     </textarea>
                                </div>
                            </div>

                            <div class="row">
                               <label class="col-md-12"> الدروس المستفاده 
                                <small>يرجى ادخال الدروس المستفادة مفصوله ب (-)</small>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control tiny-editor"
                                     name="lessons_learned" rows="3" placeholder="">
                                       {{$course->lessons_learned}}
                                     </textarea>
                                </div>
                            </div>
                            <div class="row">
                               <label class="col-md-12"> أهداف الكورس 
                               <small>يرجى ادخال اهداف الكورس  مفصوله ب (-)</small>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control tiny-editor"
                                     name="aim" rows="3" placeholder="">
                                       {{$course->aim}}
                                     </textarea>
                                </div>
                            </div>

                            </div>
                            </div>
                            </div>

                            <div class="panel">
                              

                                

                       

                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-app ajax-submit">
                                <i class="fa fa-save"></i> {{ trans('products.btn_save') }}
                            </button>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>

            {{ csrf_field() }}
        </form>
    </section>
@endsection

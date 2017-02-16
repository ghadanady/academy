@extends('admin.master')

@section('title')
    تعديل {{ $test->name }}
@endsection

@section('content-title')
    تعديل 
     {{ $test->name }}
@endsection

@section('content')
    <section class="content">
        <form class="ajax-form" action="{{ route('admin.test.edit')}}" method="post" enctype="multipart/form-data">
            


            <div class="row">
                <div class="col-md-12">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>
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
                                <div class="form-group col-md-8">
                                    <label class="col-md-2"> عنوان الاختبار  </label>
                                    <input class=" col-md-6 form-control" type="text"
                                    value="{{$test->name}}" 
                                     name="name" value="">
                                    <input type="hidden" name="course_id" value="{{$test->course_id}}" 
                                    />
                                    <input type="hidden" name="id" value="{{$test->id}}" 
                                    />
                                </div>
                                <div class="form-group col-md-8">
                                    <label class="col-md-2"> ميعاد  الاختبار  </label>
                                    <input data-provide="datepicker" class="  datepicker col-md-6 form-control" type="text"  
                                    id="#date2" 
                                    name="testdate" value="{{$test->testdate}}">
                                   
                                </div>
                                

                            </div>
                            <div class="allQuetion col-md-12" style="padding: 40px;">
                            <h3 class="alert alert-info">الاسئله </h3>

@if(count($test->questions)>0)

@foreach($test->questions as $key =>$q)


                            <div class="testQuestion" >
                            <div class="row col-md-12" style="margin-bottom: 50px;">
                                

                                <div class="row col-md-12">
                                    <div class="row col-md-12"><input class="form-control" type="text" placeholder="ادخل السؤال"
                                   value='{{$q["title"][0]}}' 
                                     name="q[{{$key}}]['title'][]"></div>

                                    <div class="row col-md-12">
                                        <input type="text"  class="form-control" placeholder="ادخل الاجابه الصحيحه " 
                                      value="{{$q['true']}}" 
                                        name="q['true'][]">
                                    </div>

                                    <span>
@foreach($q['notTrue'] as $w)
                                        <input class="form-control" placeholder="ادخل الاجابه الصحيحه " value="{{$w}}" name="q[{{$key}}]['notTrue'][]" type="text">
@endforeach
                                    </span>


                        <button class=" addAnswer btn btn-info  form-control" type="button">اضف اجابه اخرى </button>

                                </div>

                            </div>
                     </div>
@endforeach
@endif
                                
                            </div>

                          





                        </div>
                          <a  class="btn btn-primary addTestQuestion"  >
                                <i class="fa fa-plus"></i>
                               اضافة سؤال 
                            </a>
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-app ajax-submit">
                                <i class="fa fa-save"></i> حفظ
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



@extends('admin.master')

@section('title')
  اضافه اختبار  
@endsection

@section('content-title')
    اضافه اختبار  
@endsection

@section('content')
    <section class="content">
        <form class="ajax-form" action="{{ route('admin.test.postaddTest') }}" method="post" enctype="multipart/form-data">
         

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
                                    <input class=" col-md-6 form-control" type="text" name="name" value="">
                                    <input type="hidden" name="course_id" value="{{$course_id}}" />
                                </div>
                                <div class="form-group col-md-8">
                                    <label class="col-md-2"> ميعاد  الاختبار  </label>
                                    <input data-provide="datepicker" class="  datepicker col-md-6 form-control" type="text"  id="#date2" 
                                    name="testdate" value="">
                                   
                                </div>
                                

                            </div>
                            <div class="allQuetion col-md-12" style="padding: 40px;">
                            <h3 class="alert alert-info">الاسئله </h3>



                                
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

    <div class="testQuestion" style="display: none;">

    </div>
@endsection


        





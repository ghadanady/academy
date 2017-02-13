@extends('admin.master')

@section('title')
  اضافه اختبار  
@endsection

@section('content-title')
    اضافه اختبار  
@endsection

@section('content')
    <section class="content">
        <form class="ajax-form" action="{{ route('admin.lesson.postaddlesson') }}" method="post" enctype="multipart/form-data">
         

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
                                <div class="form-group col-md-12">
                                    <label class="col-md-2"> العنوان </label>
                                    <input class=" col-md-10 form-control" type="text" name="title" value="">
                                    <input type="hidden" name="course_id" value="{{$course_id}}" />
                                </div>

                            </div>

                            <div class="row allquestion">
                                <div class="row question">
                                 <label class="col-md-12"> السؤال  </label>
                                    <div class="col-md-12 allAnswer" >


                                        <div class="col-md-4 answer">
                                            <input type="" name="">
                                        </div>
                                        <div class="col-md-4">
                                            
                                        </div>

                                        
                                    </div>

                                    
                                </div>
                                
                            </div>



                        </div>
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




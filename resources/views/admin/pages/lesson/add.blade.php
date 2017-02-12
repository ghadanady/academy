@extends('admin.master')

@section('title')
  اضافه درس 
@endsection

@section('content-title')
    اضافه درس 
@endsection

@section('content')
    <section class="content">
        <form class="ajax-form" action="{{ route('admin.lesson.postaddlesson') }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">المحتوي المرئي</h3>
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
                                <div class="col-md-12">
                                    <div class="thumbnail file-box">
                                        <img alt="728x418" class="file-btn"  style="height: 300px; width: 100%; display: block; cursor: pointer;" src="http://lorempixel.com/g/500/300/" data-holder-rendered="true">
                                        <div class="caption text-center">
                                            <input type="file" class="btn btn-primary" role="button" name="img" accept="image/*" value="اختر صوره">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4">اضف رابط فيديو (اختياري | Embedded)</label>
                                    <div class="input-group">
                                        <!-- /btn-group -->
                                        <input type="text" name="video" class="form-control">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-video-preview btn-danger">معاينه</button>
                                        </div>
                                    </div>
                                    <h6 class="text-left">الرجاء عمل معاينه قبل وضع حفظ المقال للتاكد من ان الفيديو يعمل جيدا .</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">المحتوي النصي</h3>
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
                                <div class="form-group col-md-6">
                                    <label class="col-md-4"> العنوان </label>
                                    <input class="form-control" type="text" name="title" value="">
                                    <input type="hidden" name="course_id" value="{{$course_id}}" />
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="col-md-4">حالة </label>
                                    <select name="active" class="form-control">
                                        <option value="">-- اختر الحالة --</option>
                                        <option value="1">فعاله</option>
                                        <option value="0">غير فعاله</option>
                                    </select>
                                </div>

                            </div>


                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4">المحتوى </label>
                                    <textarea class="form-control tiny-editor" name="" rows="3" placeholder=""></textarea>
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

@section('modals')
    @include('admin.pages.lesson.modals.video-modal-preview')
@endsection
@section('templates')
    @include('admin.pages.lesson.templates.video')
@endsection

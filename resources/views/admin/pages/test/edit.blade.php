@extends('admin.master')

@section('title')
    تعديل المقال الخاص ب {{ $article->title }}
@endsection

@section('content-title')
    تعديل المقال الخاص ب {{ $article->title }}
@endsection

@section('content')
    <section class="content">
        <form class="ajax-form" action="{{ route('admin.lesson.edit' , ['id' => $article->id]) }}" method="post" enctype="multipart/form-data">
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
                                        <img alt="100%x200" class="file-btn"  style="height: 200px; width: 100%; display: block; cursor: pointer;" src="{{ url('storage/uploads/images/articles/'.$article->image->name) }}" data-holder-rendered="true">
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
                                        <input type="text" name="video" value="{{ ($video = $article->video)? $video->url : '' }}" class="form-control">
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
                                    <label class="col-md-4">عنوان المقاله</label>
                                    <input class="form-control" type="text"  name="title" value="{{ $article->title }}">
                                </div>
                 

              
                                <div class="form-group col-md-6">
                                    <label class="col-md-4">حالة المقالة</label>
                                    <select name="active" class="form-control">
                                        <option value="1" {{ $article->active? 'selected' : '' }}>فعاله</option>
                                        <option value="0" {{ !$article->active? 'selected' : '' }}>غير فعاله</option>
                                    </select>
                                </div>
                                </div>


                            </div>


                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4">محتوي المقاله</label>
                                    <textarea class="form-control tiny-editor" >{{ $article->content }}</textarea>
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



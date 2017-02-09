
<div class="modal fade" id="adduser" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">اضافه محاضر </h4>
            </div>
            <form action="{{url('admin/instructor/add')}}" class="ajax-form" enctype="multipart/form-data" method="post"
             onsubmit="return false;">
                {!! csrf_field() !!}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-4">
                            <!-- Profile Image -->
                              <div class="box box-primary">
                                <div class="box-body box-profile file-box">
                                  <img   style="cursor:pointer;" class="profile-user-img file-btn img-responsive img-circle" src="{{url('storage/uploads/images/avatars/default.jpg')}}"  alt="User profile picture">

                                  <input type="file"  style="visibility: hidden;" name="avatar">

                                </div>
                                <!-- /.box-body -->
                              </div>
                              <!-- /.box -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>الاسم </label>
                            <input type="text" class="form-control required" placeholder="مثال: محمد الراجي" required name="name">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>البريد الالكترونى</label>
                            <input type="email" class="form-control required" placeholder="مثال:h@h.com " required name="email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>الموبيل</label>
                            <input type="text" class="form-control required" placeholder="مثال: 0093658621666" required name="phone">
                        </div>

                        <div class="form-group col-sm-6">
                            <label>النوع</label>
                            <select class="form-control" name="gender">
                                <option value="">-- Choose Gender | نوع الجنس --</option>
                                <option value="male">male | ذكر</option>
                                <option value="female">female | انثي</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>العمر</label>
                            <input type="number" min="0" class="form-control required" placeholder="مثال: 33" required name="age">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>الوظيفه </label>
                            <input type="text" class="form-control required" placeholder="مثال: مدير المبيعات" required name="job">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>فيسبوك</label>
                            <input type="text" class="form-control required" name="facebook">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>جوجل بلاس </label>
                            <input type="text" class="form-control required" name="google">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>تويتر </label>
                            <input type="text" class="form-control required" name="twitter">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>انستجرام </label>
                            <input type="text" class="form-control required" name="instgram">
                        </div>
                    </div>
                    <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="col-md-4"> القسم </label>
                                    <select name="cat_id" class="form-control">
                                        <option value="">
                                         اختار القسم
                                        </option>
                                        @foreach ($categories as $category)
                                           
                                           <option value="{{$category->id}}">
                                           {{$category->name}}
                                           </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label>حاله القسم</label>
                                    <select class="form-control" name="active">
                                        <option value="">-- اختر الحاله --</option>
                                        <option value="1">فعال</option>
                                        <option value="0">غير فعال</option>
                                    </select>
                                </div>
                                </div>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>نبذه عن المحاضر  </label>

                            <textarea class="tiny-editor" name="about"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>مؤهلات المحاضر  
                            <small>يرجى ادخال المؤهلات مفصوله ب (-)</small>
                            </label>

                            <textarea class="tiny-editor form-control" name="skills"></textarea>
                        </div>
                    </div>

                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">الغاء </button>
                    <button type="submit" data-loading="تحميل "
                     class="ajax-submit btn btn-primary btn-sm btn-flat">
                        حفظ  <span class="glyphicon glyphicon-save"> </span>
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

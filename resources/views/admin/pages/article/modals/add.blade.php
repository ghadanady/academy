
<div class="modal fade" id="addarticle" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">اضافة علامه تجاريه </h4>
            </div>
           

            <form  method="POST" action="{{url('admin/article/add')}}" class="ajax-form" enctype="multipart/form-data" 
             onsubmit="return false;">
                {!! csrf_field() !!}
                <div class="modal-body">
                    <div class="row">
                        <div class=" col-md-12">
                            <!-- Profile Image -->
                              <div class="box box-primary">
                                <div class="box-body box-profile file-box">
                                  <img   style="cursor:pointer;" 
                                  class=" def-img file-btn img-responsive" 
                                  src="{{url('storage/uploads/images/def.png')}}"  alt="صورة المقال">

                                  <input type="file"  style="visibility: hidden;" name="avatar">

                                </div>
                                <!-- /.box-body -->
                              </div>
                              <!-- /.box -->
                        </div>
                    </div>


                    <div class="row">
                         <div class="form-group col-sm-12">
                            <label>العنوان </label>
                            <input type="text" class="form-control required" placeholder="عنوان الخبر يكتب هنا"  name="name">
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
                           <label class="col-md-4"> المحاضر  </label>
                           <select name="ins_id" class="form-control">
                               <option value="">
                                اختار المحاضر 
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
                        <div class="form-group col-sm-12">
                            <label>المحتوى  </label>
                              <textarea class="tiny-editor" name="body"></textarea>
                        </div>
                       
                    </div>
       
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('admin_global.btn_cancel') }}</button>
                    <button type="submit" data-loading="{{ trans('admin_global.loading') }}" class="ajax-submit btn btn-primary btn-sm btn-flat">
                        {{ trans('admin_global.btn_save') }} <span class="glyphicon glyphicon-save"> </span>
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

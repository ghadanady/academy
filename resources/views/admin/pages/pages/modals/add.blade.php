
<div class="modal fade" id="add" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">اضافة  </h4>
            </div>
            <form action="{{url('admin/page/add')}}" class="ajax-form" enctype="multipart/form-data" method="post"
             onsubmit="return false;">
                {!! csrf_field() !!}
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>العنوان   </label>
                            <input type="text" class="form-control required" 
                            placeholder="دورة قواعد البيانات المتقدمة "  name="title">
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>اختر حالة الظهور</label>
                            <select class="form-control" name="member">
                                <option value="">-- اختر الحاله --</option>
                                <option value="1">للاعضاء</option>
                                <option value="0">عامة </option>
                            </select>
                        </div>
                    </div>
                  
          
          

                      <div class="row">
                        <div class="form-group col-sm-12">
                            <label>محتوى الصفحه  </label>
                           <textarea class="form-control tiny-editor" name="body" rows="3" placeholder=""></textarea>
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


<div class="modal fade" id="add" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">اضافة  </h4>
            </div>
            <form action="{{url('admin/slider/add')}}" class="ajax-form" enctype="multipart/form-data" method="post"
             onsubmit="return false;">
                {!! csrf_field() !!}
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>العنوان الاول  </label>
                            <input type="text" class="form-control required" 
                            placeholder="دورة قواعد البيانات المتقدمة "  name="title">
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>العنوان الثاى  </label>
                            <input type="text" class="form-control required" placeholder="دورة قواعد البيانات المتقدمة "  name="sub_title">
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>الرابط  </label>
                            <input type="text" class="form-control required" placeholder="www.google.com.eg"  name="link">
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

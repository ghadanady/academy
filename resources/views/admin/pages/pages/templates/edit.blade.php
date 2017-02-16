

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>العنوان    </label>
                            <input type="text" class="form-control required" placeholder="www.google.com.eg"   value="{title}" name="title">
                        </div>
                       
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>اختر حالة الظهور</label>
                            <select class="form-control" name="member">
                                <option value="{member}">{status}</option>
                                <option value="1">للاعضاء</option>
                                <option value="0">عامة </option>
                            </select>
                        </div>
                    </div>


                 
                 
                     <div class="row">
                        <div class="form-group col-sm-12">
                            <label>محتوى الصفحه  </label>
                           <textarea class="form-control tiny-editor" name="body" rows="3" placeholder="">{body}</textarea>
                        </div>
                       
                    </div>
                  
                    <input type="hidden" name="id" value="{id}">
       
                
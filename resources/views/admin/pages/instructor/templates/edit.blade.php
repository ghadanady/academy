
                    <div class="row">
                        <div class="col-md-offset-4 col-md-4">
                            <!-- Profile Image -->
                              <div class="box box-primary">
                                <div class="box-body box-profile file-box">
                                  <img  style="cursor:pointer;"  class="profile-user-img file-btn img-responsive img-circle" src="{{url('storage/uploads/images/avatars/{avatar}')}}"  alt="User profile picture">
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
                            <input type="text" value="{name}" class="form-control required" placeholder="مثال: محمد الراجي" required name="name">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>البريد الالكترونى </label>
                            <input type="email" value="{email}" class="form-control required" placeholder="مثال:h@h.com " required name="email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>الموبيل </label>
                            <input type="text" value="{phone}" class="form-control required" placeholder="مثال: 0093658621666" required name="phone">
                        </div>

                        <div class="form-group col-sm-6">
                            <label>النوع </label>
                            <select class="form-control" name="gender">
                                <option value="{gender}">{gender_text}</option>
                                <option value="male">male |ذكر</option>
                                <option value="female">female |انثي</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>العمر </label>
                            <input type="number" value="{age}" min="0" class="form-control required" placeholder="مثال: 33" required name="age">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>الوظيفه </label>
                            <input type="text" value="{job}" class="form-control required" placeholder="مثال: مدير المبيعات" required name="job">
                        </div>
                    </div>

                    <input type="hidden" name="id" value="{id}">
                </div>


                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>فيسبوك</label>
                        <input type="text" value="{facebook}" class="form-control required" name="facebook">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>جوجل بلاس </label>
                        <input type="text" class="form-control required" value="{google}" name="google">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>تويتر </label>
                        <input type="text" class="form-control required" value="{twitter}" name="twitter">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>انستجرام </label>
                        <input type="text" class="form-control required"  value="{instgram}" name="instgram">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-12">
                        <label>نبذه عن المحاضر  </label>

                        <textarea class="tiny-editor" name="about">{about}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-12">
                        <label>مؤهلات المحاضر   </label>

                        <textarea class="tiny-editor" name="skills">{skills}</textarea>
                    </div>
                </div>

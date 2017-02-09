
                    <div class="row">
                        <div class=" col-md-12">
                            <!-- Profile Image -->
                              <div class="box box-primary">
                                <div class="box-body box-profile file-box">
                                  <img   style="cursor:pointer;" 
                                  class=" def-img file-btn img-responsive" 
                                  src="{{url('storage/uploads/images/article/{img}')}}"  alt="tradmark picture">

                                  <input type="file"  style="visibility: hidden;" name="avatar">

                                </div>
                                <!-- /.box-body -->
                              </div>
                              <!-- /.box -->
                        </div>
                    </div>


                    <div class="row">
                         <div class="form-group col-sm-12">
                            <label>الاسم </label>
                            <input type="text" class="form-control required" name="name" value="{name}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="col-md-4"> القسم </label>
                            <select name="cat_id" class="form-control">
                                <option value="{cat_id}">{cat}</option>
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
                              <option value="{ins_id}">{in}</option>
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
                              <textarea class="tiny-editor"   value="" name="body">
                                {body}
                              </textarea>
                        </div>
                       
                    </div>
                    <input type="hidden" name="id" value="{id}"/>
       
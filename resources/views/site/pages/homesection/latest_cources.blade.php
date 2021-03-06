<div class="row">
                   <div class="col-sm-12">
                       <div class="section-title">
                           <div class="heading"> أحدث الدورات</div>
                       </div>
                   </div>
                   <div class="spacer-10"></div>
                   <div id="courses" class="owl-carousel owl-theme">
                   @foreach($latest_cources as $course)
                       <div class="carousel-item">
                           <div class="course-item">
                               <div class="course-img">
                                    <img 
                                src="{{ url('storage/uploads/images/course') }}/{{ $course->image ? $course->image->name : 'p_default.png' }}"/>
                                   <div class="hover">
                                       <a href="{{$course->getUrl() }}" class="custom-btn">المزيد</a>
                                       
                                          <a class="custom-btn joinCourse" 
                                data-action='{{url("course/join/$course->id")}}'
                                 >سجل الأن</a>
                                   </div>
                               </div><!--End Course-img-->
                               <div class="course-content">
                                   <div class="course-heading">
                                       <a href="{{$course->getUrl() }}">
                                           {{$course->name}}
                                       </a>
                                       <ul class="author">
                                           <li class="lecturer">
                                               <a href="{{$course->instarctor->getUrl() }}">{{$course->instarctor->name}}</a>
                                           </li>
                                           <li class="category">
                                               <a href="{{$course->Category->getUrl() }}">{{$course->instarctor->job}}</a>
                                           </li>
                                       </ul>
                                   </div><!--End Heading-->
                                   <div class="course-details">
                                      
                                      {!!str_limit($course->body,70)!!}
                                   </div><!--End Course-content-->
                                   <div class="course-info">
                                       <div class="comment-status">
                                           <i class="fa fa-commenting-o"></i>
                                          {{count($course->comments)}} تعليق 
                                       </div>
                                       <ul class="rate">
                                           <li><i class="fa fa-star"></i></li>
                                           <li><i class="fa fa-star"></i></li>
                                           <li><i class="fa fa-star"></i></li>
                                           <li><i class="fa fa-star"></i></li>
                                           <li><i class="fa fa-star-o"></i></li>
                                       </ul>
                                   </div><!--End Course-info-->
                               </div><!--End Course-content-->
                           </div><!--End Course-item-->
                       </div><!--End carousel-item-->
                  @endforeach

                       

                   </div>
               </div><!--End Row-->
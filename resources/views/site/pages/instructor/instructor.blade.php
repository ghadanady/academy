@extends('site.layouts.base.master')

@section('title')
الاكاديميه 
@endsection
@section('content')

   <section class="page-heading">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <h2> {{$in->name}}</h2>
               </div><!--End col-md-6-->
               <div class="col-md-6">
                   <ul class="breadcrumb">
                   <li><a href="{{url('/')}}"> الرئيسية   </a> </li>  
                   <li class="active"> المحاضر  {{$in->name}} </li>
                       
                      
                       
                   </ul>
               </div><!--End col-md-6-->
           </div><!--End Row-->
       </div><!--End container-->
   </section>
    

        <div class="page-content">
                    <section class="section-setting section-color">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <div class="lecturer-basic-info">
                                        <div class="lecturer-img">
                                           <img  src="{{ url('storage/uploads/images/instructor') }}/{{ $in->image ? 
                                                    $in->image->name : 'p_default.png' }}"/>
                                        </div>
                                        <div class="content">
                                            <h3{{$in->name}}</h3>
                                            <p>{{$in->job}}</p>
                                        </div>
                                        <ul>
                                            <p>تابع  المحاضر</p>
                                            <li><a href="{{$in->facebook}}" class="fa fa-facebook"></a></li>
                                            <li><a href="{{$in->twitter}}" class="fa fa-twitter"></a></li>
                                            <li><a href="{{$in->google}}" class="fa fa-google-plus"></a></li>
                                        </ul>
                                        <div class="lecturer-contact-form">
                                            <p>تواصل مع المحاضر</p>
                                            <form>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="الأسم">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="البريد الألكترونى">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" type="text" placeholder="الرسالة"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button class="custom-btn">إرسال</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-md-9 col-sm-8">
                                    <div class="only-lecturer-content">
                                        <div class="widget">
                                            <div class="widget-title">
                                                عن المحاضر
                                            </div>
                                            <div class="widget-content">
                                               
                                               {!! $in->about!!}
                                            </div>
                                        </div>
                                        <div class="widget">
                                            <div class="widget-title">
                                                المؤهلات
                                            </div>
                                            <div class="widget-content">
                                            @if(count($in->skills)>0 &&!empty($in->skills))
                                                <ul class="qualfic">
                                                @foreach($in->skills as $s)
                                                    <li>{!!$s!!}</li>
                                                @endforeach

                                                </ul>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="widget">
                                            <div class="widget-title">
                                                أراء الطلاب
                                            </div>
                                            <div class="widget-content">
    @if(count($in->comments)>0  && !empty($in->comments))
       @foreach($in->comments as $c)
                                                <div class="comment-block">
                                                    <div class="person-img">
                                                        <img src="{{url('assets/images/team-5.jpg')}}">
                                                    </div><!--End person-img-->
                                                    <div class="person-comment">
                                                        <h3>
                                                             {{$c->member->f_name}}
                                                        <ul class="rate">
                                                           
                                               

                                                   <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                     <li><i class="fa fa-star"></i></li>
                                                      <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>

                                                          

                                                        </ul>
                                                    </h3>
                                                    <p>
                                                       {{$c->comment}} 
                                                    </p>
                                                </div><!--End person-comment-->
                                            </div><!--End comment-block-->

    @endforeach
    @else
    <div class="alert alert-info">لم يتم اضافه كومنتات حتى الان كن اول من يعلق </div>                                                   
    @endif

                                            </div>
                                        </div>
                                        <div class="widget">
                                            <div class="widget-title">
                                                أضف تعليق عن المحاضر
                                            </div>
                                            <div class="widget-content">
                                               <form action ='{{url("instructor/comment")}}'
                                               onsubmit="return false;" 
                                                               method="post" 
                                                               class="rate-form">
                                                               {{ csrf_field() }}
                                                               <input type="hidden"
                                                                name="course_id"
                                                                value="{{$in->id}}" 
                                                                />
                                                               
                                                               
                                                                   <div class="form-group">
                                                                       <textarea 
                                                                       name="comment" 
                                               

                                                                       class="form-control" placeholder="التعليق"></textarea>
                                                                   </div>
                                                                   <div class="form-group">
                                                                       <span>ضع تقييمك : </span>
                                                                       <div class="rating-block">
                                                                           <div class="star-rating bg-green">
                                                                               <i class="fa fa-star return-rate" data-rating="1"></i>
                                                                               <i class="fa fa-star return-rate" data-rating="2"></i>
                                                                               <i class="fa fa-star return-rate" data-rating="3"></i>
                                                                               <i class="fa fa-star return-rate" data-rating="4"></i>
                                                                               <i class="fa fa-star return-rate" data-rating="5"></i>
                                                                               <input type="hidden" name="whatever" class="rating-value"   value="0">
                                                                           </div>
                                                                           <div id="starn" class="rating-numb bg-  green">
                                                                               5/0
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <div class="form-group">
                                                                       <button class="addComment custom-btn">إرسال التقييم</button>
                                                                   </div>
                                                               </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Row-->
                        </div><!--End Container-->
                    </section><!--End Section-->
        </div><!--End Page-Content-->
      

        
   
   
    
@endsection

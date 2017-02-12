@extends('site.layouts.base.master')

@section('title')
{{$course->name}} 
@endsection
@section('content')

   <section class="page-heading">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <h2> {{$course->name}}</h2>
               </div><!--End col-md-6-->
               <div class="col-md-6">
                   <ul class="breadcrumb">
                       <li><a href="{{url('/')}}">الرئيسية</a></li>  
                      
                       <li class="active"> {{$course->name}}</li>
                   </ul>
               </div><!--End col-md-6-->
           </div><!--End Row-->
       </div><!--End container-->
   </section>
    

    <div class="page-content">
        <section class="section-setting section-color only-course">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <div class="widget">
                            <div class="widget-content">
                                <div class="heading">
                                    <h3>{{$course->name}}</h3>
                                 <img 
                                src="{{ url('storage/uploads/images/course') }}/{{ $course->image ? $course->image->name : 'p_default.png' }}"/>
                                </div>
                                <div class="tab-wrapper">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab1" data-toggle="tab">
                                                عن الكورس 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab">
                                                الدروس
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab3" data-toggle="tab">
                                               التقييمات
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1">
                                            <div class="tab-content">
                                                <div class="widget">
                                                    <div class="widget-content">
                                                       {!! $course->body!!}
                                                    </div>
                                                </div>
@if($course->lessons_learned)

                                                <div class="widget">
                                                    <div class="widget-title">
                                                        الدروس المستفاده : 
                                                    </div>
                                                    <div class="widget-content">
                                                        <ul class="qualfic">
                                                        @foreach($course->lessons_learned as $le)
                                                         <li>{{$le}}</li>
                                                        @endforeach             
                                                        </ul>
                                                    </div>
                                                </div>
@endif
@if($course->aim)
                                                <div class="widget">
                                                    <div class="widget-title">
                                                        أهداف الكورس : 
                                                    </div>
                                                    <div class="widget-content">
                                                        <ul class="qualfic">
                                                        @foreach($course->aim as $a)
                                                         <li>{{$a}}</li>
                                                        @endforeach
                                                        </ul>
                                                    </div>
                                                </div>

@endif
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in" id="tab2">
                                            <div class="tab-content">
                                                <div class="toggle-container" id="faq-1">
@if($course->lessons)
@for($i=0;$i<$lessons_count;$i++)

                                                    <div class="panel">
                                                        <a href="#question{{$i}}" data-toggle="collapse" data-parent="#faq-1">
                                                         {{$course->lessons['qtitle'][$i]}}                 
                                                        </a>
@if($i==0)
                                                        <div class="panel-collapse collapse in" 
                                                        id="question{{$i}}">
@else
                                                      <div class="panel-collapse collapse " 
                                                        id="question{{$i}}">

@endif
                                                            <div class="panel-content">
                                                                <p>
                                                                 {{$course->lessons['qbody'][$i]}}  
                                                                </p>
                                                            </div><!-- end content -->
                                                        </div><!--End panel-collapse-->
                                                    </div><!--End Panel-->
@endfor
@else
<div class="alert alert-info">لم يتم اضافه الدورس بعد .</div>                                                   
@endif
                                                </div><!--End Toggle-container-->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in" id="tab3">
                                            <div class="tab-content">
    @if(count($course->comments)>0)
    @foreach($course->comments as $c)
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
       

                                                <div class="widget">
                                                    <div class="widget-title">
                                                        أضف تعليق عن الكورس
                                                    </div>
                                                    <div class="widget-content">
                                        <form action ='{{url("course/comment")}}'
                                        onsubmit="return false;" 
                                                        method="post" 
                                                        class="rate-form">
                                                        {{ csrf_field() }}
                                                        <input type="hidden"
                                                         name="course_id"
                                                         value="{{$course->id}}" 
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
                                    </div>
                                </div>
                            </div><!--End Widget-content-->
                        </div><!--End Widget-->
                    </div><!--End Col-md-9-->
                    <div class="col-md-3 col-sm-4">
                        <div class="widget-color">
                            <div class="widget-title">
                                معلومات عن الكورس
                            </div><!--End Widget-title-->
                            <div class="widget-content">
                                <ul class="course-info">
                                    <li>
                                        التصنيف : 
                                        <span>
                                            <a href="only-catogry.html">{{$course->Category->name}}</a>
                                        </span>
                                    </li>
                                     <li>
                                       مدة الكورس : 
                                        <span>
                                          {{$course->period}}
                                        </span>
                                    </li>
                                    <li>
                                       عدد المحاضرات: 
                                        <span>
                                              {{$course->lecture_number}} محاضرة
                                        </span>
                                    </li>
                                    <li>
                                       عدد الطلاب : 
                                        <span>
                                            {{$course->student_number}} طالب
                                        </span>
                                    </li>
                                    <li>
                                       ميعاد الكورس : 
                                        <span>
                                            {{$course->time}}
                                        </span>
                                    </li>
                                </ul>
                            </div><!--End Widget-content-->
                        </div><!--End Widget-->
                        <div class="widget-color">
                            <div class="widget-title">
                                المحاضر
                            </div><!--End Widget-title-->
                            <div class="widget-content">
                                <div class="author-img">
                                    <img  src="{{ url('storage/uploads/images/instructor') }}/{{ $course->instarctor->image ? $course->instarctor->image->name : 'p_default.png' }}"/>
                                </div>
                                <div class="author-info">
                                    <a href="only-lecturer.html">{{$course->instarctor->name}}</a>
                                    <p>
                                       

                                       {!!str_limit($course->instarctor->about,100)!!}
                                    </p>
                                </div>
                            </div><!--End Widget-content-->
                        </div><!--End Widget-->
                                    <div class="widget-color">
                            <div class="widget-title">
                               اخر  التقيمات
                            </div><!--End Widget-title-->

@if(count($course->comments)>0)
                            <div class="widget-content">
                 

@foreach($course->rate as $c)

                                <div class="rate-stars">
                                    <ul class="rate">
                                    @for( $i=0;$i<$c->rate;$i++)
                                        <li><i class="fa fa-star"></i></li>
                                    @endfor
                                    </ul>
                                    <span>{{$c->rate}}</span>
                                    

                                </div>
@endforeach
                            </div><!--End Widget-content-->
@endif
                        </div><!--End Widget-->
                        </div><!--End Widget-->
@if(count($relatedCources)>0)
                        <div class="widget-color">
                            <div class="widget-title">
                                دورات متعلقة
                            </div>
                            <div class="widget-content">
@foreach($relatedCources as $c)
                        <div class="item-list">
                                 <div class="item-list-img">
                                   <img src="{{ url('storage/uploads/images/course') }}/{{ $course->image ? $course->image->name : 'p_default.png' }}"/>
                                </div>
                                <div class="item-list-details">
                                        <a href="only-course.html">{{$c->name}}</a>
                                        <p>
                                           
                                            {!!str_limit($c->body,2)!!}
                                        
                                        </p>
                                </div>
                        </div>
@endforeach
                            </div>
                        </div>
@endif
                    </div><!--End Col-md-3-->
                </div><!--End Row-->
            </div><!--End Container-->
        </section><!--End Section-setting-->
        
    </div><!--End Page-Content-->
    
@endsection

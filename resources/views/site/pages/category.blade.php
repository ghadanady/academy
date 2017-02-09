@extends('site.layouts.base.master')

@section('title')
الاكاديميه 
@endsection
@section('content')

   <section class="page-heading">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <h2>قسم {{$category->name}}</h2>
               </div><!--End col-md-6-->
               <div class="col-md-6">
                   <ul class="breadcrumb">
                       <li><a href="{{url('/')}}">الرئيسية</a></li>  
                      
                       <li class="active">قسم {{$category->name}}</li>
                   </ul>
               </div><!--End col-md-6-->
           </div><!--End Row-->
       </div><!--End container-->
   </section>
    

    <div class="page-content">
        <section class="section-setting">
            <div class="container">
                <div class="row">
@if(count($courses)>0)
@foreach($courses as $c)


                <div class="col-md-3 col-sm-6">
                    <div class="course-item">
                        <div class="course-img">

                            <img 
                            src="{{ url('storage/uploads/images/course') }}/{{ $c->image ? $c->image->name : 'p_default.png' }}"/>
                            <div class="hover">
                                <a href="{{$c->getUrl() }}" class="custom-btn">المزيد</a>
                                <a class="custom-btn joinCourse" 
                                data-action='{{url("course/join/$c->id")}}'
                                 >سجل الأن</a>
                                

                            </div>
                        </div><!--End Course-img-->
                        <div class="course-content">
                            <div class="course-heading">
                                <a href="{{$c->getUrl() }}">
                                 {{$c->name}}
                                </a>
                                <ul class="author">
                                    <li class="lecturer">
                                        <a href="{{$c->instarctor->getUrl() }}">{{$c->instarctor->name}}</a>
                                    </li>
                                    <li class="category">
                                        <a href="{{$c->Category->getUrl() }}"> {{$c->Category->name}}</a>
                                    </li>
                                </ul>
                            </div><!--End Heading-->
                            <div class="course-details">
                       
                        {!!str_limit($c->body,70)!!}

                            </div><!--End Course-content-->
                            <div class="course-info">
                                <div class="comment-status">
                                    <i class="fa fa-commenting-o"></i>
                                   {{count($c->comments)}} تعليق 
                                </div>
                                <ul class="rate">
                                    {{ $courses->links() }}
                                </ul>
                            </div><!--End Course-info-->
                        </div><!--End Course-content-->
                    </div><!--End Course-item-->
                </div><!--End col-md-3 col-sm-6-->

@endforeach
@else
<div class="alert alert-info"> لا يوجد دورات بهذا القسم حاليا</div>
@endif
                 </div><!--End Row-->
            </div><!--End Container-->
        </section><!--End Section-->
        
    </div><!--End Page-Content-->
    
@endsection

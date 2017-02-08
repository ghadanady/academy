@extends('site.layouts.base.master')

@section('title')
من نحن 
@endsection
@section('content')

   <section class="page-heading">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <h2>من نحن </h2>
               </div><!--End col-md-6-->
               <div class="col-md-6">
                   <ul class="breadcrumb">
                       <li><a href="{{url('/')}}">الرئيسية</a></li>  
                      
                       <li class="active">من نحن</li>
                   </ul>
               </div><!--End col-md-6-->
           </div><!--End Row-->
       </div><!--End container-->
   </section>
    

   <div class="page-content">
        <section class="section-setting">
         @include('site.pages.homesection.search')  
        </section><!--End Section-->
        <div class="clearfix"></div>
        <section class="fun-fact">
                @include('site.pages.homesection.statistics')
        </section><!--End section-->    
        <div class="clearfix"></div>
       <section class="section-setting clients-wrap">
           <div class="container">
               <div class="row text-center">
                   <div class="col-sm-12">
                       <div class="section-title">
                           <div class="heading">ماذا يقول الناس عنا</div>
                       </div>
                   </div>
                   <div class="spacer-10"></div>
                   <div id="clients" class="owl-carousel owl-theme">
                   @if(count($comments)>0)
                    @foreach($comments as $c)
                       <div class="carousel-item">
                           <div class="opinion-box">
                               <div class="opinion-img">
                                   <img src="{{url('assets/images/team-5.jpg')}}">
                                    <h3> {{$c->member->f_name}}</h3>
                               </div>
                               <div class="opinion-details">
                                   <i class="fa fa-quote-left"></i>
                                   <p>
                                      {{$c->comment}}
                                   </p>
                                   <i class="fa fa-quote-right"></i>
                               </div>
                           </div>
                       </div>

                    @endforeach
                  @endif
                   </div>
               </div>
           </div>
       </section>
   </div><!--End Page-Content-->
@endsection

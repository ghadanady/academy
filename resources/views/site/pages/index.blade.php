@extends('site.layouts.base.master')

@section('title')
الاكاديميه 
@endsection
@section('content')

    <!-- slider section -->
    @include('site.pages.homesection.slider')

    <div class="page-content">
        <section class="section-setting">
         @include('site.pages.homesection.search')  
        </section><!--End Section-->
        <div class="clearfix"></div>
        <section class="section-setting section-color">
            <div class="container">
              @include('site.pages.homesection.latest_cources')
            </div><!--End Container-->
        </section><!--End Section-->
        <div class="clearfix"></div>
        <section class="fun-fact">
                @include('site.pages.homesection.statistics')
        </section><!--End section-->    
        <div class="clearfix"></div>
        <section class="section-setting">
            @include('site.pages.homesection.instracturs')
        </section>
        <div class="clearfix"></div>
         <section class="section-setting section-color">
           @include('site.pages.homesection.news')
        </section><!--End section--> 
    </div><!--End Page-Content-->
    </div>
@endsection

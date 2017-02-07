@extends('site.layouts.base.master')

@section('title')
المحاضرين
@endsection
@section('content')

   <section class="page-heading">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <h2>المحاضرين</h2>
               </div><!--End col-md-6-->
               <div class="col-md-6">
                   <ul class="breadcrumb">
                       <li><a href="{{url('/')}}">المحاضرين</a></li>  
                      
                       <li class="active">المحاضرين</li>
                   </ul>
               </div><!--End col-md-6-->
           </div><!--End Row-->
       </div><!--End container-->
   </section>
    
                <div class="page-content">
                    <section class="section-setting section-color blogs-wrap">
                        <div class="container">
                            <div class="row">
@if(count($articles)>0)
@foreach($articles as $a)

                                <div class="col-md-3 col-sm-6">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img 
                            src="{{ url('storage/uploads/images/article') }}/{{ $a->image ? $a->image->name : 'p_default.png' }}"/>
                                            <div class="blog-date">
                                                <span> {{ $a->created_at->format('M-d') }}</span>
                                                <span> {{ $a->created_at->format('Y') }}</span>
                                            </div><!--End Blog-date-->
                                        </div><!--End Blog-img-->
                                        <div class="blog-content">
                                            <a href="{{url('article')}}/{{$a->slug}}">{{$a->name}}</a>
                                            <ul class="info">
                                                <li>
                                                    <i class="fa fa-edit"></i>
                                                    {{$a->instarctor->name}}
                                                </li>
                                                <li>
                                                    <i class="fa fa-tag"></i>
                                                    {{$a->Category->name}}
                                                </li>
                                            </ul><!--End Info-->
                                            {!! $a->body!!}
                                        </div><!--End Blog-content-->
                                    </div><!--End Blog-item-->
                                </div>
   
@endforeach

                                </div>
                                <div class="col-sm-12">
                                    <ul class="pagination-wrapper">
                                        <li class="active"><a href="">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href=""><i class="fa fa-angle-left"></i> </a></li>
                                    </ul>
                                </div>
@else
<div>لم يتم اضافه مقالات بعد </div>
@endif
                            </div>
                        </div>
                    </section>
                </div><!--End Page-Content-->
    
@endsection

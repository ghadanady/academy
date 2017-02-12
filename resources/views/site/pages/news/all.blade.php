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
              <span> {{ar_date('D M',$a->created_at->timestamp) }}</span>
                <span> {{ar_date('Y',$a->created_at->timestamp) }}</span>
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
              
              {!!str_limit($a->body,100)!!}
            </div><!--End Blog-content-->
          </div><!--End Blog-item-->
        </div>

        @endforeach

      </div>
      <div class="col-sm-12">
        <ul class="pagination-wrapper">

          {{ $articles->links() }}

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

@extends('site.layouts.base.master')

@section('title')
 {{$article->name}}
@endsection
@section('content')

   <section class="page-heading">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <h2> {{$article->name}}</h2>
               </div><!--End col-md-6-->
               <div class="col-md-6">
                   <ul class="breadcrumb">

                       <li><a href="{{url('/')}}">الرئيسية</a></li> 

                       <li class="active"> {{$article->name}}  </li>
                      
                      
                      
                   </ul>
               </div><!--End col-md-6-->
           </div><!--End Row-->
       </div><!--End container-->
   </section>
    
                <div class="page-content">
                       <section class="section-setting section-color" id="only-blog">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="only-blog-content">
                                        <div class="only-blog-img">
                            <img 
                            src="{{ url('storage/uploads/images/article') }}/{{ $article->image ?
                             $article->image->name : 'p_default.png' }}"/>
                                        </div>
                                        <div class="title">
                                            <div class="only-blog-date">
                                                <span>{{ $article->created_at->format('D') }}</span>
                                                <span>{{ $article->created_at->format('M') }}</span>
                                            </div>
                                            <h3>
                                                {{$article->name}}
                                            </h3>
                                        </div>
                                        <div class="only-blog-details">
                                          {!!$article->body!!} 

                                        </div>

                                       

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="only-blog-info">
                                        <div class="widget-color">
                                            <div class="widget-title">
                                                <i class="fa fa-edit"></i>
                                                كاتب المقال
                                            </div>
                                            <div class="widget-content">
                                                <div class="author-img">
                                                     <img 
                            src="{{ url('storage/uploads/images/instructor') }}/{{ $article->instarctor->image ?$article->instarctor->image->name : 'p_default.png' }}"/>
                                                </div>
                                                <div class="author-info">
                                                    <h4>{{$article->instarctor->name}}</h4>
                                                    
                                                    {!!$article->instarctor->body!!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-color">
                                            <div class="widget-title">
                                                <i class="fa fa-share"></i>
                                                شارك الخبر : 
                                            </div>
                                            <div class="widget-content">
                                                <ul class="share">
                                           

                                                    <!-- AddToAny BEGIN -->
                                                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                                    
                                                    <a class="a2a_button_facebook"
                                                     data-url="{{$article->getUrl()}}"></a>
                                                    <a 
                                                    data-url="{{$article->getUrl()}}"
                                                    class="a2a_button_twitter"></a>
                                                    <a 
                                                    data-url="{{$article->getUrl()}}"
                                                    class="a2a_button_google_plus"></a>
                                                    </div>
                                                   
                                                    <!-- AddToAny END -->
                                                </ul>
                                            </div>
                                        </div>
                                        @if(count($related_article)>0)
                                        <div class="widget-color">
                                            <div class="widget-title">
                                                <i class="fa fa-newspaper-o"></i>
                                                أخبار متعلقة
                                            </div>
                                            <div class="widget-content">
                                            
                                            @foreach($related_article as $r)
                                                <div class="item-list">
                                                    <div class="item-list-img">
                             <img 
                            src="{{ url('storage/uploads/images/article') }}/{{ $r->image ? $r->image->name : 'p_default.png' }}"/>
                                                    </div>
                                                    <div class="item-list-details">
                                                        <a href="only-blog.html">{{$r->name}}</a>
                                                        <p>
                                                               {{$r->body}}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach

                                            </div>
                                        </div>
                                        @endif
 
                                    @if(count($most_view)>0)
                                       <div class="widget-color">
                                            <div class="widget-title">
                                                <i class="fa fa-newspaper-o"></i>
                                                الأكثر قراءة
                                            </div>
                                            <div class="widget-content">

                                              @foreach($most_view as $r)
                                                <div class="item-list">
                                                    <div class="item-list-img">
                                                         <img 
                                                        src="{{ url('storage/uploads/images/article') }}/{{ $r->image ? $r->image->name : 'p_default.png' }}"/>
                                                    </div>
                                                    <div class="item-list-details">
                                                        <a href="only-blog.html">{{$r->name}}</a>
                                                        
                                                           <p>
                                                               {{$r->body}}
                                                        </p>
                                                        
                                                    </div>
                                                </div>
                                                @endforeach                                  

                                            </div>
                                        </div>
                                         @endif
                                    </div>
                                </div>
                            </div><!-- End Row-->
                        </div><!-- End Container-->
                    </section><!-- End Section-->
                </div><!--End Page-Content-->
        
   
   
    
@endsection

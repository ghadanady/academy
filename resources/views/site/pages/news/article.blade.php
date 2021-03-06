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
                            src="{{ url('storage/uploads/images/new') }}/{{ $article->image ?
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
       <div class="widget">
                                              <div class="widget-title">
                                                  أراء الطلاب
                                              </div>
                                              <div class="widget-content">
      @if(count($article->comments)>0  && !empty($article->comments))
         @foreach($article->comments as $c)
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
                                                 <form action ='{{url("news/comment")}}'
                                                 onsubmit="return false;" 
                                                                 method="post" 
                                                                 class="rate-form">
                                                                 {{ csrf_field() }}
                                                                 <input type="hidden"
                                                                  name="news_id"
                                                                  value="{{$article->id}}" 
                                                                  />
                                                                 
                                                                 
                                                                     <div class="form-group">
                                                                         <textarea 
                                                                         name="comment" 
                                                 

                                                                         class="form-control" placeholder="التعليق"></textarea>
                                                                     </div>
                                                                    
                                                                     <div class="form-group">
                                                                         <button class="addComment custom-btn">إرسال </button>
                                                                     </div>
                                                                 </form>
                                              </div>
                                          </div>

                                           <div class="clearfix"></div>

                                       

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
                                                    
                                                    {!!str_limit($article->instarctor->body,70)!!}
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
                            src="{{ url('storage/uploads/images/new') }}/{{ $r->image ? $r->image->name : 'p_default.png' }}"/>
                                                    </div>
                                                    <div class="item-list-details">
                                                        <a href="{{$r->getUrl()}}">{{$r->name}}</a>
                                                        <p>
                                                              
                                                                 {!!str_limit($r->body,50)!!}
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
                                                        src="{{ url('storage/uploads/images/new') }}/{{ $r->image ? $r->image->name : 'p_default.png' }}"/>
                                                    </div>
                                                    <div class="item-list-details">
                                                        <a href="{{$r->getUrl()}}">{{$r->name}}</a>
                                                        
                                                           <p>
                                                              
                                                              
                                                               {!!str_limit($r->body,50)!!}
                                                               
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

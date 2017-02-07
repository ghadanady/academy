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
                       <li><a href="{{url('/')}}">الرئيسية</a></li>  
                      
                       <li class="active"> {{$in->name}}</li>
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
                                            <img src="images/team-5.jpg">
                                        </div>
                                        <div class="content">
                                            <h3>هشام جمال</h3>
                                            <p>مبرمج مواقع</p>
                                        </div>
                                        <ul>
                                            <p>تابع  المحاضر</p>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-google-plus"></a></li>
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
                                                <p>
                                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأه هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأه
                                                </p>
                                            </div>
                                        </div>
                                        <div class="widget">
                                            <div class="widget-title">
                                                المؤهلات
                                            </div>
                                            <div class="widget-content">
                                                <ul class="qualfic">
                                                    <li>بكالوريوس هندسة جامعة القاهرة</li>
                                                    <li>تقنيات التصميم المتقدمة</li>
                                                    <li>عدسة نظرية المناظر الطبيعية وممارسة التصميم</li>
                                                    <li>بكالوريوس هندسة جامعة القاهرة</li>
                                                    <li>تقنيات التصميم المتقدمة</li>
                                                    <li>عدسة نظرية المناظر الطبيعية وممارسة التصميم</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="widget">
                                            <div class="widget-title">
                                                أراء الطلاب
                                            </div>
                                            <div class="widget-content">
                                                <div class="comment-block">
                                                    <div class="person-img">
                                                        <img src="images/team-5.jpg">
                                                    </div><!--End person-img-->
                                                    <div class="person-comment">
                                                        <h3>
                                                            هشام جمال
                                                            <ul class="rate">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </h3>
                                                        <p>
                                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. 
                                                        </p>
                                                    </div><!--End person-comment-->
                                                </div><!--End comment-block-->
                                                <div class="comment-block">
                                                    <div class="person-img">
                                                        <img src="images/team-5.jpg">
                                                    </div><!--End person-img-->
                                                    <div class="person-comment">
                                                        <h3>
                                                            هشام جمال
                                                            <ul class="rate">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </h3>
                                                        <p>
                                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. 
                                                        </p>
                                                    </div><!--End person-comment-->
                                                </div><!--End comment-block-->
                                                <div class="comment-block">
                                                    <div class="person-img">
                                                        <img src="images/team-5.jpg">
                                                    </div><!--End person-img-->
                                                    <div class="person-comment">
                                                        <h3>
                                                            هشام جمال
                                                            <ul class="rate">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </h3>
                                                        <p>
                                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. 
                                                        </p>
                                                    </div><!--End person-comment-->
                                                </div><!--End comment-block-->
                                                <div class="comment-block">
                                                    <div class="person-img">
                                                        <img src="images/team-5.jpg">
                                                    </div><!--End person-img-->
                                                    <div class="person-comment">
                                                        <h3>
                                                            هشام جمال
                                                            <ul class="rate">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </h3>
                                                        <p>
                                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. 
                                                        </p>
                                                    </div><!--End person-comment-->
                                                </div><!--End comment-block-->
                                            </div>
                                        </div>
                                        <div class="widget">
                                            <div class="widget-title">
                                                أضف تعليق عن المحاضر
                                            </div>
                                            <div class="widget-content">
                                                <form class="rate-form">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" placeholder="الأسم">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" placeholder="االبريد الألكترونى">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="التعليق"></textarea>
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
                                                        <button class="custom-btn">إرسال التقييم</button>
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

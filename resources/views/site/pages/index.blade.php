@extends('site.layouts.base.master')

@section('title')
الاكاديميه 
@endsection
@section('content')

    <!-- slider section -->
    @include('site.layouts.partials.slider')

    <div class="page-content">
        <section class="section-setting">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="about-wrap">
                            <div class="title">
                            الأكاديمية نظام تعليمى متكامل
                            </div>
                            <div class="details">
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأههناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأه
                            </div>
                            <div class="spacer-20"></div>
                            <div class="features">
                                <div class="only-feat">
                                    <i class="fa fa-users"></i>
                                    <h3>محاضرين ذو كفاءة</h3>
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص 
                                    </p>
                                </div>
                                <div class="only-feat">
                                    <i class="fa fa-certificate"></i>
                                    <h3>شهادات معتمدة</h3>
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص 
                                    </p>
                                </div>                                            
                                

                            </div>
                        </div><!--End About-->
                    </div>
                    <div class="col-md-5">
                        <div class="search-wrap">
                            <div class="search-title">
                                <i class="fa fa-search"></i>
                                بحث من هنا
                            </div>
                            <div class="search-content">
                                <form>
                                    <div class="form-group">
                                        <label>إسم الدورة :</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>التصنيف :</label>
                                        <select class="form-control">
                                            <option>برمجة</option>
                                            <option>محاسبة</option>
                                            <option>إقتصاد</option>
                                            <option>لغات</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="search-footer">
                                <div class="form-group">
                                    <button class="custom-btn">بحث</button>
                                </div>
                            </div>
                        </div><!--End Search-wrap-->
                    </div>
                </div><!--End Row-->
            </div><!--End Container-->
        </section><!--End Section-->
        <div class="clearfix"></div>
        <section class="section-setting section-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <div class="heading"> أحدث الدورات</div>
                        </div>
                    </div>
                    <div class="spacer-10"></div>
                    <div id="courses" class="owl-carousel owl-theme">
                        <div class="carousel-item">
                            <div class="course-item">
                                <div class="course-img">
                                    <img src="images/course-1.jpg">
                                    <div class="hover">
                                        <a href="only-course.html" class="custom-btn">المزيد</a>
                                        <a class="popup-text custom-btn" href="#course-regs" data-effect="mfp-move-from-top">سجل الأن</a>
                                    </div>
                                </div><!--End Course-img-->
                                <div class="course-content">
                                    <div class="course-heading">
                                        <a href="only-course.html">
                                            دورة تصميم المواقع الألكترونية
                                        </a>
                                        <ul class="author">
                                            <li class="lecturer">
                                                <a href="only-lecturer.html">هشام جمال</a>
                                            </li>
                                            <li class="category">
                                                <a href="only-catogry.html">برمجة</a>
                                            </li>
                                        </ul>
                                    </div><!--End Heading-->
                                    <div class="course-details">
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز 
                                    </div><!--End Course-content-->
                                    <div class="course-info">
                                        <div class="comment-status">
                                            <i class="fa fa-commenting-o"></i>
                                           24 تعليق 
                                        </div>
                                        <ul class="rate">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div><!--End Course-info-->
                                </div><!--End Course-content-->
                            </div><!--End Course-item-->
                        </div><!--End carousel-item-->
                        <div class="carousel-item">
                            <div class="course-item">
                                <div class="course-img">
                                    <img src="images/course-2.jpg">
                                    <div class="hover">
                                        <a href="only-course.html" class="custom-btn">المزيد</a>
                                        <a class="popup-text custom-btn" href="#course-regs" data-effect="mfp-move-from-top">سجل الأن</a>
                                    </div>
                                </div><!--End Course-img-->
                                <div class="course-content">
                                    <div class="course-heading">
                                        <a href="only-course.html">
                                            دورة تصميم المواقع الألكترونية
                                        </a>
                                        <ul class="author">
                                            <li class="lecturer">
                                                <a href="only-lecturer.html">هشام جمال</a>
                                            </li>
                                            <li class="category">
                                                <a href="only-catogry.html">برمجة</a>
                                            </li>
                                        </ul>
                                    </div><!--End Heading-->
                                    <div class="course-details">
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز 
                                    </div><!--End Course-content-->
                                    <div class="course-info">
                                        <div class="comment-status">
                                            <i class="fa fa-commenting-o"></i>
                                           24 تعليق 
                                        </div>
                                        <ul class="rate">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div><!--End Course-info-->
                                </div><!--End Course-content-->
                            </div><!--End Course-item-->
                        </div><!--End carousel-item-->
                        <div class="carousel-item">
                            <div class="course-item">
                                <div class="course-img">
                                    <img src="images/course-3.jpg">
                                    <div class="hover">
                                        <a href="only-course.html" class="custom-btn">المزيد</a>
                                        <a class="popup-text custom-btn" href="#course-regs" data-effect="mfp-move-from-top">سجل الأن</a>
                                    </div>
                                </div><!--End Course-img-->
                                <div class="course-content">
                                    <div class="course-heading">
                                        <a href="only-course.html">
                                            دورة تصميم المواقع الألكترونية
                                        </a>
                                        <ul class="author">
                                            <li class="lecturer">
                                                <a href="only-lecturer.html">هشام جمال</a>
                                            </li>
                                            <li class="category">
                                                <a href="only-catogry.html">برمجة</a>
                                            </li>
                                        </ul>
                                    </div><!--End Heading-->
                                    <div class="course-details">
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز 
                                    </div><!--End Course-content-->
                                    <div class="course-info">
                                        <div class="comment-status">
                                            <i class="fa fa-commenting-o"></i>
                                           24 تعليق 
                                        </div>
                                        <ul class="rate">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div><!--End Course-info-->
                                </div><!--End Course-content-->
                            </div><!--End Course-item-->
                        </div><!--End carousel-item-->
                        <div class="carousel-item">
                            <div class="course-item">
                                <div class="course-img">
                                    <img src="images/course-5.jpg">
                                    <div class="hover">
                                        <a href="only-course.html" class="custom-btn">المزيد</a>
                                        <a class="popup-text custom-btn" href="#course-regs" data-effect="mfp-move-from-top">سجل الأن</a>
                                    </div>
                                </div><!--End Course-img-->
                                <div class="course-content">
                                    <div class="course-heading">
                                        <a href="only-course.html">
                                            دورة تصميم المواقع الألكترونية
                                        </a>
                                        <ul class="author">
                                            <li class="lecturer">
                                                <a href="only-lecturer.html">هشام جمال</a>
                                            </li>
                                            <li class="category">
                                                <a href="only-catogry.html">برمجة</a>
                                            </li>
                                        </ul>
                                    </div><!--End Heading-->
                                    <div class="course-details">
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز 
                                    </div><!--End Course-content-->
                                    <div class="course-info">
                                        <div class="comment-status">
                                            <i class="fa fa-commenting-o"></i>
                                           24 تعليق 
                                        </div>
                                        <ul class="rate">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div><!--End Course-info-->
                                </div><!--End Course-content-->
                            </div><!--End Course-item-->
                        </div><!--End carousel-item-->
                        <div class="carousel-item">
                            <div class="course-item">
                                <div class="course-img">
                                    <img src="images/course-5.jpg">
                                    <div class="hover">
                                        <a href="only-course.html" class="custom-btn">المزيد</a>
                                        <a class="popup-text custom-btn" href="#course-regs" data-effect="mfp-move-from-top">سجل الأن</a>
                                    </div>
                                </div><!--End Course-img-->
                                <div class="course-content">
                                    <div class="course-heading">
                                        <a href="only-course.html">
                                            دورة تصميم المواقع الألكترونية
                                        </a>
                                        <ul class="author">
                                            <li class="lecturer">
                                                <a href="only-lecturer.html">هشام جمال</a>
                                            </li>
                                            <li class="category">
                                                <a href="only-catogry.html">برمجة</a>
                                            </li>
                                        </ul>
                                    </div><!--End Heading-->
                                    <div class="course-details">
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز 
                                    </div><!--End Course-content-->
                                    <div class="course-info">
                                        <div class="comment-status">
                                            <i class="fa fa-commenting-o"></i>
                                           24 تعليق 
                                        </div>
                                        <ul class="rate">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div><!--End Course-info-->
                                </div><!--End Course-content-->
                            </div><!--End Course-item-->
                        </div><!--End carousel-item-->
                        <div class="carousel-item">
                            <div class="course-item">
                                <div class="course-img">
                                    <img src="images/course-9.jpg">
                                    <div class="hover">
                                        <a href="only-course.html" class="custom-btn">المزيد</a>
                                        <a class="popup-text custom-btn" href="#course-regs" data-effect="mfp-move-from-top">سجل الأن</a>
                                    </div>
                                </div><!--End Course-img-->
                                <div class="course-content">
                                    <div class="course-heading">
                                        <a href="only-course.html">
                                            دورة تصميم المواقع الألكترونية
                                        </a>
                                        <ul class="author">
                                            <li class="lecturer">
                                                <a href="only-lecturer.html">هشام جمال</a>
                                            </li>
                                            <li class="category">
                                                <a href="only-catogry.html">برمجة</a>
                                            </li>
                                        </ul>
                                    </div><!--End Heading-->
                                    <div class="course-details">
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز 
                                    </div><!--End Course-content-->
                                    <div class="course-info">
                                        <div class="comment-status">
                                            <i class="fa fa-commenting-o"></i>
                                           24 تعليق 
                                        </div>
                                        <ul class="rate">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div><!--End Course-info-->
                                </div><!--End Course-content-->
                            </div><!--End Course-item-->
                        </div><!--End carousel-item-->
                        <div class="carousel-item">
                            <div class="course-item">
                                <div class="course-img">
                                    <img src="images/course-7.jpg">
                                    <div class="hover">
                                        <a href="only-course.html" class="custom-btn">المزيد</a>
                                        <a class="popup-text custom-btn" href="#course-regs" data-effect="mfp-move-from-top">سجل الأن</a>
                                    </div>
                                </div><!--End Course-img-->
                                <div class="course-content">
                                    <div class="course-heading">
                                        <a href="only-course.html">
                                            دورة تصميم المواقع الألكترونية
                                        </a>
                                        <ul class="author">
                                            <li class="lecturer">
                                                <a href="only-lecturer.html">هشام جمال</a>
                                            </li>
                                            <li class="category">
                                                <a href="only-catogry.html">برمجة</a>
                                            </li>
                                        </ul>
                                    </div><!--End Heading-->
                                    <div class="course-details">
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز 
                                    </div><!--End Course-content-->
                                    <div class="course-info">
                                        <div class="comment-status">
                                            <i class="fa fa-commenting-o"></i>
                                           24 تعليق 
                                        </div>
                                        <ul class="rate">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div><!--End Course-info-->
                                </div><!--End Course-content-->
                            </div><!--End Course-item-->
                        </div><!--End carousel-item-->
                        <div class="carousel-item">
                            <div class="course-item">
                                <div class="course-img">
                                    <img src="images/course-8.jpg">
                                    <div class="hover">
                                        <a href="only-course.html" class="custom-btn">المزيد</a>
                                        <a class="popup-text custom-btn" href="#course-regs" data-effect="mfp-move-from-top">سجل الأن</a>
                                    </div>
                                </div><!--End Course-img-->
                                <div class="course-content">
                                    <div class="course-heading">
                                        <a href="only-course.html">
                                            دورة تصميم المواقع الألكترونية
                                        </a>
                                        <ul class="author">
                                            <li class="lecturer">
                                                <a href="only-lecturer.html">هشام جمال</a>
                                            </li>
                                            <li class="category">
                                                <a href="only-catogry.html">برمجة</a>
                                            </li>
                                        </ul>
                                    </div><!--End Heading-->
                                    <div class="course-details">
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز 
                                    </div><!--End Course-content-->
                                    <div class="course-info">
                                        <div class="comment-status">
                                            <i class="fa fa-commenting-o"></i>
                                           24 تعليق 
                                        </div>
                                        <ul class="rate">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div><!--End Course-info-->
                                </div><!--End Course-content-->
                            </div><!--End Course-item-->
                        </div><!--End carousel-item-->
                    </div>
                </div><!--End Row-->
            </div><!--End Container-->
        </section><!--End Section-->
        <div class="clearfix"></div>
        <section class="fun-fact">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 counter">
                        <div class="counter-number">
                            <h3 class="timer" data-to="254" data-speed="2500">0</h3>
                        </div>
                        <span>دورات متنوعة</span>
                    </div><!-- End Counter-->
                    <div class="col-md-3 col-sm-6 counter">
                        <div class="counter-number">
                            <h3 class="timer" data-to="254" data-speed="2500">0</h3>
                        </div>
                        <span>محاضر</span>
                    </div><!-- End Counter-->
                    <div class="col-md-3 col-sm-6 counter">
                        <div class="counter-number">
                            <h3 class="timer" data-to="254" data-speed="2500">0</h3>
                        </div>
                        <span>طالب</span>
                    </div><!-- End Counter-->
                    <div class="col-md-3 col-sm-6 counter">
                        <div class="counter-number">
                            <h3 class="timer" data-to="254" data-speed="2500">0</h3>
                        </div>
                        <span>شهادة معتمدة</span>
                    </div><!-- End Counter-->
                </div><!-- End Row-->
            </div><!-- End container-fluid -->
        </section><!--End section-->    
        <div class="clearfix"></div>
        <section class="section-setting">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <div class="heading">المحاضرين</div>
                        </div>
                    </div>
                    <div class="spacer-10"></div>
                    <div id="lecturers" class="owl-carousel owl-theme">
                        <div class="carousel-item">
                            <div class="team-block">
                                <div class="team-block-links">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"  class="fa fa-twitter"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"  class="fa fa-google-plus"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="instagram"  class="fa fa-instagram"></a>
                                </div>
                                <div class="team-block-img">
                                    <img src="images/team-1.jpg">
                                </div>
                                <div class="team-block-details">
                                    <a href="only-lecturer.html">إسم المحاضر</a>
                                    <p>مبرمج ويب</p>
                                </div>
                            </div><!-- End team block -->
                        </div>
                        <div class="carousel-item">
                            <div class="team-block">
                                <div class="team-block-links">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"  class="fa fa-twitter"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"  class="fa fa-google-plus"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="instagram"  class="fa fa-instagram"></a>
                                </div>
                                <div class="team-block-img">
                                    <img src="images/team-2.jpg">
                                </div>
                                <div class="team-block-details">
                                    <a href="only-lecturer.html">إسم المحاضر</a>
                                    <p>مبرمج ويب</p>
                                </div>
                            </div><!-- End team block -->
                        </div>
                        <div class="carousel-item">
                            <div class="team-block">
                                <div class="team-block-links">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"  class="fa fa-twitter"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"  class="fa fa-google-plus"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="instagram"  class="fa fa-instagram"></a>
                                </div>
                                <div class="team-block-img">
                                    <img src="images/team-3.jpg">
                                </div>
                                <div class="team-block-details">
                                    <a href="only-lecturer.html">إسم المحاضر</a>
                                    <p>مبرمج ويب</p>
                                </div>
                            </div><!-- End team block -->
                        </div>
                        <div class="carousel-item">
                            <div class="team-block">
                                <div class="team-block-links">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"  class="fa fa-twitter"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"  class="fa fa-google-plus"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="instagram"  class="fa fa-instagram"></a>
                                </div>
                                <div class="team-block-img">
                                    <img src="images/team-4.jpg">
                                </div>
                                <div class="team-block-details">
                                    <a href="only-lecturer.html">إسم المحاضر</a>
                                    <p>مبرمج ويب</p>
                                </div>
                            </div><!-- End team block -->
                        </div>
                        <div class="carousel-item">
                            <div class="team-block">
                                <div class="team-block-links">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"  class="fa fa-twitter"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"  class="fa fa-google-plus"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="instagram"  class="fa fa-instagram"></a>
                                </div>
                                <div class="team-block-img">
                                    <img src="images/team-5.jpg">
                                </div>
                                <div class="team-block-details">
                                    <a href="only-lecturer.html">إسم المحاضر</a>
                                    <p>مبرمج ويب</p>
                                </div>
                            </div><!-- End team block -->
                        </div>
                        <div class="carousel-item">
                            <div class="team-block">
                                <div class="team-block-links">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"  class="fa fa-twitter"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"  class="fa fa-google-plus"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="instagram"  class="fa fa-instagram"></a>
                                </div>
                                <div class="team-block-img">
                                    <img src="images/team-6.jpg">
                                </div>
                                <div class="team-block-details">
                                    <a href="only-lecturer.html">إسم المحاضر</a>
                                    <p>مبرمج ويب</p>
                                </div>
                            </div><!-- End team block -->
                        </div>
                        <div class="carousel-item">
                            <div class="team-block">
                                <div class="team-block-links">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"  class="fa fa-twitter"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"  class="fa fa-google-plus"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="instagram"  class="fa fa-instagram"></a>
                                </div>
                                <div class="team-block-img">
                                    <img src="images/team-7.jpg">
                                </div>
                                <div class="team-block-details">
                                    <a href="only-lecturer.html">إسم المحاضر</a>
                                    <p>مبرمج ويب</p>
                                </div>
                            </div><!-- End team block -->
                        </div>
                        <div class="carousel-item">
                            <div class="team-block">
                                <div class="team-block-links">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"  class="fa fa-twitter"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"  class="fa fa-google-plus"></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="instagram"  class="fa fa-instagram"></a>
                                </div>
                                <div class="team-block-img">
                                    <img src="images/team-8.jpg">
                                </div>
                                <div class="team-block-details">
                                    <a href="only-lecturer.html">إسم المحاضر</a>
                                    <p>مبرمج ويب</p>
                                </div>
                            </div><!-- End team block -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
         <section class="section-setting section-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <div class="heading">الأخبار</div>
                        </div>
                    </div>
                    <div class="spacer-10"></div>
                    <div id="blogs" class="owl-carousel owl-theme">
                        <div class="carousel-item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="images/blog-grid-1.jpg">
                                    <div class="blog-date">
                                        <span>23 يناير</span>
                                        <span>2017</span>
                                    </div><!--End Blog-date-->
                                </div><!--End Blog-img-->
                                <div class="blog-content">
                                    <a href="only-blog.html">عنوان الخبر يكتب هنا</a>
                                    <ul class="info">
                                        <li>
                                            <i class="fa fa-edit"></i>
                                            هشام جمال
                                        </li>
                                        <li>
                                            <i class="fa fa-tag"></i>
                                            برمجة
                                        </li>
                                    </ul><!--End Info-->
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي 
                                    </p>
                                </div><!--End Blog-content-->
                            </div><!--End Blog-item-->
                        </div>
                        <div class="carousel-item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="images/blog-grid-2.jpg">
                                    <div class="blog-date">
                                        <span>23 يناير</span>
                                        <span>2017</span>
                                    </div><!--End Blog-date-->
                                </div><!--End Blog-img-->
                                <div class="blog-content">
                                    <a href="only-blog.html">عنوان الخبر يكتب هنا</a>
                                    <ul class="info">
                                        <li>
                                            <i class="fa fa-edit"></i>
                                            هشام جمال
                                        </li>
                                        <li>
                                            <i class="fa fa-tag"></i>
                                            برمجة
                                        </li>
                                    </ul><!--End Info-->
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي 
                                    </p>
                                </div><!--End Blog-content-->
                            </div><!--End Blog-item-->
                        </div>
                        <div class="carousel-item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="images/blog-grid-3.jpg">
                                    <div class="blog-date">
                                        <span>23 يناير</span>
                                        <span>2017</span>
                                    </div><!--End Blog-date-->
                                </div><!--End Blog-img-->
                                <div class="blog-content">
                                    <a href="only-blog.html">عنوان الخبر يكتب هنا</a>
                                    <ul class="info">
                                        <li>
                                            <i class="fa fa-edit"></i>
                                            هشام جمال
                                        </li>
                                        <li>
                                            <i class="fa fa-tag"></i>
                                            برمجة
                                        </li>
                                    </ul><!--End Info-->
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي 
                                    </p>
                                </div><!--End Blog-content-->
                            </div><!--End Blog-item-->
                        </div>
                        <div class="carousel-item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="images/blog-grid-4.jpg">
                                    <div class="blog-date">
                                        <span>23 يناير</span>
                                        <span>2017</span>
                                    </div><!--End Blog-date-->
                                </div><!--End Blog-img-->
                                <div class="blog-content">
                                    <a href="only-blog.html">عنوان الخبر يكتب هنا</a>
                                    <ul class="info">
                                        <li>
                                            <i class="fa fa-edit"></i>
                                            هشام جمال
                                        </li>
                                        <li>
                                            <i class="fa fa-tag"></i>
                                            برمجة
                                        </li>
                                    </ul><!--End Info-->
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي 
                                    </p>
                                </div><!--End Blog-content-->
                            </div><!--End Blog-item-->
                        </div>
                        <div class="carousel-item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="images/blog-grid-5.jpg">
                                    <div class="blog-date">
                                        <span>23 يناير</span>
                                        <span>2017</span>
                                    </div><!--End Blog-date-->
                                </div><!--End Blog-img-->
                                <div class="blog-content">
                                    <a href="only-blog.html">عنوان الخبر يكتب هنا</a>
                                    <ul class="info">
                                        <li>
                                            <i class="fa fa-edit"></i>
                                            هشام جمال
                                        </li>
                                        <li>
                                            <i class="fa fa-tag"></i>
                                            برمجة
                                        </li>
                                    </ul><!--End Info-->
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي 
                                    </p>
                                </div><!--End Blog-content-->
                            </div><!--End Blog-item-->
                        </div>
                        <div class="carousel-item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="images/blog-grid-6.jpg">
                                    <div class="blog-date">
                                        <span>23 يناير</span>
                                        <span>2017</span>
                                    </div><!--End Blog-date-->
                                </div><!--End Blog-img-->
                                <div class="blog-content">
                                    <a href="only-blog.html">عنوان الخبر يكتب هنا</a>
                                    <ul class="info">
                                        <li>
                                            <i class="fa fa-edit"></i>
                                            هشام جمال
                                        </li>
                                        <li>
                                            <i class="fa fa-tag"></i>
                                            برمجة
                                        </li>
                                    </ul><!--End Info-->
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي 
                                    </p>
                                </div><!--End Blog-content-->
                            </div><!--End Blog-item-->
                        </div>
                    </div>
                </div><!-- End Row-->
            </div><!-- End container-->
        </section><!--End section--> 
    </div><!--End Page-Content-->
    </div>
@endsection

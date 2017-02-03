<!DOCTYPE html>
<html>

    <head>
        <!-- Meta Tags
        ======================-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="">
        
        <!-- Title Name
        ================================-->
        <title>الأكاديمية| @yield('title')</title>

        <!-- Fave Icons
        ================================-->
        <link rel="shortcut icon" href="images/fav.png">
        
        <!-- Google Web Fonts 
		===========================-->        
        <link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet" type="text/css">
        
        <!-- Css Base And Vendor 
        ===================================-->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-ar.css">
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel/owl.carousel.css">
        <link rel="stylesheet" href="vendor/owl.carousel/owl.theme.css">
        <link rel="stylesheet" href="vendor/magnific-popup/css/magnific-popup.css">
        <link rel="stylesheet" href="vendor/magnific-popup/css/custom.css"> 

        <!-- Site Css
        ====================================-->
        <link rel="stylesheet" href="css/style.css">
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="course-regs" class="mfp-with-anim mfp-hide mfp-dialog dialog-box">
            <div class="course-regs-cont">
                <i class="fa fa-thumbs-o-up"></i>
                <p>
                    تم التسجيل فى إنتظار موافقة الإدارة
                </p>
            </div>
        </div>
        <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog dialog-box">
            <div class="dialog-title">
                تسجيل الدخول
            </div>    
            <form class="dialog-form">
                <div class="form-group">
                    <input class="form-control" placeholder="البريد الالكترونى" type="email">
                </div><!--End form-group-->
                <div class="form-group">
                    <input class="form-control"  placeholder="كلمة السر" type="password">
                </div><!--End form-group-->
                <a class="popup-text forget" href="#password-recover-dialog" data-effect="mfp-zoom-out">
                    نسيت كلمة السر؟
                </a>
                <button type="submit" class="custom-btn">تسجيل دخول</button>
            </form><!--End dialog-form-->
            <div class="dont-have">
                ليس لديك حساب..
                <a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">سجل الأن</a>
            </div>           
        </div><!--End login-dialog-->
        <div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog dialog-box">
            <div class="dialog-title">
                إسترجاع كلمة المرور
            </div>    
            <form class="dialog-form">
                <div class="form-group">
                    <input class="form-control" placeholder="البريد الالكترونى" type="email">
                </div><!--End form-group-->
                <button type="submit" class="custom-btn">إسترجاع كلمة المرور</button>
            </form><!--End dialog-form-->
        </div><!--End login-dialog-->
        <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog dialog-box">
            <div class="dialog-title">
                عضوية جديدة
            </div>    
            <form class="dialog-form">
                <div class="form-group">
                    <input class="form-control" placeholder="الأسم الأول" type="text">
                </div><!--End form-group-->
                <div class="form-group">
                    <input class="form-control" placeholder="الأسم الأخير" type="text">
                </div><!--End form-group-->
                <div class="form-group">
                    <input class="form-control" placeholder="البريد الالكترونى" type="email">
                </div><!--End form-group-->
                <div class="form-group">
                    <input class="form-control"  placeholder="كلمة السر" type="password">
                </div><!--End form-group-->
                <button type="submit" class="custom-btn">تسجيل </button>
            </form><!--End dialog-form-->
            <div class="dont-have">
                لديك حساب بالفعل ..
                <a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">إدخل الأن</a>
            </div>           
        </div><!--End login-dialog-->
           
        <div id="wrapper">
            <header id="header">
                <div class="container">
                    <a class="logo" href="index.html">
                        <i class="fa fa-graduation-cap"></i>
                        الأكاديمية
                    </a>
                    <button class="btn btn-responsive-nav" data-toggle="collapse" data-target=".nav-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="header-widget">
                        <a class="popup-text custom-btn" href="#login-dialog" data-effect="mfp-move-from-top">
                            <i class="fa fa-user"></i>
                            <span> تسجيل دخول</span>
                        </a>
                    </div><!--End header-social-->
                </div><!--End container-->
                <div class="navbar-collapse nav-main-collapse collapse">
                    <div class="container-fluid">
                        <nav class="nav-main">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html">الرئيسية</a></li>
                                <li class="submenu">
                                    <a class="disable">
                                        الدورات
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu-cat">
                                        <li class="sub"><a href="only-catogry.html">برمجة</a></li>
                                        <li class="sub"><a href="only-catogry.html">لغات</a></li>
                                        <li class="sub"><a href="only-catogry.html">فن وتصميم</a></li>
                                        <li class="sub"><a href="only-catogry.html">محاسبة</a></li>
                                        <li class="sub"><a href="only-catogry.html">صحة</a></li>
                                        <li class="sub"><a href="only-catogry.html">إعلام</a></li>
                                    </ul>
                                </li>
                                <li><a href="lecturers.html">المحاضرين</a></li>
                                <li><a href="blogs.html">المدونة</a></li>
                                <li><a href="about.html">من نحن</a></li>
                                <li><a href="contact.html">إتصل بنا</a></li>
                            </ul>                           
                        </nav>                        
                    </div><!--End Container-->
                </div>
            </header><!--End Header-->
            <div class="main">
                <div class="slider">
                    <div class="container-fluid">
                        <div class="row">
                            <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="caption">
                                            <div class="big-title">
                                                دورة  قواعد البيانات المتقدمة
                                            </div>
                                            <div class="small-title">
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأه
                                            </div>
                                            <div class="link">
                                                <a href="" class="custom-btn">سجل الأن</a>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="item">
                                        <div class="caption">
                                            <div class="big-title">
                                                دورة الذكاء الأصطناعى
                                            </div>
                                            <div class="small-title">
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأه
                                            </div>
                                            <div class="link">
                                                <a href="" class="custom-btn">سجل الأن</a>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="item">
                                        <div class="caption">
                                            <div class="big-title">
                                               دورة نظم المعلومات الموزعة
                                            </div>
                                            <div class="small-title">
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأه
                                            </div>
                                            <div class="link">
                                                <a href="" class="custom-btn">سجل الأن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#home-slider" role="button" data-slide="prev">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                                <a class="right carousel-control" href="#home-slider" role="button" data-slide="next">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                            </div><!--End home-Slider-->
                        </div><!--End Row-->
                    </div><!--End Container-->
                </div><!--End Slider-->
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
                <div class="clearfix"></div>
                <div class="top-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="newsletter-info">
                                    <div class="icon">
                                        <i class="fa fa-envelope-open-o"></i>
                                    </div>
                                    <div class="details">النشرة الأخبارية من الأكاديمية
                                        <span>  إشترك معنا فى النشرة الأخبارية ليصلك كل ماهو جديد</span>
                                    </div>
                                </div>
                            </div><!--End Col-sm-6-->
                            <div class="col-sm-5">
                                <div class="newsletter-form">
                                    <form>
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="البريد الألكترونى">
                                            <button class="custom-btn">
                                                <i class="fa fa-envelope"></i>
                                                إشترك
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div><!--End Col-sm-6-->
                        </div><!--End Row-->
                    </div><!--End Container-->
                </div><!--End Topfooter-->
                <footer class="footer footer-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="widget">
                                    <div class="widget-content">
                                        <a class="logo" href="index.html">
                                            <i class="fa fa-graduation-cap"></i>
                                            الأكاديمية
                                        </a>
                                        <p>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأه
                                        </p>
                                    </div><!--End Widget-content-->
                                </div><!--End Widget-->
                            </div><!--End Col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="widget">
                                    <div class="widget-title">
                                        لينكات سريعة
                                    </div><!--End Widget-title-->
                                    <div class="widget-content">
                                        <ul class="quick-link">
                                            <li><a href="">الرئيسية</a></li>
                                            <li><a href="">من نحن</a></li>
                                            <li><a href="">تواصل معنا</a></li>
                                            <li><a href="">الدورات</a></li>
                                            <li><a href="">المحاضرين</a> </li>
                                            <li><a href="">المدونة</a></li>
                                        </ul>
                                    </div><!--End Widget-content-->
                                </div><!--End Widget-->
                            </div><!--End Col-md-4-->
                            <div class="col-md-4 col-sm-6">
                                <div class="widget">
                                    <div class="widget-title">
                                       أخر التغريدات
                                    </div><!--End Widget-title-->
                                    <div class="widget-content">
                                        <div class="tweet-con">
                                            <div class="tweet-details">
                                                <i class="fa fa-twitter"></i>
                                              هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ
                                                <span>
                                                    @heshamgamal89
                                                </span>
                                            </div>
                                            <div class="tweet-time">
                                            منذ 9 ساعات
                                            </div>
                                        </div>
                                    </div><!--End Widget-content-->
                                </div><!--End Widget-->
                            </div><!--End Col-md-4-->
                        </div><!-- End Row -->
                    </div><!-- End Container -->
                </footer><!-- End Footer -->
                <!-- Start Copy right
                ======================= -->
                <div class="copy-right">
                    جميع الحقوق محفوظة الأكاديمية © 2017
                </div><!-- End Copyright-->
            </div><!--End Main-->  
        </div><!--End Weapper-->
       
          <!-- JS Base And Vendor 
        ===================================-->
        <script src="vendor/jquery/jquery.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="vendor/modernizr/modernizr.js"></script>
        <script src="vendor/magnific-popup/js/magnific-popup.js"></script>  
        <script src="vendor/count-to/jquery.countTo.js"></script>
        <script src="vendor/mixitup/jquery.mixitup.js"></script>
        
        <!-- Site JS
        ====================================-->
        <script src="js/main.js"></script>
        
    </body>
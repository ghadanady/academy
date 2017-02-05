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

        {{ Html::style('assets/vendor/bootstrap/css/bootstrap-ar.css') }}
        {{ Html::style('assets/vendor/font-awesome/css/font-awesome.min.css') }}
        {{ Html::style('assets/vendor/owl.carousel/owl.carousel.css') }}
        {{ Html::style('assets/vendor/owl.carousel/owl.theme.css') }}
        {{ Html::style('assets/vendor/magnific-popup/css/magnific-popup.css') }}
        {{ Html::style('assets/vendor/magnific-popup/css/custom.css') }}


        <!-- Site Css
        ====================================-->

         {{ Html::style('assets/css/style.css') }}
        
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

            <!-- header section -->
            @include('site.layouts.partials.header')
            <div class="main">
            
            <!-- content section -->
            @yield('content')
            <!-- footer section -->
            @include('site.layouts.partials.footer')

            </div><!--End Main-->  
        </div><!--End Weapper-->
       
          <!-- JS Base And Vendor 
        ===================================-->

        {{ Html::script('assets/vendor/jquery/jquery.js') }}
        {{ Html::script('assets/vendor/bootstrap/js/bootstrap.min.js') }}
        {{ Html::script('assets/vendor/owl.carousel/owl.carousel.min.js') }}
        {{ Html::script('assets/vendor/modernizr/modernizr.js') }}
        {{ Html::script('assets/vendor/magnific-popup/js/magnific-popup.js') }}
        {{ Html::script('assets/vendor/count-to/jquery.countTo.js') }}
        {{ Html::script('assets/vendor/mixitup/jquery.mixitup.js') }}

        
        <!-- Site JS
        ====================================-->

        {{ Html::script('assets/js/main.js') }}
        
    </body>
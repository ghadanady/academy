  <header id="header">
                <div class="container">
                    <a class="logo" href="{{url('/')}}">
                        <i class="fa fa-graduation-cap"></i>
                        الأكاديمية
                    </a>
                    <button class="btn btn-responsive-nav" data-toggle="collapse" data-target=".nav-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
@if(!Auth::guard('members')->check())
                    <div class="header-widget">
                        <a class="popup-text custom-btn" href="#login-dialog" data-effect="mfp-move-from-top">
                            <i class="fa fa-user"></i>
                            <span> تسجيل دخول</span>
                        </a>
                    </div><!--End header-social-->
@else

<div class="header-widget">
    <a class="custom-btn" href="{{route('site.auth.logout')}}" >
        <i class="fa fa-user"></i>
        <span> تسجيل خروج </span>
    </a>
</div>

@endif

                </div><!--End container-->
                <div class="navbar-collapse nav-main-collapse collapse">
                    <div class="container-fluid">
                        <nav class="nav-main">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{url('/')}}">الرئيسية</a></li>
                                <li class="submenu">
                                    <a class="disable">
                                        الدورات
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    @if(count($categories)>0)
                                    <ul class="sub-menu-cat">
                                        @foreach($categories as $c)
                                        <li class="sub"><a href="{{$c->getUrl() }}">{{$c->name}}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                <li><a href="{{url('instructor')}}">المحاضرين</a></li>
                                <li><a href="{{url('article')}}">المدونة</a></li>
                                <li><a href="{{url('/about')}}">من نحن</a></li>
                                <li><a href="{{url('/contact')}}">إتصل بنا</a></li>
                            </ul>                           
                        </nav>                        
                    </div><!--End Container-->
                </div>
            </header><!--End Header-->
            
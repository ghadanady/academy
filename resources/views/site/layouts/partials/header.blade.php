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
                                    @if(count($categories)>0)
                                    <ul class="sub-menu-cat">
                                        @foreach($categories as $c)
                                        <li class="sub"><a href="{{$c->getUrl() }}">{{$c->name}}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                <li><a href="{{route('site.instructor.index')}}">المحاضرين</a></li>
                                <li><a href="blogs.html">المدونة</a></li>
                                <li><a href="about.html">من نحن</a></li>
                                <li><a href="contact.html">إتصل بنا</a></li>
                            </ul>                           
                        </nav>                        
                    </div><!--End Container-->
                </div>
            </header><!--End Header-->
            
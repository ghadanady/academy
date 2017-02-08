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
                                    <form action="{{ route('site.contact.subscribe') }}"  method="POST">
                                    {!! csrf_field() !!}
                                        <div class="form-group">
                                            <input class="form-control" 
                                            name="email"
                                            type="email" placeholder="البريد الألكترونى">
                                            <button type="button"  class="contact custom-btn">
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
                                        <a class="logo" href="{{ $settings->getLogo() }}">
                                            <i class="fa fa-graduation-cap"></i>
                                           {{ $settings->site_name }}
                                        </a>
                                        <p>
                                           {{ $settings->meta_description }}
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
                                            <li><a href="{{url('/')}}">الرئيسية</a></li>
                                            <li><a href="{{url('/about')}}">من نحن</a></li>
                                            <li><a href="{{url('/contact')}}">تواصل معنا</a></li>
                                            
                                            <li><a href="{{url('instructor')}}">المحاضرين</a> </li>
                                            <li><a href="{{url('article')}}">المدونة</a></li>
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
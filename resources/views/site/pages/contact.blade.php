@extends('site.layouts.base.master')

@section('title')
اتصل بنا 
@endsection
@section('content')
<section class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>اتصل بنا  </h2>
            </div><!--End col-md-6-->
            <div class="col-md-6">
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}">الرئيسية</a></li>  
                   
                    <li class="active">اتصل بنا </li>
                </ul>
            </div><!--End col-md-6-->
        </div><!--End Row-->
    </div><!--End container-->
</section>


                  <div class="page-content">
                    <section class="section-setting">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="contact-info">
                                        <div class="contact-item">
                                            <div class="contact-icon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="contact-detail">
                                                <h3>رقم الهاتف : </h3>
                                                <p>
                                                   {{ $settings->site_phone1 }}
                                                </p>
                                            </div><!--End contact-detail-->
                                        </div><!--End contact-item-->
                                        <div class="contact-item active">
                                            <div class="contact-icon">
                                                <i class="fa fa-mobile fa-lg"></i>
                                            </div>
                                            <div class="contact-detail">
                                                <h3>رقم الموبيل</h3>
                                                <p>
                                                 {{ $settings->site_phone2 }}
                                                </p>
                                            </div><!--End contact-detail-->
                                        </div><!--End contact-item-->
                                        <div class="contact-item">
                                            <div class="contact-icon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="contact-detail">
                                                <h3>العنوان</h3>
                                                <p>
                                                   {{ $settings->site_address }}
                                                </p>
                                            </div><!--End contact-detail-->
                                        </div><!--End contact-item-->
                                        <div class="contact-item active">
                                            <div class="contact-icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="contact-detail">
                                                <h3>البريد الألكترونى</h3>
                                                <p>
                                                    {{ $settings->site_email }}
                                                </p>
                                            </div><!--End contact-detail-->
                                        </div><!--End contact-item-->
                                    </div><!--End contact-info-->
                                
                                </div><!--End col-md-4-->
                                <div class="col-md-8 forms" >
                                   
                                     <form  class="contact-form" action="{{ route('site.contact.send') }}" data-notification="fancy" onsubmit="return false" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text"
                                                    name="fullname" 
                                                     class="form-control" placeholder="الأسم">
                                                </div><!--End form-group-->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" 
                                                    name="email" 
                                                    class="form-control" placeholder="البريد الالكترونى">
                                                </div><!--End form-group-->
                                            </div><!--End col-md-6-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text"
                                                    name="phone" 
                                                     class="form-control" placeholder="رقم التليفون">
                                                </div><!--End form-group-->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="subject" class="form-control" placeholder="عنوان الرسالة">
                                                </div><!--End form-group-->
                                            </div><!--End col-md-6-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea
                                                    name="message"
                                                     class="form-control" placeholder="اكتب الرسالة"></textarea>
                                                </div><!--End form-group-->
                                            </div><!--End col-md-6-->
                                        </div><!--End row-->
                                         {!! csrf_field() !!}
                                        <button type="submit" 
                                        type="submit" data-loading="انتظر..." class="sub-b contact contact-btn"
                                        >
                                            ارسل الرسالة
                                        </button>
                                    </form>
                                </div><!--End col-md-8-->
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13742.584709302486!2d31.018553676645308!3d30.559299184537192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7d68d460edbf9%3A0x971fc377ba731aa4!2z2YXZitiv2KfZhiDYtNix2YHYjCDZgtiz2YUg2LTYqNmK2YYg2KfZhNmD2YjZhdiMINi02KjZitmGINin2YTZg9mI2YXYjCDYp9mE2YXZhtmI2YHZitip!5e0!3m2!1sar!2seg!4v1453805094132" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen>
                                    </iframe>
                            </div>
                        </div>
                    </section>
                </div><!--End Page-Content-->
@endsection

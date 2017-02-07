<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="section-title">
                <div class="heading">الأخبار</div>
            </div>
        </div>
        <div class="spacer-10"></div>
   
        <div id="blogs" class="owl-carousel owl-theme">
        @foreach($all_news as $a)
            <div class="carousel-item">
                <div class="blog-item">
                    <div class="blog-img">
                        <img 
                            src="{{ url('storage/uploads/images/new') }}/{{ $a->image ? $a->image->name : 'p_default.png' }}"/>
                        <div class="blog-date">
                            <span>{{ $a->created_at->format('M-d') }}</span>
                            <span>{{ $a->created_at->format('Y') }}</span>
                        </div><!--End Blog-date-->
                    </div><!--End Blog-img-->
                    <div class="blog-content">
                        <a href="only-blog.html">{{$a->name}}</a>
                        <ul class="info">
                            <li>
                                <i class="fa fa-edit"></i>
                                {{$a->instarctor->name}}
                            </li>
                            <li>
                                <i class="fa fa-tag"></i>
                                {{$a->Category->name}}
                            </li>
                        </ul><!--End Info-->
                       {!! $a->body!!}
                    </div><!--End Blog-content-->
                </div><!--End Blog-item-->
            </div>
            @endforeach
        

        </div>
    </div><!-- End Row-->
</div><!-- End container-->
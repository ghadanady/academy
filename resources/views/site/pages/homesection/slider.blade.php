<div class="slider">
    <div class="container-fluid">
        <div class="row">
            <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                @foreach($slider as $key=>$s)
                @if($key==0)
                    <div class="item active">
                @else
                <div class="item ">
                @endif
                        <div class="caption">
                            <div class="big-title">
                               {{$s->title}}
                            </div>
                            <div class="small-title">
                               {{$s->sub_title}}
                            </div>
                            <div class="link">
                                <a href=" {{$s->sub_link}" class="custom-btn">سجل الأن</a>
                            </div>
                        </div>
                    </div>
                 @endforeach

          
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
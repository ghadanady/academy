@if(count($all_instructor)>0)
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="section-title">
                <div class="heading">المحاضرين</div>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div id="lecturers" class="owl-carousel owl-theme">
        @foreach($all_instructor as $s)
            <div class="carousel-item">
                <div class="team-block">
                    <div class="team-block-links">
                        <a href="{{$s->facebook}}" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></a>
                        <a href="{{$s->twitter}}" data-toggle="tooltip" data-placement="top" title="Twitter"  class="fa fa-twitter"></a>
                        <a href="{{$s->google}}" data-toggle="tooltip" data-placement="top" title="Google Plus"  class="fa fa-google-plus"></a>
                        <a href="{{$s->instagram}}" data-toggle="tooltip" data-placement="top" title="instagram"  class="fa fa-instagram"></a>
                    </div>
                    <div class="team-block-img">
                       <img  src="{{ url('storage/uploads/images/instructor') }}/{{ $s->image ? 
                       $s->image->name : 'p_default.png' }}"/>
                    </div>
                    <div class="team-block-details">
                        <a href="{{url('instructor')}}/{{$s->slug}}">{{$s->name}}</a>
                        <p>{{$s->job}}</p>
                    </div>
                </div><!-- End team block -->
            </div>
        @endforeach
           

        </div>
    </div>
</div>
@endif
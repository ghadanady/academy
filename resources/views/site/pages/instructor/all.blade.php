@extends('site.layouts.base.master')

@section('title')
المحاضرين
@endsection
@section('content')

   <section class="page-heading">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <h2>المحاضرين</h2>
               </div><!--End col-md-6-->
               <div class="col-md-6">
                   <ul class="breadcrumb">
                       <li><a href="{{url('/')}}">المحاضرين</a></li>  
                      
                       <li class="active">المحاضرين</li>
                   </ul>
               </div><!--End col-md-6-->
           </div><!--End Row-->
       </div><!--End container-->
   </section>
    

    <div class="page-content">
     <section class="section-setting lecturer-wrap">
         <div class="container">
             <div class="row">
                 <div class="lecturers-fliter">
                   @if(count($categories)>0)
                     <ul class="nav">
                     <li class="filter"  data-filter="all">all</li>
                     @foreach($categories as $c)
                         <li class="filter" data-id="{{$c->id}}" data-filter=".x{{$c->id}}">{{$c->name}}</li>
                      @endforeach
                     </ul>
                     @endif 
                     <div class="lecturers-fliter-items">
 
 @php
 //var_dump($instructores[1]);die();
 @endphp
@if(count($x)>0)
@foreach($x as $i)

                                       <div class="col-md-3 col-sm-4">
                                            <div class="mix x{{$i->Category->id}}">
                                                <div class="team-block">
                                                <div class="team-block-links">
                                                    <a href="{{$i->facebook}}" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></a>
                                                    <a href="{{$i->twitter}}" data-toggle="tooltip" data-placement="top" title="Twitter"  class="fa fa-twitter"></a>
                                                    <a href="{{$i->google}}" data-toggle="tooltip" data-placement="top" title="Google Plus"  class="fa fa-google-plus"></a>
                                                    <a href="{{$i->instagram}}" data-toggle="tooltip" data-placement="top" title="instagram"  class="fa fa-instagram"></a>
                                                </div>
                                                <div class="team-block-img">
                                                    <img  src="{{ url('storage/uploads/images/instructor') }}/{{ $i->image ? 
                                                    $i->image->name : 'p_default.png' }}"/>
                                                </div>
                                                <div class="team-block-details">
                                              <a href="{{url('instructor')}}/{{$i->slug}}">
                                                    
                                                    {{$i->name}}</a>
                                                    <p>{{$i->job}}</p>
                                                </div>
                                            </div><!-- End team block -->
                                            </div>
                                        </div>



@endforeach
                   </div>
            </div>  
        </div> 
      </div>
      </section>    
@else
<div class="alert alert-info"> لا يوجد دورات بهذا القسم حاليا</div>
@endif
                 </div><!--End Row-->
            </div><!--End Container-->
        </section><!--End Section-->
        
    </div><!--End Page-Content-->
    
@endsection

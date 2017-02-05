@extends('site.layouts.base.master')

@section('title')
الاكاديميه 
@endsection
@section('content')

   <section class="page-heading">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <h2>قسم {{$category->name}}</h2>
               </div><!--End col-md-6-->
               <div class="col-md-6">
                   <ul class="breadcrumb">
                       <li><a href="{{url('/')}}">الرئيسية</a></li>  
                      
                       <li class="active">قسم {{$category->name}}</li>
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
                     <ul class="nav">
                         <li class="filter active" data-filter="all">الكل</li>
                         <li class="filter" data-filter=".design">تصميم</li>
                         <li class="filter" data-filter=".program">برمجة</li>
                         <li class="filter" data-filter=".management">إدارة</li>
                         <li class="filter" data-filter=".account">محاسبة</li>
                     </ul> 
                     <div class="lecturers-fliter-items">
@if(count($instructors)>0)
@foreach($instructors as $c)

sss


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

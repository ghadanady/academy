
@extends('admin.master')

@section('title')
    طلبات الدورات 
@endsection

@section('content')


    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"> طلبات الدورات </h3>
                <div class="box-tools pull-left">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                        </div>

                        <div class="box-body">
                            <div class="row" style="margin-bottom: 20px;">
                              

                            </div>
@if(count($courses)>0)
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th>اسم الدورة </th>
                                            <th>اسم الطالب </th>
                                            <th>تاريخ التسجسل </th>
                                            <th class="text-center">العمليات </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($courses as $u)
                                            <tr>
                                                <td>{{$u->course['name']}}</td>
                                                <td>{{$u->member['f_name']}}</td>
                                                <td>{{$u->created_at}}</td>
                                                <td class="text-center">
                                                @if($u->agree==1)
                                                    <a
                                                    href="{{url('admin/cources/addOrder/'.$u->id.'/'.$u->agree)}}" class=" btn btn-primary"
                                                    >
                                                        <li class="fa fa-pencil"> قبول </li>
                                                    </a >
                                                    @else

                                                    <a
                                                    href="{{url('admin/cources/addOrder/'.$u->id.'/'.$u->agree)}}" class=" btn btn-warning"
                                                    >
                                                        <li class="fa fa-pencil"> رفض </li>
                                                    </a >
                                                    @endif

                                                  

                                                  


                                                    <a data-url="{{url('admin/cources/deleteOrder/'.$u->id)}}" class="btn btn-danger modal-delete-btn"  >
                                                        <li class="fa fa-trash"> 
                                                        {{ trans('admin_global.btn_delete') }}</li>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $courses->links() }}
@else
<div class="alert alert-info"> لم يتم اضافه دورات بعد </div>
@endif
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </section>



        @endsection


@extends('admin.master')

@section('title')
    الدورات 
@endsection

@section('content')


    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">عرض الدورات </h3>
                <div class="box-tools pull-left">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                        </div>

                        <div class="box-body">
                            <div class="row" style="margin-bottom: 20px;">
                                <a href="{{ route('admin.courses.add') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i>اضافة دورة جديديه 
                                </a>
                            </div>
@if(count($courses)>0)
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th>لاسم </th>
                                            <th>القسم </th>
                                            <th>تاريخ التسجسل </th>
                                            <th class="text-center">العمليات </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($courses as $u)
                                            <tr>
                                                <td>{{$u->name}}</td>
                                                <td>{{$u->Category->name}}</td>
                                                <td>{{$u->created_at}}</td>
                                                <td class="text-center">
                                                    <button data-url="{{url('admin/courses/info/'.$u->id)}}" class="users-edit-modal-btn btn btn-primary" data-original="">
                                                        <li class="fa fa-pencil"> {{ trans('admin_global.btn_edit') }}</li>
                                                    </button >
                                                    <button data-url="{{url('admin/courses/add/'.$u->id)}}" class="users-edit-modal-btn btn btn-primary" data-original="">
                                                        <li class="fa fa-pencil">اضافة الدروس</li>
                                                    </button >
                                                    <a data-url="{{url('admin/courses/delete/'.$u->id)}}" class="btn btn-danger modal-delete-btn"  >
                                                        <li class="fa fa-trash"> {{ trans('admin_global.btn_delete') }}</li>
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

            @section('modals')
                @include('admin.pages.users.modals.add-user')
                @include('admin.pages.users.modals.edit-user')
            @endsection

            @section('templates')
                <script id="users-edit-modal-template" type="text/html">
                    @include('admin.pages.users.templates.edit-user')
                </script>
            @endsection

        @endsection

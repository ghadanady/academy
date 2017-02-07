
@extends('admin.master')

@section('title')
  عرض المقالات
@endsection

@section('content')


    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                
                

                        <div class="box-body">
                            <div class="row" 
                            style="margin: 0px 0px 20px 0px;">
                                <a href="#addarticle" class="btn btn-primary" data-toggle="modal" >
                                    <i class="fa fa-plus"></i>
                                    اضافة  مقال 
                                </a>
                            </div>
@if(count($articles)>0)
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th>العنوان </th>
                                            <th>تاريخ الاضافة</th>
                                           
                                            <th class="text-center">العمليات </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($articles as $a)
                                            <tr>
                                            
                                                <td>{{$a->name}}</td>
                                                <td>{{$a->created_at->diffForHumans()}}
                                                </td>
                                                <td class="text-center">
                                                    <button 
                                                    data-url="{{url('admin/article/info/'.$a->id)}}" 
                                                    class="users-edit-modal-btn btn btn-primary" data-original="">
                                                        <li class="fa fa-pencil"> تعديل </li>
                                                    </button >
                                                    <a data-url="{{url('admin/article/delete/'.$a->id)}}" class="btn btn-danger modal-delete-btn"  >
                                                        <li class="fa fa-trash"> حذف</li>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $articles->links() }}
@else
<div class="alert alert-info"> لم يتم اضافه اعلانات حتى الان</div>
@endif
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </section>

            @section('modals')
                @include('admin.pages.article.modals.add')
                @include('admin.pages.article.modals.edit')
            @endsection

            @section('templates')
                <script id="users-edit-modal-template" type="text/html">
                    @include('admin.pages.article.templates.edit')
                </script>
            @endsection

        @endsection

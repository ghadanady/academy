

@extends('admin.master')



@section('title')

  عرض اختبار 
@endsection



@section('content')

    <section class="content">

        <!-- Default box -->

        <div class="box">

            <div class="box-header with-border">

                <h3 class="box-title">الاختبارات </h3>

                <div class="box-tools pull-left">

                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">

                        <i class="fa fa-minus"></i>

                    </button>

                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">

                        <i class="fa fa-times"></i>

                    </button>

                </div>

                <a style="margin-bottom: 10px" 
                href='{{route("admin.test.add")}}/{{$id}}' 

                  class="btn btn-primary" >
                    <i class="fa fa-plus"></i>
                اضافه اختبار 
                </a>

@if(count($tests)>0)
                <form action="{{ url('admin/test/') }}" onsubmit="return false;">

                    <div class="box-body" >

                      


                        <div class="row" id="ajax-table">

                            <div class="table-responsive">

                                <table id="example" class="table table-bordered table-striped table-responsive text-center">

                                    <thead>

                                        <tr>

                                            <th id="ID">

                                                <input id="chk-all" type="checkbox">

                                            </th>

                                            <th>العنوان </th>

                                          



                                            <th>تاريخ النشر</th>

                                            <th>اخر تعديل</th>

                                            <th class="text-center">العمليات</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        @foreach($tests as $article)

                                            <tr class="{{ $article->active ? 'success' : 'warning' }}">

                                                <td class="ID">

                                                    <input name="ids[]" class="chk-box" value="{{ $article->id}}" type="checkbox">

                                                </td>

                                                <td>{{ $article->name }}</td>

                                                


                                                <td>{{ $article->created_at->toCookieString() }}</td>

                                                <td>{{ $article->updated_at->diffForHumans() }}</td>

                                                <td class="text-center">

                                                   
                                                   
                                                        <a
                                                    href="{{url('admin/test/info/'.$article->id)}}" class=" btn btn-primary"
                                                    >
                                                        <li class="fa fa-pencil"> {{ trans('admin_global.btn_edit') }}</li>
                                                    </a >


                                                    <a data-url="{{ route('admin.test.delete' , ['id' => $article->id ]) }}" class="btn btn-danger modal-delete-btn"  >

                                                        <li class="fa fa-trash"> حذف</li>

                                                    </a>

                                                </td>

                                            </tr>

                                        @endforeach

                                    </tbody>

                                </table>

                            </div>

                            {{ $tests->links() }}

                        </div>

                    </div>

                    {{ csrf_field() }}

                </form>
@else
<div class="alert alert-info"> لا يوجد دروس لهذه الدورة</div>
@endif
            </div>

        </div>

        <!-- /.box-body -->

    </section>



@endsection

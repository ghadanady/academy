<div class="table-responsive">
    <table id="example" class="table table-bordered table-striped table-responsive text-center">
        <thead>
            <tr>
                <th id="ID">
                    <input id="chk-all" type="checkbox">
                </th>
                <th>عنوان المقال</th>
                <th>حاله المقال</th>
                <th>القسم</th>
                <th>تاريخ النشر</th>
                <th>اخر تعديل</th>
                <th class="text-center">العمليات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr class="{{ $article->active ? 'success' : 'warning' }}">
                    <td class="ID">
                        <input name="ids[]" class="chk-box" value="{{ $article->id}}" type="checkbox">
                    </td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->active ? 'فعال' : 'غير فعال' }}</td>
                    <td>{{ $article->category->name }}</td>
                    <td>{{ $article->created_at->toCookieString() }}</td>
                    <td>{{ $article->updated_at->diffForHumans() }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.articles.edit' , ['id' => $article->id ]) }}" class="btn btn-success "  >
                            <li class="fa fa-pencil"> عرض/تعديل</li>
                        </a>
                        <a data-url="{{ route('admin.articles.delete' , ['id' => $article->id ]) }}" class="btn btn-danger modal-delete-btn"  >
                            <li class="fa fa-trash"> حذف</li>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $articles->links() }}

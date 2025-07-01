@extends('admin.include.container')
@push('title')
    <title>Article </title>
@endpush
@section('section')
<h2>Article </h2>
<a href="{{ route('admin.articlecreate') }}" class="btn btn-primary"><button>Add New</button></a>
<form action="{{ route('admin.article_list') }}" method="GET">
    <div class="row mb-3">
        <div class="col-md-4">
            <input type="text" name="ar_name" class="form-control" placeholder="Search by title" value="{{ request('ar_name') }}">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="{{ route('admin.article_list') }}" class="btn btn-secondary">Reset</a>
        </div>
    </div>
</form>

<table class="table">
    <thead>
        <tr>
            <th>
                <a style="color:#fff;" href="{{ route('admin.article_list', ['sort' => 'a_id', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">
                    ID
                    @if (request('sort') == 'a_id')
                        @if (request('direction') == 'asc')
                            ↑
                        @else
                            ↓
                        @endif
                    @endif
                </a>
            </th>
            <th> Title
                {{-- <a style="color:#fff;" href="{{ route('admin.article_list', ['sort' => 'ar_name', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">
                    Title
                    @if (request('sort') == 'ar_name')
                        @if (request('direction') == 'asc')
                            ↑
                        @else
                            ↓
                        @endif
                    @endif
                </a> --}}
            </th>
            <th>
                <a style="color:#fff;" href="{{ route('admin.article_list', ['sort' => 'ac_id', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">
                    Category
                    @if (request('sort') == 'ac_id')
                        @if (request('direction') == 'asc')
                            ↑
                        @else
                            ↓
                        @endif
                    @endif
                </a>
            </th>
            <th>Date
                {{-- <a style="color:#fff;" href="{{ route('admin.article_list', ['sort' => 'created_at', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">
                Date
                @if (request('sort') == 'created_at')
                    @if (request('direction') == 'asc')
                        ↑
                    @else
                        ↓
                    @endif
                @endif
            </a> --}}
        </th>
            <th>
                <a style="color:#fff;" href="{{ route('admin.article_list', ['sort' => 'status', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">
                    Status
                    @if (request('sort') == 'status')
                        @if (request('direction') == 'asc')
                            ↑
                        @else
                            ↓
                        @endif
                    @endif
                </a>
            </th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($articlelist as $articlelists)
        <tr>
            <td>{{$articlelists->a_id}}</td>
            <td>{{$articlelists->ar_name}}</td>
            <td>{{ $articlelists->category->ac_name }}</td>
            <td>{{$articlelists->created_at}}</td>
            <td>
                @if ($articlelists->status == 1)
                    Active
                @elseif ($articlelists->status == 0)
                    Suspend
                @endif
            </td>
            {{-- <td><button>Add</button><button>Edit</button> <button onclick="return confirm('Are you sure you want to delete this article?')"><a href="{{url('/admin/article/del')}}/{{$articlelists->a_id}}">Delete</a></button></td> --}}
            <td><button><a href="{{route('admin.articleedit',$articlelists->a_id)}}">Edit</a></button> <button onclick="return confirm('Are you sure you want to delete this article?')"><a href="{{ route('admin.articledel', $articlelists->a_id) }}">Delete</a></button></td>
        </tr>
    @endforeach
    </tbody>
</table>
{{-- {{ $articlelist->appends(request()->query())->links() }} --}}
<div class="pagination">
    {{ $articlelist->links('pagination::bootstrap-4') }} <!-- This only works on paginated data -->
</div>
@endsection
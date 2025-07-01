@extends('admin.include.container')
@push('title')
    <title>Article Category</title>
@endpush
@section('section')
<h2>Article Category</h2>
<a href="{{ route('admin.articlecatcreate') }}" class="btn btn-primary"><button>Add New</button></a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Parent Category</th>
            {{-- <th>Date</th> --}}
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($articlecat as $articlecatlist)
        <tr>
            <td>{{$articlecatlist->ac_id}}</td>
            <td>{{$articlecatlist->ac_name}}</td>
            <td>{{$articlecatlist->parentCategory->ac_name ?? ''}}</td>
            {{-- <td>{{$articlecatlist->created_at}}</td> --}}
            <td>
                @if ($articlecatlist->status == 1)
                    Active
                @elseif ($articlecatlist->status == 0)
                    Suspend
                @endif
            </td>
            {{-- <td><button>Add</button><button>Edit</button> <button><a href="{{url('/admin/articlecatdel')}}/{{$articlecatlist->ac_id}}">Delete</a></button></td> --}}
            <td><button>Edit</button> <button><a href="{{ route('admin.articlecatdel', $articlecatlist->ac_id) }}">Delete</a></button></td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
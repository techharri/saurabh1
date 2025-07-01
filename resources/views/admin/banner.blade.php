@extends('admin.include.container')
@push('title')
    <title>Student</title>
@endpush
@section('section')
<h2>Students</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Banner</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($banners as $banner)
        <tr>
            <td>{{$banner->b_id}}</td>
            <td><img src="{{$banner->banner}}" alt="" width="300px"></td>
            <td>{{$banner->created_at}}</td>
            <td><button>Add</button><button>Edit</button> <button>Delete</button></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
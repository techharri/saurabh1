@extends('admin.include.container')
@push('title')
    <title>Article </title>
@endpush
@section('section')
<h2>Article </h2>
<form action="" method="post" enctype="multipart/form-data">
        @csrf
    <div class="section">
    
    <input type="file" name="file" multiple required>
        <button style="padding:0.5em;">submit</button>
    </div>
</form>
<hr style="margin: .8em 0">
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>File</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($createlinks as $createdlink)
        <tr>
         <td>{{$createdlink->link_id}}</td>
         <td><a href="{{ Storage::url('images/' . $createdlink->file) }}" target="_blank">{{$createdlink->file}}</a></td>
         <td><img src="{{ Storage::url('images/' . $createdlink->file) }}" alt="{{ $createdlink->file }}" style="width: 100px; height: auto;"></td>
         <td><button>Delete</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- <div class="pagination">
    {{ $articlelist->links('pagination::bootstrap-4') }} <!-- This only works on paginated data -->
</div> --}}
@endsection
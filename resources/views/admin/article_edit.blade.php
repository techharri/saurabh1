@extends('admin.include.container')
@push('title')
    <title>Article Category</title>
@endpush
@section('section')
<h2>Article Create</h2>
<form action="{{ route('admin.article_update', $article->a_id) }}" method="POST">
    @csrf
    @method('PUT')
<div class="section">
    <div class="minisection">
        <label for="">Category</label>
        <input type="text" name="ac_id" value="{{ $article->ac_id }}">
        {{-- <select name="ac_id" id="ac_id">
            <option value="0">Select Category</option>
            @foreach($articlecat as $articlecats)
                <option value="{{ $articlecats->ac_id }}">{{ $articlecats->ac_name }}</option>
            @endforeach
        </select> --}}
    </div>
    <div class="minisection">
        <label for="">Title</label>
        <input type="text" name="ar_name" value="{{ $article->ar_name }}">
    </div>
</div>
<div class="section">
    <div class="minisection">
        <label for="">URL</label>
        <input type="text" name="ar_url" value="{{ $article->ar_url }}">
    </div>
    <div class="minisection">
        <label for="">Date</label>
        <input type="date" name="created_at" value="{{ $article->created_at->format('Y-m-d') }}">
    </div>
</div>
<div class="sction">
    <label for="">Description</label>
        <textarea name="long_desc" class="ckeditor" id="" cols="30" rows="10">{{ htmlspecialchars_decode($article->long_desc) }}</textarea>
</div>
<div class="section">
    <div class="minisection">
        <label for="">Status</label>
        <input type="text" name="status" value="{{ $article->status }}">
        {{-- <select name="status" id="">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select> --}}
    </div>
    <div class="minisection">
        <label for="">Meta title</label>
        <input type="text" name="meta_title" value="{{ $article->meta_title }}">
    </div>
</div>
<div class="section">
    <div class="minisection">
        <label for="">Meta Keyword</label>
        <textarea name="keyword" id="" cols="30" rows="10">{{ $article->keyword }}</textarea>
    </div>
    <div class="minisection">
        <label for="">Meta Description</label>
        <textarea name="description" id="" cols="30" rows="10">{{ $article->description }}</textarea>
    </div>
</div>
<div class="section">
    <div class="minisection">
        <button type="submit">Submit</button>
    </div>
    <div class="minisection">
        <button><a href="{{ url('/')}}/admin/article">Back</a></button>
    </div>
</div>
</form>
@endsection
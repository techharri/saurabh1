@extends('layout.main')
@push('title')
    <title>Article</title>
@endpush
@section('main-section')
<h1 id="about" style="text-align:center;">Categories</h1>
<ul>
    @foreach ($articlecat as $item)
    <li><a href="{{url('/article')}}/{{$item->ac_url}}">{{$item->ac_name}}</a></li>
    @endforeach
</ul>

@endsection
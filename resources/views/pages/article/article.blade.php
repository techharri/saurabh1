@extends('layout.main')
@push('title')
    <title>About</title>
@endpush
@section('main-section')
<h1 id="about" style="text-align:center;">{{ $ac_id }}article</h1>
<ul>
    <ul>
        @foreach ($articlename as $article)
            <li>{{ $article->ar_name }}</li>
        @endforeach
    </ul>
    {{-- @foreach ($articlename as $article)
    <li>{{ $article->ar_name }}</li>
    @endforeach --}}

</ul>
@endsection
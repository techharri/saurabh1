@extends('layout.main')
@push('title')
    <title>Register</title>
@endpush
@section('main-section')
    <form action="{{url('/')}}/register" method="post">
    @csrf
    {{-- <label for="">Name</label>
    <input type="text" name="name" id="" value="{{old('name')}}">
        @error('name')
            {{$message}}
        @enderror<br>
    <label for="">Email</label>
    <input type="email" name="email" id=""  value="{{old('email')}}">
        @error('email')
            {{$message}}
        @enderror<br>
    <label for="">Password</label>
    <input type="password" name="password" id="">
        @error('password')
            {{$message}}
        @enderror<br> --}}


        <x-input type="text" name="name" label="Name"/>
        <x-input type="email" name="email" label="Email"/>
        <x-input type="password" name="password" label="Password"/>
       
    <button>Submit</button>
    </form>
@endsection
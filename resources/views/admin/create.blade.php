@extends('layout')
<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
@section('name')
<h1>Create Post</h1>
 
@if ($errors->any())
    <div class="alert alert-danger">
       <h6> kiritgan malumotlaringizda xatolik bor </h6>
    </div>
@endif

@if (\Session::has('success'))
<div class="alert alert-success">
    <h6>{!! \Session::get('success') !!}</h6>
</div>
@endif
<form action="{{ route('add1.store')}}" method="POST" enctype="multipart/form-data" >
  @csrf
  <input type="file" name="src" class="form-control @error('src') is-invalid @enderror"  >
  <br>
  <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="title" value="{{old('title')}}">
  <br>
  <textarea name="content" cols="30" rows="2" class="form-control @error('content') is-invalid @enderror" placeholder="content">{{old('content') }}</textarea>
 
  <br>
  <br>
  <input type="submit" class="btn btn-info" value="Send">
  <a href="{{route('add1.index')}}" class="btn btn-dark">back</a>

</form>
@endsection 
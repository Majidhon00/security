@extends('layout')
@section('name')

<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

@section('name')
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
<form action="{{ route('add1en.update',['add1en'=>$baza->id])}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <input type="file" name="src" class="form-control @error('src') is-invalid @enderror">

  <input type="hidden" name="dbsrc" class="form-control" value="{{$baza->src}}" >
  <br>
  <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror"  placeholder="title" value="{{$baza->title}}">
  <br>
  <textarea name="content" cols="30" rows="2" class="form-control  @error('content') is-invalid @enderror" placeholder="content">{{$baza->content}}</textarea>
 
  <br>
  <br>
  <input type="submit" class="btn btn-info" value="Send">
  <a href="{{route('add1en.index')}}" class="btn btn-dark">back</a>
</form>

@endsection
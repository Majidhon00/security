@extends('layout')

<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
<style>
  .active4{
      background: #081D45;
  }
</style>
@section('name')
@if (\Session::has('success'))
<br><div class="alert alert-success">
    <ul>
        <li>{!! \Session::get('success') !!}</li>
    </ul>
</div>
@endif
<form action="{{ route('upd4.update',['upd4'=>$baza->id])}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <label for="img">Image</label>  

  <input type="hidden"  name="dbsrc" value="{{$baza->src}}" >

  <input type="file" id="img" name="src" class="form-control" value="{{$baza->src}}" >
  <br>
  <label for="tit">Title</label>
  <input type="text" id="tit" name="title" class="form-control" placeholder="title" value="{{$baza->title}}">
  <br>
  <label for="con">Content</label>
  <textarea name="content" id="con" cols="30" rows="2" class="form-control" placeholder="content">{{$baza->content}}</textarea>
 
  <br>
  <br>
  <a href="{{route('add5.index')}}" class="btn btn-success">create news >>></a>
  <input type="submit" class="btn btn-info" value="Send">

 
</form>
@endsection
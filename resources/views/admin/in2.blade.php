@extends('layout')
<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
<style>
  .active2{
      background: #081D45;
  }
</style>
@section('name')
<div class="title">hello world</div>
@if (\Session::has('success'))
<br><div class="alert alert-success">
    <ul>
        <li>{!! \Session::get('success') !!}</li>
    </ul>
</div>
@endif

    <form action="{{ route('admin2.update',['admin2'=>$baza->id])}}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <br>
      <input type="file" name="src" class="form-control" value="{{$baza->src}}"><br>

      <input type="text" name="title" class="form-control" value="{{$baza->title}}">

      <input type="hidden" name="dbsrc" value="{{$baza->src}}">
      <br>
      <textarea name="content" cols="30" rows="2" class="form-control">{{$baza->content}}</textarea>
      <br>
      <div class="row">

        <div class="col-md-6">

        <input type="text" name="k_title" class="form-control" value="{{$baza->k_title}}" width="300px">
        <br>
        <textarea name="k_content" cols="15" rows="2" class="form-control">{{$baza->k_content}}</textarea>
        <br>
      </div>
      <div class="col-md-6">

        <input type="text" name="k2_title" class="form-control" value="{{$baza->k2_title}}" width="300px">
        <br>
        <textarea name="k2_content" cols="15" rows="2" class="form-control">{{$baza->k2_content}}</textarea>
        <br>
      </div>
    </div>
      <input type="submit" class="btn btn-info" value="send">
      <a href="{{route('admin2.index')}}" class="btn btn-dark"><<-back</a>
    </form>

@endsection



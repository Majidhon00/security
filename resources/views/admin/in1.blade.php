@extends('layout')
<style>
    .active{
        background: #081D45;
    }
</style>
<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
@section('name')
<div class="title">update one</div><br>
@if (\Session::has('success'))
<div class="alert alert-success">
    <ul>
        <li>{!! \Session::get('success') !!}</li>
    </ul>
</div>
@endif
    <form action="{{ route('admin1.update',['admin1'=>$baza->id])}}" method="POST">
      @method('PUT')
      @csrf
      <input type="text" name="title" class="form-control" value="{{$baza->title}}">
      <br>
      <textarea name="content" cols="30" rows="2" class="form-control">{{$baza->content}}</textarea>
      <br>
      <a href="{{route('admin1.edit',1)}}" class="btn btn-primary">1</a>
      <a href="{{route('admin1.edit',2)}}" class="btn btn-primary">2</a>
      <a href="{{route('admin1.edit',3)}}" class="btn btn-primary">3</a>
      <br>
      <br>
      <input type="submit" class="btn btn-info">
    </form>
@endsection
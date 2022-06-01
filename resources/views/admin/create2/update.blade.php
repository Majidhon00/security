@extends('layout')
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

@section('name')
<form action="{{route('footer.update',['footer'=>$blog->id])}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <input type="file" name="img" class="form-control" value="{{$blog->img}}"><br>
    <input type="hidden" name="dbimg" class="form-control" value="{{$blog->img}}">
    <input type="text" name="title" class="form-control" placeholder="title" value="{{$blog->title}}"><br>
    <textarea name="content" placeholder="content" cols="30" rows="3" class="form-control">{{$blog->content}}</textarea><br>
    <input type="submit" value="send" class="btn btn-success">
    <a href="{{route('footer.index')}}" class="btn btn-dark">back</a>
  </form>
@endsection 
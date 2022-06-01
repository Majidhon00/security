@extends('layout')
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

@section('name')
    <form action="{{route('footer.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <input type="file" name="img" class="form-control"><br>
        <input type="text" name="title" class="form-control" placeholder="title"><br>
        <textarea name="content" placeholder="content" cols="30" rows="3" class="form-control"></textarea><br>
        <input type="submit" value="send" class="btn btn-success">
        <a href="{{route('footer.index')}}" class="btn btn-dark">back</a>
      </form>
@endsection
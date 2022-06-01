@extends('layout')
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('lib/flaticon/font/flaticon.css')}}">
@section('name')
    <form action="{{route('add5.store')}}" method="post">
      @csrf
      <select name="icon" class="form-control" >
        <option value="flaticon-policeman">police icon</option>
        <option value="flaticon-bodyguard">guards icon</option>
      </select><br>
      <input type="text" name="title" class="form-control" placeholder="title"><br>
      <textarea name="content"  cols="30" rows="2" class="form-control" placeholder="content"></textarea><br>
      <input type="submit"  class="btn btn-success" value="Send">
      <a href="{{route('add5.index')}}" class="btn btn-dark">back</a>

    </form>
@endsection
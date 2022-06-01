@extends('layout')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link href="{{asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
<style>
  .dd2{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr ;
    grid-gap: 15px;
  }
</style>
@section('name')
<div class="dd2">

  @foreach ($baza as $baza1)

  <div class=" bb border">
  <div class="d-flex flex-column">
    <div class="d-flex align-items-center mb-3">
      <h3 class="{{$baza1->icon}} font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
      <h6 class="text-truncate m-0">{{$baza1->title}}</h6>
    </div>
    <p>{{$baza1->content}}</p>
  </div>

  <div class="dd">
    <a href="{{route('add5en.edit',['add5en'=>$baza1->id])}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
    <form action="{{route('add5en.destroy',['add5en'=>$baza1->id])}}" method="post">
      @method('DELETE')
      @csrf
      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
    </form>
    
  </div>

</div>

@endforeach
</div><br>
<a href="{{route('add5en.create')}}" class="btn btn-info">ADD</a>
<a href="{{route('upd4.edit',1)}}" class="btn btn-dark">BACK</a>
@endsection
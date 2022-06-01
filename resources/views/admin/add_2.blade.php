@extends('layout')
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<style>
  .active3{
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
<div class="row pb-3">
@foreach ($baza as $baza1)
      <div class="col-md-6 col-lg-4 mb-4">

        <div class="card mb-2 p-3">
            <img class="card-img-top" src="img/{{$baza1->src}}" width="200px" height="250px" alt="">
            <div class="card-body bg-secondary d-flex align-items-center p-0">
                <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                <h6 class="card-title text-white text-truncate m-0">{{$baza1->title}}</h6>
            </div>
            <div class="card-footer">
              {{$baza1->content}}
              <br>
              <div class="dd">

                <a href="{{route('add1en.edit',['add1en'=>$baza1->id])}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                <form action="{{route('add1en.destroy',['add1en'=>$baza1->id])}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
        
        
        @endforeach    
      </div>     
        <div>
          <a href="{{route('add1en.create')}}" class="btn btn-info">add</a>
        </div>
@endsection
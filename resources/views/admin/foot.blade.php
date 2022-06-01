@extends('layout')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link href="{{asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
<style>
  .active7{
      background: #081D45;
  }
</style>
@section('name')
<a href="{{route('footer.create')}}" class=" btn btn-info"><i class="fas fa-plus"></i></a><br>
<div class="row">
  
  @foreach ($blogs as $blog)
<div class="col-lg-4 mb-4">
  <br>
  <div class="card mb-2 p-3">
    <img class="card-img-top" src="img/{{$blog->img}}" alt="">
    <div class="card-body bg-secondary d-flex align-items-center p-0">
      <h6 class="card-title text-white text-truncate m-0 ml-3">{{$blog->title}}</h6>
          <a href="" class="fa fa-eye d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
      </div>
      <div class="card-footer py-3 px-4">
        <div class="d-flex mb-2">
          <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
          <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
          <small class="mr-3"><i class="fa fa-comments text-primary"></i>
          @foreach ($bazas as $baza)
              
          @if ($blog->id==$baza->b_id)
          
          {{ $baza->count('b_id')}}
          
          @endif
          @endforeach
            </small>
          
         
          
           
        </div>
        <p class="m-0">{{$blog->content}}</p><br>
        <div class="dd">

          <a href="{{route('footer.edit',['footer'=>$blog->id])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
          <form action="{{route('footer.destroy',['footer'=>$blog->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
          </form>
          <a href="{{route('comdel.show',['comdel'=>$blog->id])}}" class="btn btn-info"><i class="fas fa-comment"></i></a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
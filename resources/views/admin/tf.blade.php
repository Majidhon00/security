@extends('layout')
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<style>
  .active6{
      background: #081D45;
  }
</style>
@section('name')
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Ismi</th>
          <th>Sohasi</th>
          <th>malumoti</th>
          <th>Rasmi</th>
          <th>Amallar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($bazas as $baza)
            
        <tr>
          <td>{{$baza->name}}</td>
          <td>{{$baza->title}}</td>
          <td>{{$baza->text}}</td>
          <td><img src="img/{{$baza->img}}" alt="" width="100px"></td>
          <td>
          <form action="{{route('tf.update',['tf'=>$baza->id])}}" method="post">
            @csrf
            @method('PUT')
            <button type="submit"  class="btn btn-dark"><i class="fas fa-minus"></i></button>
          </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection
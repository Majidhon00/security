@extends('layout')
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<style>
  .active5{
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
          <form action="{{route('contact.update',['contact'=>$baza->id])}}" method="post">
            @csrf
            @method('PUT')
            <button type="submit"  class="btn btn-info"><i class="fas fa-plus"></i></button>
          </form>
          <br>
          <form action="{{route('contact.destroy',['contact'=>$baza->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit"  class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
          </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection
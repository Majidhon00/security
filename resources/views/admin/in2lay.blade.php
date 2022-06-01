@extends('layout')
<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
<style>
  .active2{
      background: #081D45;
  }
</style>
@section('name')
<a href="{{ route('upd2en.edit',1)}}" class="btn btn-primary">  en <i class="fas fa-edit"></i></a>
<a href="{{ route('admin2.edit',1)}}" class="btn btn-primary">  uz <i class="fas fa-edit"></i></a>
@endsection
<script src="{{asset('js/jquery.js')}}"></script>
<script>
$(function(){
$(".ahref").hide();
})
</script>

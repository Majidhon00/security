<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/all.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>Document</title>
  <style>
    .mt{
      margin-top: 60px;
    }
  </style>
</head>
<body class="container mt-4">
<div class="row">
  <div class="col-lg-4">
    <div class="card mb-2 p-3">
      <img class="card-img-top" src="../img/{{$blog->img}}" alt="">
      <div class="card-body bg-secondary d-flex align-items-center p-0">
            <h6 class="card-title text-white text-truncate m-0 ml-3">{{$blog->title}}</h6>
            <a href="{{route('comment.show',['comment'=>$blog->id])}}" class=" flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
        </div>
        <div class="card-footer py-3 px-4">
            <div class="d-flex mb-2">
                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                <small class="mr-3"><i class="fa fa-comments text-primary"></i> {{$bazas2}} </small>
            </div>
            <p class="m-0">{{$blog->content}}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8 mt">
        <h3>Add comment</h3><br>
        @section('name')

          @if ($errors->any())
              <div class="alert alert-danger">
                <h6> kiritgan malumotlaringizda xatolik bor </h6>
              </div>
          @endif

          @if (\Session::has('success'))
          <div class="alert alert-success">
              <h6>{!! \Session::get('success') !!}</h6>
          </div>
          @endif
          <form action="{{route('comment.store')}}" method="POST">
            @csrf
            <input type="hidden" name="b_id" value="{{$blog->id}}">

            @if (!(Session::get('name')==''))

              <input type="hidden" name="name" class="form-control" value=" {{Session::get('name')}}"  placeholder="Name"><br>
            @else
            <input type="text" name="name" class="form-control"  placeholder="Name"><br>
            @endif
            <textarea name="content" id="" cols="30" rows="7" class="form-control" placeholder="comment"></textarea><br>
          <input type="submit" value="send" class="btn btn-success">
          <a href="{{route('index.index')}}" class="btn btn-dark">Back</a>
        </form>
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-6">
        @foreach ($bazas as $baza)

        <div class="testimonial-item px-3">
          <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
            {{$baza->content}}
          </div>
          <div class="d-flex align-items-center">
            <div class="pl-4">
              <h6 class="text-primary">{{$baza->name}}</h6>
            </div>
          </div>
        </div><br>
        @endforeach
      </div>
      </div>
    </body>
</html>

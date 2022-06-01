<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
<style>
    nav{
      background: #000;
     
    }
    .mart{
      margin-top: 70px;
    }
    .aa{
            text-align: center;
            margin-top: 12px;
        }
</style>
  <title>Document</title>
</head>
<body>
  <div class="container-fluid p-0 nav-bar">
    <nav class="navbar bg-secondary  navbar-expand-lg bg-none navbar-dark py-0">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Bars</span>Jamoasi</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav m-auto py-4">
                <a href="index" class="nav-item nav-link">Home</a>
                <a href="about" class="nav-item nav-link">About</a>
                <a href="service" class="nav-item nav-link">Services</a>
                <a href="guard" class="nav-item nav-link">Guards</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="blog" class="dropdown-item">Blog Grid</a>
                        <a href="single" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="{{route('contact.create')}}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>
<br>
  <div class="col-lg-5 mb-5 mart">
    <h5 class="text-primary mb-3">Why Choose Us?</h5>
    <h1 class="mb-4">{{$blog->title}}</h1>
    <img class="img-thumbnail mb-4 p-3" width="411px" height="189px" src="{{asset($blog->src)}}" alt="Image">
    <p>
        {{$blog->content}}
    </p>
    <a href="{{route('index.index')}}" class="btn btn-primary">Qaytish</a>
</div>
<div class="container-fluid bg-secondary text-white mt-5 py-2 px-sm-3 px-md-3">
  <p class="aa">
      2022 03 31 security laravel partfolio
  </p>
</div>
</body> 
</html>
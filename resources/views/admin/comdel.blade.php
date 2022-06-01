

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="{{asset('css/all.css')}}">
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
 </head>
 <body class="container">
   

<div class="row mt-5">
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
        <form action="{{route('comdel.destroy',['comdel'=>$baza->id])}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger ml-5"><i class="fas fa-trash-alt"></i></button>
        </form>
      </div>
    </div><br>
    @endforeach
  </div>
</div>    
  <a href="{{route('footer.index')}}" class="btn btn-dark">back</a>
</body>
</html>   

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SafetyFirst - Security Guard Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="icon" href="{{asset('img/bars.png')}}">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <style>
        .dd{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .rov{
            margin-left: -200px !important;
        }
        .aa{
            text-align: center;
            margin-top: 12px;
        }
        .margin{
            position: relative;
            left: 250px;
            top: -25px;
            background: none;
            border-radius: 5px;
        }
        .aa{
            position: relative;
            left: -25%;
            top: -15px;
        }
        .dropdown :hover,
        .dropdown-menu:hover{
            border: none;
            outline: none !important;
        }
        .dropdown-item:hover .dropdown ,.dropdown-menu:hover .dropdown{
            border: none;
            outline: none !important;
        }
        h1{
            font-family:Arial, Helvetica, sans-serif !important; 
            font-weight: 600 !important;
           color: rgb(51, 51, 80) !important;
        }
        h2{
            font-family:Arial, Helvetica, sans-serif !important; 
            font-weight: 600 !important;
           color: rgb(51, 51, 80) !important;
        }
        h3{
            font-family:Arial, Helvetica, sans-serif !important; 
            font-weight: 600 !important;
           color: rgb(51, 51, 80) !important;
        }
        h4{
            font-family:Arial, Helvetica, sans-serif !important; 
            font-weight: 600 !important;
           color: rgb(51, 51, 80) !important;
        }
        h5{
            font-family:Arial, Helvetica, sans-serif !important; 
            font-weight: 600 !important;
           color: rgb(51, 51, 80) !important;
        }
        h6{
            font-family:Arial, Helvetica, sans-serif !important; 
            font-weight: 600 !important;
           color: rgb(51, 51, 80) !important;
        }
    </style>
</head>

<body class="bg-white">
    <!-- Topbar Start -->

    <div class="row py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="" class="navbar-brand d-none d-lg-block">
                <h1 class="m-0 display-5 text-capitalize font-italic"><span class="text-primary">Bars/</span>security</h1>
            </a>
        </div>

        <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">

                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email</h6>
                        <p class="m-0">majidhonsattorov@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Call Us</h6>
                        <p class="m-0">+998 91 145 95 00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


   <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Bars</span>Jamoasi</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                    <a href="uz" class="nav-item nav-link aa">UZ</a>
                    <a href="en" class="nav-item nav-link aa">EN</a>
                    <a href="index" class="nav-item nav-link active">{{ __('til.home') }}</a>
                    <a href="about" class="nav-item nav-link">{{ __('til.about') }}</a>
                    <a href="service" class="nav-item nav-link">{{ __('til.service') }}</a>
                    <a href="guard" class="nav-item nav-link">{{ __('til.guards') }}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ __('til.pages') }}</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="blog" class="dropdown-item">Blog Grid</a>
                            <a href="single" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="{{route('contact.create')}}" class="nav-item nav-link">{{ __('til.contact') }}</a>
                    <a href="{{route('contactAcc.create')}}" class="btn btn-lg btn-primary margin mt-3 mt-md-4 px-4">{{ __('til.btn_in') }}</a>

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-primary m-0">{{ __('til.tit_desc') }}</h4>
                        <h4 class="display-4 m-0 mt-2 mt-md-3 text-white">{{ __('til.tit_one') }}</h4>
                        <a href="{{route('contactAcc.create')}}" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">{{ __('til.btn_in') }}</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-primary m-0">{{ __('til.tit_desc') }}</h4>
                        <h4 class="display-4 m-0 mt-2 mt-md-3 text-white">{{ __('til.tit_two') }}</h4>
                        <a href="{{route('contactAcc.create')}}" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">{{ __('til.btn_in') }}</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 py-lg-0 feature">
        <div class="row py-5 py-lg-0">
            @foreach($update1s as $update)
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center border-right px-5 mb-4 mb-lg-0">
                    <i class="flaticon-policeman display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3">{{$update->title}}</h5>
                        <p class="m-0"> {{$update->content}} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Features End -->


    <!-- About Start -->
    @foreach($update2s as $update2)
    <div class="container-fluid mb-5" style="background: #f6f6f6;" id="about">
        <div class="row align-items-center">
            <div class="col-lg-6 px-0">
                <img width="100%" class="img-fluid" src="{{$update2->src}}" alt="Image">
            </div>
            <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                <h5 class="text-primary mb-3">About Us</h5>
                <h1 class="mb-4">{{$update2->title}}</h1>
                <p>{{$update2->content}}</p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class="flaticon-approved display-3 text-primary"></i>
                        <h5 class="mt-2">{{$update2->k_title}}</h5>
                        <p>{{$update2->k_content}}</p>
                    </div>
                    <div class="col-sm-6">
                        <i class="flaticon-medal display-3 text-primary"></i>
                        <h5 class="mt-2">{{$update2->k2_title}}</h5>
                        <p>{{$update2->k2_content}}</p>
                    </div>
                </div>
                <a href="" class="btn btn-lg px-4 btn-primary">Learn More</a>
            </div>
        </div>
    </div>
    @endforeach
    <!-- About End -->


    <!-- Services Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">{{ __('til.title_desc') }}</h5>
            <h1 class="m-0">{{ __('til.title_one') }}</h1>
        </div>
        <div class="row pb-3">
            @foreach ($crets as $cret)

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/{{$cret->src}}" alt="" height="250px">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class=" font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">{{$cret->title}}</h6>
                    </div>
                    <div class="card-footer">
                        {{$cret->content}}
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
    <!-- Services End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-primary my-5 py-5 text-center">
        <div class="row pt-5">
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-user-shield mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">250</h4>
                <h6 class="text-white m-0">Our Staff</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-users mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">1500</h4>
                <h6 class="text-white m-0">Happy Client</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-shield-alt mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">10000</h4>
                <h6 class="text-white m-0">Project Complete</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-award mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">25</h4>
                <h6 class="text-white m-0">Award Winning</h6>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container pt-5">
        <div class="row">
            @foreach ($upd4s as $upd4)

            <div class="col-lg-5 mb-5">
                <h5 class="text-primary mb-3">{{ __('til.desc') }}</h5>
                <h1 class="mb-4">{{$upd4->title}}</h1>
                <img class="img-thumbnail mb-4 p-3" width="411px" height="189px" src="{{$upd4->src}}" alt="Image">
                <p>
                    {{substr($upd4->content,0,70)}}
                </p>
                <a href="{{route('index.show',['index'=>$upd4->id])}}" class="btn btn-lg btn-primary mt-2">Learn More</a>
            </div>
            @endforeach

                <div class="col-lg-7">
                        <div class="row">
                        @foreach ($add5s as $add5)

                        <div class="col-md-6 mb-4">

                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="{{$add5->icon}} font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">{{$add5->title}}</h6>
                            </div>
                            <p>
                            </div>

                            <p>{{$add5->content}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Subscribe Start -->
    <div class="container-fluid bg-primary my-5 py-5 text-center">
        <h1 class="text-white font-weight-bold mt-5 mb-3">{{__('til.sub')}}</h1>
        <p class="text-white mb-4">{{__('til.subdesc')}}</p>
        <form class="form-inline justify-content-center mb-5">
            <div class="input-group">
                <input type="text" class="form-control-lg" placeholder="Email">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">{{__('til.ob')}}</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Subscribe End -->


    <!-- Team Start -->

    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid my-5 p-0 py-5" style="background: #f6f6f6;">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h5 class="text-primary mb-3">{{__('til.test')}}</h5>
                <h1 class="m-0">{{__('til.testdesc')}}</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($contacts as $contact)

                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                       {{substr($contact->text,0,150)}}
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="img/{{$contact->img}}" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">{{$contact->name}}</h6>
                            <p class="m-0">{{$contact->title}}</p>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">{{__('til.rec')}}</h5>
            <h1 class="m-0">{{__('til.recdesc')}}</h1>
        </div>
        <div class="row pb-3">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/{{$blog->img}}" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h6 class="card-title text-white text-truncate m-0 ml-3">{{$blog->title}}</h6>
                        <a href="{{route('comment.show',['comment'=>$blog->id])}}" class="fa fa-comment d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                    </div>
                    <div class="card-footer py-3 px-4">
                        <div class="d-flex mb-2">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> {{ $baza2->count('b_id') }} </small>
                        </div>
                        <p class="m-0">{{$blog->content}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-2 py-2 px-sm-3 px-md-3">
           <p class="aa">
               2022 03 31 security laravel partfolio
           </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary border back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{asset('js/jquery.js')}}"></script> <!-- Custom scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
<script>
    $(function(){
        $(".aa").click(function (e) {
            e.preventDefault();
            a = $(this).attr("href");
            window.location.href="tilch/"+a;
        });

})
</script>

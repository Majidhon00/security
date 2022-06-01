<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
       .sales-boxes{
         width: 1600px;
       }
       .dd{
         display: flex;
         grid-gap: 15px;
         margin-top: 10px;
       }
       .bb{
         padding: 10px 20px;
       }
       .button{
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
        background: #0A2558;
        border: none;
        color: aliceblue;
        padding: 8px 0px;
        outline: none;
       }
       .button:hover{
          background: #081D45;
       }
       .button:active{
         outline: none;
       }
     </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CodingLab</span>
    </div>
      <ul class="nav-links ">
        <li class="active">
          <a href="{{ route('admin1.edit',1)}}" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Update 1</span>
          </a>
        </li>
        <li class="active2">
          <a href="{{ route('admin2.index',1)}}">
            <i class='fas fa-user-cog' ></i>
            <span class="links_name">About US</i></span>
          </a>
        </li>
        <li class="active3">
          <a href="{{ route('add1.index')}}">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">OUR SERVICES</span>
          </a>
        </li>
        <li class="active4">
          <a href="{{ route('upd4.edit',['upd4'=>1])}}">
            <i class='fas fa-user-cog' ></i>
            <span class="links_name">WHY CHOOSE US?</span>
          </a>
        </li>
        <li class="active5">
          <a href="{{ route('contact.index')}}">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li class="active6">
          <a href="{{ route('tf.index')}}">
            <i class='bx bx-user' ></i>
            <span class="links_name">Show Team</span>
          </a>
        </li>
        <li class="active7">
          <a href="{{route('footer.index')}}">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Footer News</span>
          </a>
        </li>

        <li class="log_out">

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
            @csrf
            <button type="submit" class="button" >
            <i class='bx bx-log-out'></i>
           <span class="links_name">log out</span>

          </button>
          </form>

        </li>
      </ul>
    </form>
    </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">




      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">

          @section('content')


                          @if (session('status'))
                          <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                          </div>

                          @endif
                            {{ __('You are logged in!') }}
                        </div>

        </div>
          @endsection
          <div class="container">
            <a href="uz" class="btn btn-info ahref">uz</a>
            <a href="en" class="btn btn-info ahref">en</a>
          </div>
          <br>
          @yield('name')
        </div>
      </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
  <script>
    $(function(){
      $(".ahref").click(function (e) {
        e.preventDefault();
        a = $(this).attr('href');
        window.location.href="tilclick/"+a
      });
    })
  </script>
  </body>
</html>


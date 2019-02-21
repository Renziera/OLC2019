<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--CSS ane-->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/home.css') !!}">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>OLC 2019</title>
</head>

<body>

    <!--Navbar-->
    <nav>
        <div class="container">

            <div id="sidebar">

                <a href="{{ route('daftar') }}">Daftar</a>
                <a href="{{ route('jadwal') }}">Jadwal</a>
                <a href="{{ route('pembayaran') }}">Cek Pembayaran</a>
                @auth
                <a href="{{ route('admin') }}">Admin Panel</a>
                @else
                <a class="nav-item btn btn-light tombol2" href="{{ route('login') }}">Login Panitia</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth


            </div>

        </div>

    </nav>
    <nav>
        <div class="container">
            @if (Route::has('login'))
            
                <a href=""><img src="{{URL::asset('/img/logoOLC.png')}}" width="100px" alt=""></a>
  
@endif




           
            <div class="kiri">
                <a href="{{ route('daftar') }}">Daftar</a>
                <a href="{{ route('jadwal') }}">Jadwal</a>
                <a href="{{ route('pembayaran') }}">Cek Pembayaran</a>
                @auth
                <a href="{{ route('admin') }}">Admin Panel</a>
                @else



                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth



            </div>
            <a class="nav-item btn btn-light tombol2" href="{{ route('login') }}">Login Panitia</a>




        </div>
    </nav>
    <div class="toggle-btn">
        <a class="fa fa-bars hamburger" onclick="openside()"></a>
        <a class="fa fa-times silang" onclick="closeside()"></a>
    </div>

    <!--Akhir Navbar-->
    <br>

    <!--Course-->


    <!--Course-->

    <!--JumboTron-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">OMAHTI LEARNING CENTER <br> 2019</h1>
            <br>
            <a class="nav-item btn btn-light tombol" href="#">About</a>

        </div>
    </div>

    <!--Akhir JUmbotron-->


    <!--ABout-->

    <div class="row about">
        <div class="col-lg-6">
            <img src="{{URL::asset('/img/workingspace.png')}}" alt="profile Pic" class="img-fluid">

        </div>
        <div class="col-lg-5">
            <h3>APA <span>ITU</span> OLC ? </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus praesentium atque, maxime id Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, repellat.</p>
        </div>

    </div>


    <!--ABout-->

    <!--Kelas-->
    <div class="kelas">
        <h1 class="judulkelas">WHAT'S THE COURSE?</h1>


    </div>


    <div class="course">



        <div class="card col-lg-3">
            <img src="{{URL::asset('/img/webapps.png')}}" alt="profile Pic" class="img-fluid" width="100" height="100">
            <h2>Web Apps</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, nesciunt! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, totam.</p>

        </div>

        <div class="card col-lg-3">
            <img src="{{URL::asset('/img/db.png')}}" alt="profile Pic" class="img-fluid" width="100" height="100">

            <h2>Database</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, nesciunt! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, totam.</p>

        </div>

        <div class="card col-lg-3">
            <img src="{{URL::asset('/img/cyber.png')}}" alt="profile Pic" class="img-fluid" width="60" height="50">
            <h2>Cyber Security</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, nesciunt! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, totam.</p>

        </div>

        <div class="card col-lg-3 ">
            <img src="{{URL::asset('/img/game.png')}}" alt="profile Pic" class="img-fluid" width="150" height="145">
            <h2>Game Development</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, nesciunt! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, totam.</p>

        </div>

 
        <div class="card col-lg-3">
            <img src="{{URL::asset('/img/android.png')}}" alt="profile Pic" class="img-fluid" width="80" height="80">
            <h2>Android Apps</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, nesciunt! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, totam.</p>

        </div>

        <div class="card col-lg-3">
            <img src="{{URL::asset('/img/wd.png')}}" alt="profile Pic" class="img-fluid" width="100" height="100">
            <h2>Web Design</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, nesciunt! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, totam.</p>

        </div>



    </div>





    <!--Kelas-->

    <!--Galri-->
    <h1 class="judulkelas seethe">See The Moment</h1>


    <div class="gallery">
        <img src="{{URL::asset('/img/docu1.jpg')}}" alt="">
        <img src="{{URL::asset('/img/docu2.jpg')}}" alt="">
        <img src="{{URL::asset('/img/docu3.jpg')}}" alt="">
        <img src="{{URL::asset('/img/docu4.jpg')}}" alt="">
        <img src="{{URL::asset('/img/docu5.jpg')}}" alt="">
        <img src="{{URL::asset('/img/docu6.jpg')}}" alt="">


    </div>





    <!--Galeri-->

    <!-- Optional JavaScript -->

    <script>
        function openside() {
            document.getElementById("sidebar").style.left = "0";

            document.getElementsByClassName("hamburger")[0].style.display = "none";

            document.getElementsByClassName("silang")[0].style.display = "block";

        }

        function closeside() {
            document.getElementById("sidebar").style.left = "-100%";
            document.getElementsByClassName("silang")[0].style.display = "none";
            document.getElementsByClassName("hamburger")[0].style.display = "block";



        }
    </script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--CSS ane-->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/coursestyle.css') !!}">

    <link rel="stylesheet" type="text/css" href="{!! asset('css/hamburgers.css') !!}">

    <link rel="stylesheet" type="text/css" href="{!! asset('css/animate.css') !!}">



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">


    <!--JS-->
    <script src="{!! asset('js/wow.min.js') !!}"></script>


    <script src="{!! asset('js/typed.js') !!}"></script>

    <script>
        new WOW().init();
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Jadwal OLC 2019</title>
</head>

<body>

    <!--Navbar-->

    <div class="container">

        <div id="sidebar">
 <a href="{{ url('/') }}"><img src="{{URL::asset('/img/logoOLC.png')}}" width="100px" alt=""></a>
           
            <a href="{{ route('jadwal') }}">Jadwal</a>
             
             <a href="/#course">Kelas</a>
            <a href="{{ route('pembayaran') }}">Cek Pembayaran</a>
            @auth
            <a href="{{ route('admin') }}">Admin Panel</a>
            @else
            <a class="nav-item btn btn-light tombol2" href="{{ route('login') }}" style="display:none;">Login Panitia</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
            <a class="nav-item btn btn-light tombol2 logdaf" href="{{ route('daftar') }}">Daftar</a>

        </div>

    </div>


    <nav id="navbar" class="wow fadeInRightBig" data-wow-duration="0.5s">
        <div class="container">
            @if (Route::has('login'))

            <a href="{{ url('/') }}"><img src="{{URL::asset('/img/logoOLC.png')}}" width="100px" alt=""></a>

            @endif


            <div class="kiri">

                <a href="{{ route('jadwal') }}">Jadwal</a>
                <a href="/#course">Kelas</a>
                <a href="{{ route('pembayaran') }}">Cek Pembayaran</a>
                @auth
                <a href="{{ route('admin') }}">Admin Panel</a>
                @else



                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>

            <a class="nav-item btn btn-light tombol2 logdaf tot" href="{{ route('daftar') }}">Daftar</a>
            <a class="nav-item btn btn-light tombol2 logdaf" href="{{ route('login') }}" style="display:none;">Login Panitia</a>

        </div>


    </nav>
    <div class="toggle-btn">
        <div class="hamburger hamburger--collapse" onclick="openside()">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>

    </div>

    <!--Akhir Navbar-->
    <br>

 

    <!--JumboTron-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1 class="intro-oti"></h1>
            <h1 class="tahun"></h1>

        </div>
    </div>

    
    <!--Akhir JUmbotron-->
    
<!--Penjelasan-->
 <div class="container">
     <div class="penjelasan">
     <img class="logokelas" src="{{URL::asset('/img/cyber.png')}}" alt="" width="150px">
     
     <h1 class="judulkelas">OVERVIEW</h1>
        <p class="text-bidang">Cyber Security adalah upaya untuk mengamankan sumber daya telematika dari segala upaya tindakan cyber crime.
                Dalam mempelajarinya, seringkali kita menggunakan permainan Capture the Flag (CTF). Di permainan itu, kita dituntut
                untuk mencari celah dalam suatu keamanan sumber daya telematika untuk mendapatkan flag yang sudah disematkan di celah tersebut.</p>
     
     
     
 </div>
     
     
 </div>
 
 <div class="container">
        <div class="row">
            <div class="col-md-6 center">
                <ul class="dipelajari">
              <h2 class="learn">Materi</h2>
               <li class="sub-materi"> <span style='font-size:20px;'>&#10004;</span>Pengenalan dasar Python</li>
               <li class="sub-materi"> <span style='font-size:20px;'>&#10004;</span>Modul Python</li>
               <li class="sub-materi"> <span style='font-size:20px;'>&#10004;</span>Basic SQL (Injection)</li>
               <li class="sub-materi"> <span style='font-size:20px;'>&#10004;</span>Scripting Python untuk SQL Injection</li>
               
               
               
               
           </ul>
                
                
                
                
            </div>
            <div class="col-md-6 center">
                <ul class="dipelajari">
              <h2 class="learn">Requirements</h2>
               <li class="sub-materi"> <span style='font-size:20px;'>&#10004;</span>Basic Data Relation Knowledge</li>
               <li class="sub-materi"> <span style='font-size:20px;'>&#10004;</span>Software: Python</li>
               <br>
               <br>
               <br>
               <br>
               
               
               
               
           </ul>
                
                
                
                
            </div>
            
           
            
        </div>
        
        
        
        
        
    </div>
    
 
 
 
 
 
 
 
<!--Akhir penjelasan-->
  
  
  <!--Profil Pengajar-->
<h1 class="judulkelas">PENGAJAR</h1>
<br>
 <div class="card">
  
  <h1 class="nama">Bayu Fedra Abdullah</h1>
  <p class="title">Freelance <br>-Penetration Testing Web dan Server sub Domain BKKBN [2018] <br><br>-Penetration Testing Web Rumah Sakit Karanganyar  [2018] <br><br>-Penetration Testing Web Start up Penyedia Layanan Sosial Media [2018]
 
</div>
 <br>
<br>

 
<!--End profil pengajar-->
   
    <footer class="wow fadeInUpBig" data-wow-duration="2s">
        <div class="container">
            <div class="links">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Related</h3>

                        <ul class="indent">
                            <li><a href="http://omahti.web.id">OmahTI</a></li>
                            <li><a href="http://himakom.ugm.ac.id">Himakom UGM</a></li>
                            <li><a href="http://ugm.ac.id">UGM</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-4">
                        <h3>Support</h3>

                        <ul>
                            <li>Line: @app3977t</li>
                        </ul>
                    </div>

                    <div class="col-sm-4">
                        <h3>Other</h3>

                        <ul class="indent">
                            <li><a href="http://omahti.web.id/blog">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>



        <div class="infolanjut">
            <p>
            Informasi lebih lanjut:
            <a href="http://line.me/ti/p/@app3977t" target="_blank"><i class="fab fa-line"></i></a>
            <a href="https://web.facebook.com/OmahTI.UGM" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/omahti_ugm" target="_blank"><i class="fab fa-instagram"></i></a>
        </p>
        <span>&copy; 2019 OmahTI</span>
            
            
        </div>

        
    </footer>




   

    <!-- Optional JavaScript -->

    <script>
        //side bar
        function openside() {
            var side = document.getElementById("sidebar");

            var icon = document.getElementsByClassName("hamburger");

            if (side.style.left == "-100%") {
                side.style.left = "0";
                icon[0].classList.add("is-active");
            } else {
                side.style.left = "-100%";
                icon[0].classList.remove("is-active");
            }

        }


        //menambahkan background pas scroll
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 50) {
                    $("#navbar").css("background", "#1c232e");
                } else {
                    $("#navbar").css("background", "none");
                }
            })
        })


        //hide nav pas scroll down and show it when scroll up
        var prevScrollpos = window.pageYOffset;
        var humbuerger
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if ($(window).scrollTop() > $(window).height() - 200) {
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("navbar").style.top = "0";
                    document.getElementsByClassName("toggle-btn")[0].style.top = "20px";
                } else {
                    document.getElementById("navbar").style.top = "-110px";
                    document.getElementsByClassName("toggle-btn")[0].style.top = "-50px";
                }
                prevScrollpos = currentScrollPos;

            }

        }


        //typed js

        $('document').ready(function() {
            var typee = new Typed('.intro-oti', {
                strings: ["Cyber"],

                backSpeed: 40,
                typeSpeed: 70,
                startDelay: 200
            });
            var typed = new Typed('.tahun', {
                strings: ["Security"],
                backSpeed: 40,
                typeSpeed: 70,
                startDelay: 800,

            });
        });
    </script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

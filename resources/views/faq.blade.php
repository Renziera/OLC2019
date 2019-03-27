<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--CSS ane-->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/faq.css') !!}">

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

    <title>FAQ OLC 2019</title>
</head>

<body>

    <!--Navbar-->

    <div class="container">

        <div id="sidebar">
<a href="{{ url('/') }}"><img src="{{URL::asset('/img/logoOLC.png')}}" width="100px" alt=""></a>
           
            <a href="{{ route('jadwal') }}">Jadwal</a>
             <a href="/#course">Kelas</a>
             <a href="{{ route('faq') }}">FAQ</a>
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
                <a href="{{ route('faq') }}">FAQ</a>
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
        </div>
    </div>

    
    <!--Akhir JUmbotron-->
    
<!--Penjelasan-->
 
 <div class="container">
    <div class="penjelasan">
        <ol class="faq wow fadeInLeft">
            <li class="faq-list">
                <p class="question">
                    Apa saja persyaratan mendaftar OLC 2019?
                </p>
                <p class="answer">
                    Tidak ada persyaratan khusus untuk mendaftar pelatihan OLC 2019. Tetapi, pada beberapa bidang,
                    peserta dianjurkan untuk menguasai konsep-konsep dasarnya agar pelatihan dapat berjalan lebih lancar dan efisien.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Kapan pendaftaran OLC 2019 berlangsung?
                </p>
                <p class="answer">
                    Pendaftaran OLC 2019 berlangsung dari tanggal 15 Maret sampai 7 April 2019, dengan catatan
                    bahwa kami hanya melayani pendaftaran secara offline pada hari Senin - Jumat pukul 08.00 - 15.00.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Bagaimana cara mendaftar OLC 2019?
                </p>
                <p class="answer">
                    Untuk mendaftar OLC 2019, silakan buka website kami olc.omahti.web.id/daftar atau silakan
                    datang ke stand OLC 2019 di selasar gedung C Fakultas MIPA UGM.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Berapa biaya untuk mengikuti OLC 2019?
                </p>
                <p class="answer">
                    Biaya pendaftaran OLC 2019 yaitu sebesar Rp 100.000,00 dengan cashback 50% jika mampu hadir di setiap
                    sesi bidang yang diikuti.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Konfirmasi apa yang saya dapatkan jika berhasil mendaftar OLC 2019?
                </p>
                <p class="answer">
                    Jika berhasil mendaftar OLC 2019, kamu akan mendapatkan kode peserta yang nantinya akan kamu
                    gunakan untuk mengecek status pembayaran.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Berapa lama OLC 2019 diadakan?
                </p>
                <p class="answer">
                    OLC 2019 akan diadakan selama empat pekan dan hanya diadakan pada hari Ahad dengan setiap kelas berdurasi dua jam.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Benefit apa saja yang didapatkan peserta OLC 2019?
                </p>
                <p class="answer">
                    Selama pelatihan OLC 2019, peserta akan mendapatkan materi pelajaran serta makanan ringan.
                    Peserta juga berhak mendapatkan sertifikat serta cashback jika mampu menghadiri semua sesi bidang yang diikuti.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Apa saja ketentuan untuk mendapatkan sertifikat?
                </p>
                <p class="answer">
                    Peserta berhak mendapatkan sertifikat OLC 2019 jika mampu menghadiri minimal 50% dari total pertemuan.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Jika saya tidak dapat hadir, apakah akan ada kelas pengganti?
                </p>
                <p class="answer">
                    Mohon maaf, kami tidak mengadakan kelas pengganti selama OLC. Jadi, usahakan untuk terus hadir ya,
                    supaya bisa mendapatkan seluruh materi yang disampaikan oleh pengajar.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Berapa banyak pengajar yang akan mendampingi peserta selama OLC 2019?
                </p>
                <p class="answer">
                    Setiap kelas akan diisi oleh satu pengajar serta beberapa asisten yang akan membantu peserta selama pelatihan.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Apakah peserta perlu membawa laptop sendiri selama kelas OLC?
                </p>
                <p class="answer">
                    Ya, peserta harus membawa laptop dan juga memasang aplikasi yang dibutuhkan bidang yang peserta ikuti.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Apakah terdapat batas minimum dan batas maksimum usia bagi peserta OLC 2019?
                </p>
                <p class="answer">
                    Tidak ada batas usia untuk peserta OLC 2019.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Apakah panitia bersedia mengiinstalkan software yang dibutuhkan selama OLC 2019?
                </p>
                <p class="answer">
                Sebelum pelatihan dimulai, panitia akan mengadakan 
                technical meeting untuk membantu peserta menginstal software yang dibutuhkan.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Berapa kelas yang dapat diikuti dengan membayar biaya pendaftaran sebanyak Rp 100.000,00?
                </p>
                <p class="answer">
                    Dengan biaya pendaftaran Rp100.000,00, peserta dapat mengikuti satu kelas.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Apakah panitia menyediakan silabus pembelajaran selama OLC 2019?
                </p>
                <p class="answer">
                    Silabus pembelajaran dapat dilihat di website OLC 2019.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Apakah peserta mendapatkan fasilitas berupa handbook atau e-book atau modul?
                </p>
                <p class="answer">
                    Panitia tidak menyediakan handbook maupun e-book pada saat pelatihan.
                </p>
            </li>
            <li class="faq-list">
                <p class="question">
                    Cashback dalam bentuk apa yang akan diterima peserta OLC 2019?
                </p>
                <p class="answer">
                    Cashback diterima peserta dalam bentuk uang.
                </p>
            </li>
        </ol>
        
    </div>
    </div>
   
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
                strings: ["FAQ"],

                backSpeed: 40,
                typeSpeed: 70,
                startDelay: 200
            });
        });
    </script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

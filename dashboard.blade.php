<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="TemplateFrontend/icon.css">
    <link rel="stylesheet" href="TemplateFrontend/css/bootstrap">
    <link rel="stylesheet" href="TemplateFrontend/css/bootstrap.min">
    <link rel="stylesheet" href="TemplateFrontend/css/bootstrap-grid">
    <link rel="stylesheet" href="TemplateFrontend/css/bootstrap-grid.min">
    <link rel="stylesheet" href="TemplateFrontend/css/bootstrap-reboot">
    <link rel="stylesheet" href="TemplateFrontend/css/bootstrap-reboot.min">
    <link rel="stylesheet" href="TemplateFrontend/css/index.css">

    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js">


    <title>AniDoc</title>     

  </head>
  <body>
    <!-- Navbar -->
<section id="anidoc" class="text-white tm-font-big tm-parallax">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light ">
        <div class="container">
            <div class="next">
                <a class="navbar-brand" href="#anidoc">AniDoc</a>
            </div>

             <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0 fas fa-search" type="submit"></button>
            </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="#anidoc">Home<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Service
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#dokter">Doctor</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#petshop">Pet Shop</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#hewan">Animals</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Contact</a>
                    </li>

                    @guest
                    <li class="nav-item">
                        <a class="btn btn-primary tombol" href="{{ route('login') }}">Login/Register</a>
                    </li>
                    @if (Route::has('register'))
                    @endif
                    @else
                    <li class="nav-item dropdown ">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="nav-link tm-nav-link-dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                            </form>
                        </div>
                    </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>
</section>
<!-- selesai -->

<!-- jumbotron -->
<!-- <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 font-weight-bold">AniDoc</h1><br>
        <p class="lead">Sebuah Website Kesehatan Hewan</p>
    </div>
</div> -->
<!-- slide -->
<section id="gambar" class="jumbo-tron">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="TemplateFrontend/img/people.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">AniDoc</h1><br>
                        <p class="lead">Sebuah Website Kesehatan Hewan</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="TemplateFrontend/img/kr.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">AniDoc</h1><br>
                        <p class="lead">Sebuah Website Kesehatan Hewan</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="TemplateFrontend/img/Animals2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">AniDoc</h1><br>
                        <p class="lead">Sebuah Website Kesehatan Hewan</p>
                </div>
            </div>

            <div class="carousel-caption d-none d-md-block">
        </div>
    </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!-- selesai -->

<!-- about -->
<section id="about" class="deskripsi">
    <div class="container">
        <div class="row mb-2">
            <div class="col text-center">
                <h1>About</h1>
            </div>
        </div>

        <div class="row">
            <div class="col text-justify">
                <p>Anidoc adalah sebuah website kesehatan untuk hewan. Website ini terbentuk karena adanya beberapa kekurangan website untuk hewan. Kedokteran Hewan merupakan bidang ilmu yang hampir sama tuanya dengan kedokteran manusia. Pada awalnya ia merupakan pengembangan dari ilmu kedokteran yang memerlukan perbandingan (comparative medicine) serta memerlukan hewan coba untuk menemukan penyembuhan penyakit manusia. Dalam bahasa Inggris kedokteran hewan disebut sebagai Veterinary Medicine. Kata “Veterinary” berasal dari Yunani kuno yaitu kata veterinarius berarti orang yang memiliki keahlian dalam mengurus hewan-hewan ataupun dari kata veterinarii yaitu yang memiliki kompetensi khusus mengurus hewan sakral. Profesi ini selanjutnya dikenal sebagai Veterinary Profession atau profesi veteriner. Profesi dokter hewan adalah profesi yang berkembang setelah terjadinya proses domestifikasi pada hewan untuk kepentingan manusia. Tidak ada alasan untuk menolak profesi ini meskipun mereka harus menangani anjing dan babi, sebab itu hanyalah sebagian kecil dari kemaslahatan yang jauh lebih besar.
                </p>
            </div>

            <div class="col text-justify">
                <p>Seperti juga kondisi alam dan kehidupan sosial masyarakat Indonesia saat ini yang bergejolak, rupanya dunia kehewanan Indonesia tidak mau ketinggalan. Penyakit demi penyakit menyerbu baik yang hanya menyerang hewan dan merugikan ekonomi peternak hingga yang menular kemanusia bahkan  mematikan seperti Antraks, Rabies, Toksoplasmosis, Bruselosis, dan yang sangat dahsyat adalah Virus Avian Influenza H5N1 (AI). Bagaikan air bah, berita-berita seputar masalah AI menerjang, menebar kegelisahan dan ketakutan kepada masyarakat luas. Berita-berita tersebut juga semakin memojokan dan menggulung peran dokter hewan berulang-ulang seolah-olah tanpa pernah berbuat sesuatu apapun. Silang pendapatpun silih berganti dari pihak yang berkompeten sampai yang tak kompeten turut memberikan pernyataan mengenai AI sehingga semakin memperkeruh suasana, sementara pemecahan yang ditunggu-tunggu masyarakat tak kunjung datang.  Melihat kondisi di atas maka peran dokter hewan sangat penting. Profesi dokter hewan dilandasi oleh hukum dan mempunyai kompetensi (UU No. 18/2009 tentang peternakan dan kesehatan hewan). Salah satu ikrarnya yaitu “ Saya akan memberikan pertimbangan utama untuk kesehatan pasien saya, kepentingan tertinggi si pemilik dan kesejahteraan sesama manusia”. Oleh karena itu setiap orang yang berprofesi sebagai dokter hewan harus  bekerja secara profesional dengan menjalankan dasar hukum dan rambu-rambu etik pada kedokteran hewan. 
                </p>
            </div>
        </div>
    </div>
</section>
<!-- selesai -->

<!-- service -->
<!-- dokter -->
<section id="dokter" class="nama-dokter bg-light pb-3">
    <div class="container">
        <h1 class="text-center">Doctor</h1>
        <div class="row mb-4 pt-3">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="" class="thumbnail">
                    <img src="TemplateFrontend/img/binus.jpg" class="rounded-circle" width="150px">
                </a>
                <h5>name</h5>
                <p>email</p>
            </div>
        </div>
    </div>
    

    <!-- pagination -->

    <nav aria-label="...">
            <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>

            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>

            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
<!-- selesai -->
</section>

<!-- selesai -->

<!-- service -->
<!-- petshop -->

<section id="petshop" class="nama-petshop pb-3">
    <div class="container">
        <h1 class="text-center">Pet Shop</h1>
        <div class="row mb-4 pt-3">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="" class="thumbnail-petshop">
                    <img src="TemplateFrontend/img/binus.jpg" width="150px">
                </a>
                <h5>nama petshop</h5>
                <p>alamat petshop</p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="" class="thumbnail-petshop">
                    <img src="TemplateFrontend/img/binus.jpg" width="150px">
                </a>
                <h5>nama petshop</h5>
                <p>alamat petshop</p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="" class="thumbnail-petshop">
                    <img src="TemplateFrontend/img/binus.jpg" width="150px">
                </a>
                <h5>nama dokter</h5>
                <p>nama petshop</p>
            </div>
        </div>
    </div>  

    <!-- pagination -->

    <nav aria-label="...">
            <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>

            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>

            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
<!-- selesai -->

</section>

<!-- selesai -->

<!-- hewan -->

<!-- Button trigger modal --> 
<!-- card -->
<section id="hewan" class="bg-light pb-4">
    <div class="container">
        <div class="row mb-4 pt-3">
            <div class="col">
                <h1 class="text-center">Animals</h1>
            </div>
        </div>
        
        <div class="row mb-4">
        @foreach ($animals as $data)
            <div class="col-md">
                <div class="card">
                    <img src="{{ 'images/animal/'.$data->animalPhotoName }}" class="card-img-top" alt="Card image cap">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $data->animalType }}">
                        {{ $data->animalName }}
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



<!-- Modal -->
<!-- kucing -->
@foreach ($animals as $data)
    <div class="modal fade" id="{{ $data->animalType }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $data->animalName }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                {{ $data->animalDescription }} {{ $data->animalDescription1 }} {{ $data->animalDescription2 }}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- pagination -->

    <nav aria-label="...">
            <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>

            <li class="page-item " aria-current="page">
                <a class="page-link" href="#">1
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2 
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
<!-- selesai -->
</section>
    <!-- selesai -->

    <!-- Contact Us -->

<section id="kontak" class="tm-section-pad-top tm-parallax-2">
    <div class="container">   
        <div class="row">
            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">Contact Us</h2>
                <p class="mb-5">
                    Send your questions to our Customer Support.
                </p><br>
            </div>
            
            <div class="col-sm-12 col-md-6">
              <form action="{{ route('addMessageUserAdmin') }}" method="post">
              @csrf
                <input id="name" name="messageName" type="text" placeholder="Your Name" class="form-control" required /><br>
                <input id="email" name="messageEmail" type="email" placeholder="Your Email" class="form-control" required /><br>
                <textarea id="message" name="messageText" rows="8" placeholder="Message" class="form-control" required></textarea><br>
                <button type="submit" class="btn tm-btn-submit">Submit</button>
              </form>
            </div>
            
            <div class="col-sm-12 col-md-6"> 
                <div class="contact-item">
                  <a rel="nofollow" href="#" class="item-link">
                      <i class="far fa-2x fa-envelope mr-4"></i>
                      <span class="mb-0">anidoc.indonesia</span>
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="https://goo.gl/maps/xFTKNnHbJe6k39eh7" class="item-link text-justify">
                      <i class="fas fa-2x fa-map-marker-alt mr-4"></i>
                      <span class="mb-0">Jl. Kyai H. Syahdan No.9, RT.6/RW.12, Kemanggisan, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480</span>
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="#" class="item-link">
                      <i class="fas fa-2x fa-phone-square mr-4"></i>
                      <span class="mb-0">+62 8112 2334 4</span>
                  </a>              
                </div>
                <div class="contact-item">&nbsp;</div>
            </div>

            <!-- <div class="col-sm-6 col-md-3"> 
                <div class="contact-item">
                  <a rel="nofollow" href="#" class="item-link">
                      <i class="fab fa-2x fa-facebook-square mr-4"></i>
                      <span class="mb-0">AniDoc Indonesia</span>
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="#" class="item-link">
                      <i class="fab fa-2x fa-instagram-square mr-4"></i>
                      <span class="mb-0">AniDoc Indonesia</span>
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="#" class="item-link">
                      <i class="fab fa-2x fa-twitter-square mr-4"></i>
                      <span class="mb-0">+62 8112 2334 4</span>
                  </a>              
                </div>

                <div class="contact-item">&nbsp;</div>
            </div> -->

        </div>
    </div>

</section>
    <!-- Selesai -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <!-- script js -->
    <script src="TemplateFrontend/js/bootstrap.bundle"></script>
    <script src="TemplateFrontend/js/bootstrap.bundle.min"></script>
    <script src="TemplateFrontend/js/bootstrap"></script>
    <script src="TemplateFrontend/js/bootstrap.min"></script>
    <script src="TemplateFrontend/js/script.js"></script>
    <script src="https://kit.fontawesome.com/7f2ed2a5ac.js" crossorigin="anonymous"></script>

  </body>
</html>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <title>Desa Cipaku</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/blog-home.css" rel="stylesheet">

</head>
<div class="container" style="background-color: #f2f2f2;">

    <body>

        <!-- Navigation -->
        <<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <img src="assets/Lambang.png" width="60" height="60">
                <a class="navbar-brand" href="">

                    <a class="navbar-brand" href="">
                        <p>
                            <h6>DESA CIPAKU</h6>
                            <h6>KABUPATEN PURBALINGGA, JAWA TENGAH
                            </h6>
                        </p>
                    </a>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">

                </div>
            </div>
            </nav>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url() ?>assets/slide1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Selamat Datang di Website Resmi Desa Cipaku</h2>
                            <p></p>
                            <div class='hidden-xs'><a href='#' class='btn btn-success btn-lg' class="left"><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url() ?>assets/slide2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Situs Prasasti Desa Cipaku</h2>
                            <p>Prasasti yang diduga berasal dari abad ke 5 Masehi itu mulai diteliti sejak tahun 1983 dan saat ini sudah ditetapkan menjadi Benda Cagar Budaya oleh Balai Pelestarian Cagar Budaya (BPCB) Jawa Tengah.</p>
                            <div class='hidden-xs'><a href='#' class='btn btn-success btn-lg' class="left"><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url() ?>assets/slide3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Green Sabin Desa Cipaku</h2>
                            <p>Green Sabin adalah wisata yang dikerjakan oleh pihak wisata kolam Owabong yang bertempat di Desa Cipaku</p>
                            <div class='hidden-xs'><a href='#' class='btn btn-success btn-lg' class="left"><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <marquee style="color:#ffffff;" height="20px"><span class="teks" style="color:black;font-family: Oswald; padding-right: 50px;">Selamat Datang di Website Resmi Desa Cipaku , Kecamatan Mrebet Kabupaten Purbalingga. Media komunikasi dan transparansi Pemerintah Desa Cipaku untuk seluruh masyarakat.</span></marquee>
            <!-- Page Content -->

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profil Desa
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Sejarah Desa Cipaku</a>
                                <a class="dropdown-item" href="#">Profil Wilayah Desa</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Data Penduduk</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pemerintahan Desa
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Visi dan Misi</a>
                                <a class="dropdown-item" href="#">Struktur Organisasi</a>
                                <a class="dropdown-item" href="#">Badan Pemerintahan Desa</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PPID
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Struktur</a>
                                <a class="dropdown-item" href="#">Tugas</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Wisata Desa Cipaku
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Green Sabin</a>
                                <a class="dropdown-item" href="#">Petanahan</a>
                                <a class="dropdown-item" href="#">Curug Nini</a>
                                <a class="dropdown-item" href="#">Situs Batu Tulis</a>
                                <a class="dropdown-item" href="#">Curug Cingongah</a>

                            </div>
                        </li>
                        <form class="form-inline">
                            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </ul>

                </div>
            </nav>
            <!-- navigation -->
            <form method="post">
                <textarea id="mytextarea">Hello, World!</textarea>
            </form>
            <br>
            <div class="container">

                <div class="row">

                    <!-- Blog Entries Column -->
                    <div class="col-lg-8">
                        <h5 class="text-center">Berita Terkini</h5>
                        <hr>
                        <div class="card mb-4">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/slide3.png" alt="Card image cap">
                            <div class="card-body">
                                <?php foreach ($berita as $brt) : ?>
                                    <h2 class="card-title"><?php echo $brt->judul ?></h2>
                                    <p>September 7, 2020 by <a href="#">Administrator</a></p>
                                    <p class="card-text" cols="50"><?php echo $brt->isi_berita ?></p>
                                    <a href="#" class="btn btn-primary">Read More &rarr;</a>
                                    <a href="" class="btn btn-warning"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
                                            <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                        </svg></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <h5 class="text-center">Berita Lama</h5>
                        <hr>
                        <!-- Blog Post -->
                        <div class="card mb-4" style="max-width: 730px; max-height:239px;">
                            <div class="row no-gutters">
                                <div class="col-sm-4">
                                    <img src="<?php echo base_url() ?>assets/post.png" class="card-img" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Penduduk Desa</a></h4>
                                        <p>Januari 1, 2020 by <a href="#">Administrator</a></p>
                                        <p class="card-text">Penduduk Desa Cipaku rata - rata mereka adalah pekerja di pabrik rambut dan sebagian dari yang lain adalah petani bahan kebutuhan pokok seperti beras, jagung . . . </p>
                                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4" style="max-width: 730px; max-height:239px;">
                            <div class="row no-gutters">
                                <div class="col-sm-4">
                                    <img src="<?php echo base_url() ?>assets/pos.png" class="card-img" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Situs Batu Tulis</a></h4>
                                        <p>Desember 15, 2019 by <a href="#">Administrator</a></p>
                                        <p class="card-text">Watu Tulis, begitu warga setempat menyebut, kemudian dikenal dengan Prasasti Cipaku itu merupakan salah satu artefak sejarah penting yang ditemukan di Purbalingga.</p>
                                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4" style="max-width: 730px; max-height:239px;">
                            <div class="row no-gutters">
                                <div class="col-sm-4">
                                    <img src="<?php echo base_url() ?>assets/po.png" class="card-img" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Curug Nini</a></h4>
                                        <p>Maret 29, 2019 by <a href="#">Administrator</a></p>
                                        <p class="card-text">Curug Nini adalah salah satu wisata di Purbalingga berdampingan dengan dusun Bataputih dan desa Pagerandong </p>
                                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pagination -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <!-- Sidebar Widgets Column -->
                    <div class="col-md-4">


                        <!-- Categories Widget -->
                        <div class="card my-4">
                            <h5 class="card-header">Kategori</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <a href="#">profil desa</a>
                                            </li>
                                            <li>
                                                <a href="#">wisata</a>
                                            </li>
                                            <li>
                                                <a href="#">sejarah desa</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <a href="#">lokasi</a>
                                            </li>
                                            <li>
                                                <a href="#">greensabin</a>
                                            </li>
                                            <li>
                                                <a href="#">prasasti</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Side Widget -->
                        <div class="card my-4">
                            <h5 class="card-header">Peta Desa</h5>
                            <div class="card-body">
                                <iframe src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15829.424761152139!2d109.31888523589464!3d-7.313823532374262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ff6545f0e80fb%3A0x5027a76e35512e0!2sCipaku%2C%20Mrebet%2C%20Purbalingga%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1597840182807!5m2!1sen!2sid" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                        <div class="card my-4">
                            <h5 class="card-header">Layanan Mandiri</h5>
                            <div class="card-body">
                                Silakan datang atau hubungi operator desa untuk mendapatkan kode PIN anda.
                                <h4>Masukan NIK dan PIN</h4>
                                <form action="#" method="post">
                                    <input name="nik" type="text" placeholder="NIK" style="margin-left:0px" value="" required>
                                    <input name="pin" type="password" placeholder="PIN" style="margin-left:0px" value="" required>
                                    <button type="submit" id="but" style="margin-left:0px">Masuk</button>
                                </form>
                            </div>
                        </div>
                        <div class="card my-4">
                            <h5 class="card-header">Info Sosial Media</h5>
                            <div class="card-body">
                                <a href="https://web.facebook.com" rel="noopener noreferrer" target="_blank">
                                    <img src="https://akah.desa.id/assets/front/fb.png" alt="Facebook" style="width:50px;height:50px;" />
                                </a>
                                <a href="https://www.youtube.com" rel="noopener noreferrer" target="_blank">
                                    <img src="https://akah.desa.id/assets/front/yb.png" alt="YouTube" style="width:50px;height:50px;" />
                                </a>
                            </div>
                        </div>
                        <div class="card my-4">
                            <h5 class="card-header">Data Covid</h5>
                            <div><iframe src='https://widget.kompas.com/corona/statistik' width=100% height=310px></Iframe></div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- /.row -->

</div>
<!-- /.container -->
</div>
<hr>
<div class="container">
    <div class="col-lg-12" align="center" style="font-family: Oswald;">
        <h2>Statistik Desa</h2>
    </div>
    <hr>
    <div class="row">
        <div class="col-md"><a href="https://akah.desa.id/first/wilayah"><img alt="Statistik Wilayah" width="100%" src="https://akah.desa.id/desa/themes/natra/images/statistik_wil.png" /></a></div>
        <div class="col-md"><a href="https://akah.desa.id/first/statistik/0"><img alt="Statistik Pendidikan" width="100%" src="https://akah.desa.id/desa/themes/natra/images/statistik_pend.png" /></a></div>
        <div class="col-md"><a href="https://akah.desa.id/first/statistik/1"><img alt="Statistik Pekerjaan" width="100%" src="https://akah.desa.id/desa/themes/natra/images/statistik_pekerjaan.png" /></a></div>
        <div class="col-md"><a href="https://akah.desa.id/first/statistik/3"><img alt="Statistik Agama" width="100%" src="https://akah.desa.id/desa/themes/natra/images/statistik_agama.png" /></a></div>
        <div class="col-md"><a href="https://akah.desa.id/first/statistik/4"><img alt="Statistik Jenis Kelamin" width="100%" src="https://akah.desa.id/desa/themes/natra/images/statistik_kelamin.png" /></a></div>
    </div>
</div><br>
<!-- Footer -->
<footer class="py-2 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Content by ® Desa Cipaku Kec. Mrebet, Kab. Purbalingga</p>
        <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>


</html>
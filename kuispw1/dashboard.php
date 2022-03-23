<?php 
    session_start();

    // Checking ID user and session status
    if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
        if (!isset($_SESSION['status']) && empty($_SESSION['status'])) {
            header("location:login.php");
        }
    }

    include 'session_limit.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Page Title -->
        <title>Kuis Pemrograman Web</title>

        <!-- Include head assets -->
        <?php include('meta/head.php'); ?>
    </head>
    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="78">
        <!-- Include navbar component -->
        <?php include('components/navbar.php'); ?>

        <!-- Main Content -->
        <div class="main">
            <div class="content home-section" id="section-home">
                <div class="container">
                    <div class="row">
                        <div class="foto col-lg-6">
                            <img class="mx-auto d-block" src="src/custom/img/header.png" alt="">
                        </div>
                        <div class="data col-lg-6">
                            <h1>Welcome To,</h1>
                            <h2>My Web Profile</h2>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna 
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <button type="button" class="btn btn-primary"><a href="about.php">Yuk Kenalan!</a></button>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="about-section" id="section-about">
                <div class="container">
                    <div class="row">
                        <div class="foto col-lg-6">
                            <img class="fotoku" src="src/custom/img/foto.png" alt="">
                        </div>

                        <div class="data col-lg-6">
                            <div class="card">
                                <div class="isi">
                                    <div class="container-fluid">
                                        <div class="card-body">
                                            <h1>Halo Saya Robbi,</h1>
                                            <h2>Mahasiswa Filkom UB</h2>
                                            <hr />
                                            <p>Nama             : Robbi Meidyansyah Pratama</p>
                                            <p>Umur             : 22 Tahun</p>
                                            <p>Tanggal Lahir    : 13 Mei 1999</p>
                                            <p>Email            : robbimeidyansyah@gmail.com</p>
                                            <p>Phone            : 081234567890</p>
                                            <a href=""><i class="fa fa-instagram" style="font-size:24px"></i> robbiimp&ensp;</a>
                                            <a href=""><i class="fa fa-twitter" style="font-size:24px"></i> walahbor</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hobby-section" id="section-hobby">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="caption" >
                                <h1>MY HOBBIES</h1>
                                <p>Sedikit Hobi Saya</p>
                                <div class="border"></div>
                            </div>

                            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                </div>
                                    
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carousel-caption">
                                            <h3>Musik</h3>
                                            <p>Bermain musik terutama piano dan gitar bisa menaikan mood dan imun</p>
                                        </div>
                                        <img src="src/custom/img/musik.jpg" class="d-block">
                                    </div>

                                    <div class="carousel-item">
                                        <div class="carousel-caption">
                                            <h3>Olahraga</h3>
                                            <p>Bermain basket hobi yang paling saya tekuni, olahraga selalu agar sehat</p>
                                        </div>
                                        <img src="src/custom/img/basketball.jpg" class="d-block">
                                    </div>

                                    <div class="carousel-item">
                                        <div class="carousel-caption">
                                            <h3>UI Design</h3>
                                            <p>Membuat UI Design sangat seru dan memacu berpikir kreatif</p>
                                        </div>
                                        <img src="src/custom/img/uidesign.jpg" class="d-block">
                                    </div>
                                </div>
                                    
                                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="portfav-section" id="section-porto">
                <div class="container">
                    <div class="row">

                        <div class="caption">
                            <h1>MY PORTOFOLIO</h1>
                            <p>Portofolio Design UI</p>
                            <div class="border"></div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card" style="width:400px">
                                <img class="card-img-top" src="src/custom/img/school.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Template UI School</h4>
                                    <p class="card-text">Template design website untuk website profile sekolah</p>
                                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card" style="width:400px">
                                <img class="card-img-top" src="src/custom/img/makanan.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Template UI Makanan</h4>
                                    <p class="card-text">Template design website untuk website restaurant atau bisnis makanan</p>
                                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card" style="width:400px">
                                <img class="card-img-top" src="src/custom/img/kadin.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Template UI KADIN</h4>
                                    <p class="card-text">Template design website untuk website Kamar Dagang dan Industri</p>
                                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br><br><br><br>

            <div class="portfav-section" id="section-place">
                <div class="container">
                    <div class="row">

                        <div id="scrollspyHeading5" class="caption">
                            <h1>MY FAVORITE PLACE</h1>
                            <p>Beberapa Tempat Favorit Saya</p>
                            <div class="border"></div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card" style="width:400px">
                                <img class="card-img-top" src="src/custom/img/watugupit.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Paralayang Watugupit Jogjakarta</h4>
                                    <p class="card-text">Tempat favorit dengan view sepanjang pantai dari atas bukit di Jogjakarta</p>
                                    <a href="https://goo.gl/maps/UY5LFtzdY3zha2xE7" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card" style="width:400px">
                                <img class="card-img-top" src="src/custom/img/gunungbanyak.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Taman Langit Kota Batu</h4>
                                    <p class="card-text">Tempat favorit dengan view Kota Batu dari atas bukit di Kota Batu Malang</p>
                                    <a href="https://goo.gl/maps/X4u6oCAXqzyVKpYa7" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card" style="width:400px">
                                <img class="card-img-top" src="src/custom/img/sendiki.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Pantai Sendiki Kab. Malang</h4>
                                    <p class="card-text">Pantai dengan pasir putih dan air lautnya yang biru menjadi daya tarik tersendiri</p>
                                    <a href="https://goo.gl/maps/vDGSfYHwr11j5N8cA" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <br><br><br><br>
            </div>
        </div>
           

        <button class="px-2 pt-2 pb-1 btn-top" id="btn_top" title="Go to top"><i class="bx bx-chevron-up text-white fs-3"></i></button>
        
        <!-- Include body assets -->
        <?php include('meta/body.php'); ?>
        <!-- <script>
            $(document).ready(function(){
                $('body').scrollspy({target: ".navbar", offset: 56});   
            });
        </script> -->

        <script src="src/custom/js/main.js"></script>
    </body>
</html>
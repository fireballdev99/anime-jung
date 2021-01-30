<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
       <!-- Icon -->
       <?php include_once('includes/icon.php') ?>
    <title>Anime-Jung-ดูการ์ตูน ดูอนิเมะออนไลน์</title>
</head>

<body>

    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>
    <!-- Headder Img Banner -->
    <?php include_once('includes/banner.php') ?>

    <!-- Panel -->
    <div class="container">

        <div class="row">
            <!-- แถวซ้าย -->
            <div class="col-md-9">
                <div class="panel-custom">
                    <h3>
                        อนิเมะอัพเดตล่าสุด
                        <a class="jung-pill" href="index.php"><span class="badge  badge-success">ดูอนิเมะทั้งหมด</span></a>
                    </h3>
                </div>

                <div class="bg-alpha p-3">
                    <!-- Show list -->
                    <div class="row">
                        <section class="col-xs-6 col-sm-4 col-md-3 jung-show-list">
                            <div class="card card-border card-poster">
                                <a href="anime.php" class="wrapper-card-img">
                                    <span class="badge jung-pill-badge badge-danger label">ยังไม่จบ</span>
                                    <img src="https://i.ebayimg.com/images/g/zn4AAOSwRINdhlhz/s-l1600.jpg" class="posterjung" alt="">
                                </a>
                                <p class="card-text"><a href="anime.php">Boruto: Naruto Next Generations โบรูโตะ
                                        ตอนที่ 1-182 ซับไทย ยังไม่จบ
                                    </a>
                                </p>
                            </div>
                        </section>
                        <section class="col-xs-6 col-sm-4 col-md-3 jung-show-list">
                            <div class="card card-border card-poster">
                                <a href="blog-detail.php?id=0001" class="wrapper-card-img">
                                    <span class="badge jung-pill-badge badge-success label">จบแล้ว</span>
                                    <img src="https://animekimi.com/wp-content/uploads/2020/01/wrCVHdkBlBWdJUZPvnJWcBRuhSY-185x278.jpg" class="posterjung" alt="">
                                </a>
                                <p class="card-text"><a href="#">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 1-26 ซับไทย
                                        จบแล้ว</a>
                                </p>
                            </div>
                        </section>
                        <section class="col-xs-6 col-sm-4 col-md-3 jung-show-list">
                            <div class="card card-border card-poster">
                                <a href="blog-detail.php?id=0001" class="wrapper-card-img">
                                    <span class="badge jung-pill-badge badge-success label">จบแล้ว</span>
                                    <img src="https://animekimi.com/wp-content/uploads/2020/01/xiV695sPlizxNmydomcfbmLDXfA-185x278.jpg" class="posterjung" alt="">
                                </a>
                                <p class="card-text"><a href="#">Plunderer พลันเดอเรอร์ จอมโจรคนเหนือเลข ตอนที่ 1-24
                                        ซับไทย จบแล้ว</a>
                                </p>
                            </div>
                        </section>
                        <section class="col-xs-6 col-sm-4 col-md-3 jung-show-list">
                            <div class="card card-border card-poster">
                                <a href="blog-detail.php?id=0001" class="wrapper-card-img">
                                    <img src="https://www.anime-sugoi.com/upload/3041248c25ee67acfae49ad855454ac6.jpg" class="posterjung" alt="Nate Diaz">
                                </a>
                                <p class="card-text"><a href="#">ชื่ออนิเมะ</a>
                                </p>
                            </div>
                        </section>
                        <section class="col-xs-6 col-sm-4 col-md-3 jung-show-list">
                            <div class="card card-border card-poster">
                                <a href="blog-detail.php?id=0001" class="wrapper-card-img">
                                    <img src="https://www.anime-sugoi.com/upload/3041248c25ee67acfae49ad855454ac6.jpg" class="posterjung" alt="Nate Diaz">
                                </a>
                                <p class="card-text"><a href="#">ชื่ออนิเมะ</a>
                                </p>
                            </div>
                        </section>
                        <section class="col-xs-6 col-sm-4 col-md-3 jung-show-list">
                            <div class="card card-border card-poster">
                                <a href="blog-detail.php?id=0001" class="wrapper-card-img">
                                    <img src="https://www.anime-sugoi.com/upload/3041248c25ee67acfae49ad855454ac6.jpg" class="posterjung" alt="Nate Diaz">
                                </a>
                                <p class="card-text"><a href="#">ชื่ออนิเมะ</a>
                                </p>
                            </div>
                        </section>
                        <section class="col-xs-6 col-sm-4 col-md-3 jung-show-list">
                            <div class="card card-border card-poster">
                                <a href="blog-detail.php?id=0001" class="wrapper-card-img">
                                    <img src="https://www.anime-sugoi.com/upload/3041248c25ee67acfae49ad855454ac6.jpg" class="posterjung" alt="Nate Diaz">
                                </a>
                                <p class="card-text"><a href="#">ชื่ออนิเมะ</a>
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- แถวขวา -->
            <div class="col-md-3">

                <h3 class="panel-custom">
                    ประเภท
                </h3>
                <div class="right-side p-3 bg-alpha">

                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Action | ต่อสู้</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Adventure| ผจญภัย</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Car | รถ</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Comedy | ตลก</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Demons | ปีศาจ</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Drama | ดราม่า</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Ecchi | ทะลึ่ง</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Fantasy | แฟนตาซี</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Game | เกม</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Harem | ฮาเร็ม</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Horor| สยองขวัญ</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Magic | เวทย์มนต์</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">School | โรงเรียน</a>
                    </p>
                    <hr class="hrright-side">
                    <p>
                        <i class="fas fa-caret-right text-white"></i>
                        <a href="">Romantic | โรแมนติก</a>
                    </p>
                    <hr class="hrright-side">

                </div>
            </div>
        </div>
    </div>


    <!-- to-top -->
    <?php include_once('includes/to-top.php') ?>
    <!-- Footer -->
    <?php include_once('includes/footer.php') ?>

    <!-- Script -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
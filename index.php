<?php 
require_once('php/connect.php');

$sql = "SELECT * FROM `anime`";
$result = $conn->query($sql) or die($conn->error);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- COMMON TAGS -->
    <title>Anime-Jung ดูการ์ตูน ดูอนิเมะออนไลน์ HD BD</title>
    <!-- Search Engine -->
    <meta name="image" content="https://i.imgur.com/Ibq95JD.png">
    <meta name="keywords" content="ดูการ์ตูน,ดูอนิเมะ,ดูเมะ,ซับไทย,พากย์ไทย,เดอะมูฟวี่,Anime,Subthai,Themovie">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Anime-Jung ดูการ์ตูน ดูอนิเมะออนไลน์ HD BD">
    <meta itemprop="image" content="https://i.imgur.com/Ibq95JD.png">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Anime-Jung ดูการ์ตูน ดูอนิเมะออนไลน์ HD BD">
    <meta name="og:image" content="https://i.imgur.com/Ibq95JD.png">
    <meta name="og:url" content="https://anime-jung.com">
    <meta name="og:site_name" content="https://anime-jung.com">
    <meta name="og:type" content="website">
    <!-- SEO -->
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Anime-Jung">

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Icon -->
    <?php include_once('includes/icon.php') ?>
    
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
                    <?php while($row=$result->fetch_assoc()) { ?>
                        <section class="col-xs-6 col-sm-4 col-md-3 jung-show-list">
                            <div class="card card-border card-poster">
                                <a href="anime.php?id=<?php echo $row['id']?>" class="wrapper-card-img">
                                    <span class="badge jung-pill-badge badge-danger label">ยังไม่จบ</span>
                                    <img src="<?php echo $row['poster']?>" class="posterjung" alt="">
                                </a>
                                <p class="card-text"><a href="anime.php?id=<?php echo $row['id']?>"><?php echo $row['title']?>
                                    </a>
                                </p>
                            </div>
                        </section>
                        <?php } ?>
                   
                    </div>
                </div>
            </div>
            <!-- แถวขวา -->
            <?php include_once('includes/right-side.php') ?>
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
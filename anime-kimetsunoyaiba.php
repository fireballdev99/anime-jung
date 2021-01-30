<?php 
require_once('php/connect.php');
$sql ="SELECT * FROM `anime` WHERE id = '".$_GET['id']."' ";
$result = $conn -> query($sql) or die ($conn->error);

if($result->num_rows> 0 ){
    $row= $result -> fetch_assoc();
}else{
    echo"ไม่มีข้อมูล";
}

?>
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
    <title><?php echo $row['title']?></title>
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
                    Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 1-26 ซับไทย
                        <a class="jung-pill" href="index.php"><span class="badge  badge-success">ดูอนิเมะทั้งหมด</span></a>
                    </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://anime-jung.coml"><i class="fas fa-home"></i>
                                    หน้าหลัก</a>
                            </li>
                            <li class="breadcrumb-item"><a href="https://anime-jung.com">อนิเมะทั้งหมด</a></li>
                            <li class="breadcrumb-item"><a href="anime.php"> Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 1-26 ซับไทย</a></li>
                        </ol>
                    </nav>
                </div>


                <div class="bg-alpha p-3">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <img class="mb-3 poster-content" src="https://i.pinimg.com/originals/e2/dc/7c/e2dc7ce88a5e14559fb3f81b4d1d77c2.jpg" alt="ดาบพิฆาตอสูร">
                            </div>
                        </div>
                        <hr class="hr-content">
                        <div class="p-3">
                            <h3>เรื่องย่อ</h3>
                            <p>
                            เรื่องราวในยุคไทโช (1912-1926) ทันจิโร่เด็กหนุ่มขายถ่านที่แสนอ่อนโยน วันหนึ่งครอบครัวของเขาถูกอสูรฆ่าตาย ส่วนเนซึโกะ น้องสาวของเขาก็โดนเปลี่ยนเป็นอสูร ในตอนนั้นเองนักล่าอสูรนามว่า "โทมิโอกะ งิยู" ก็ได้ปรากฏตัวขึ้นและคิดจะกำจัดเนซึโกะ ทว่าเขาก็ต้องประหลาดใจที่เนซึโกะกับทันจิโร่กลับปกป้องกันและกัน ยิ่งได้เห็นฝีมือการต่อสู้ของทันจิโร่ทำให้ งิยูตัดสินใจส่งตัวพวกเขาไปให้สหายเก่าแก่ของตนเองช่วยฝึกฝนให้ นั่นจึงเป็นจุดเริ่มต้นการเป็นนักล่าอสูรของทันจิโร่ เพื่อช่วยน้องสาวให้กลับมาเป็นมนุษย์อีกครั้งและเพื่อตามล่าอสูรที่ฆ่าครอบครัวของเขา...
                            </p>
                        </div>
                        <hr class="hr-content">

                        <div class="panel-custom">
                        <h4>Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 1-26 ซับไทย</h4>
                        </div>
                        <div class="p-4 episode-bg text-center">
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 1</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 2</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 3</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 4</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 5</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 6</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 7</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 8</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 9</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 10</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 11</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 12</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 13</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 14</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 15</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 16</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 17</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 18</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 19</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 20</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 21</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 22</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 23</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 24</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 25</a>
                        </p>
                        <p>
                            <a href="">Kimetsu no Yaiba ดาบพิฆาตอสูร ตอนที่ 26</a>
                        </p>

                        </div>
                    </div>
                </div>

            </div>
            <hr>
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
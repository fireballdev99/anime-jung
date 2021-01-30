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
    <?php include_once('includes/left-panel.php') ?>
    

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
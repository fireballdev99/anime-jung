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
<div class="container">
    <div class="row">
        <!-- แถวซ้าย -->
        <div class="col-md-9">
            <div class="panel-custom">
                <h3>
                <?php echo $row['title']?>
                    <a class="jung-pill" href="index.php"><span class="badge  badge-success">ดูอนิเมะทั้งหมด</span></a>
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://anime-jung.coml"><i class="fas fa-home"></i>
                                หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item"><a href="https://anime-jung.com">อนิเมะทั้งหมด</a></li>
                        <li class="breadcrumb-item"><a href="anime.php"><?php echo $row['title']?></a></li>
                    </ol>
                </nav>
            </div>
        

            <div class="bg-alpha p-3">
                <div class="content">
                    <div class="row">
                        <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <img class="mb-3 poster-content"
                                src="<?php echo $row['poster']?>"
                                alt="Boruto">
                            </div>
                        </div>
                        <hr class="hr-content">
                        <div class="p-3">
                            <h3>เรื่องย่อ</h3>
                            <p><?php echo $row['detail']?></p>
                        </div>
                        <hr class="hr-content">

                        <div class="panel-custom">
                            <h4><?php echo $row['title']?></h4>
                        </div>
                        <div class="p-4 episode-bg text-center">
                            <p>
                                <a href="">Boruto 181 ซับไทย</a>
                            </p>
                        </div>

                        





                    </div>
                </div>
            </div>  
                 <!-- แถวขวา -->
                 <?php include_once('includes/right-side.php') ?>  
        </div>    
         
    </div>        

</div>
            
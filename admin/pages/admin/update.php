<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Updating!")</script>'; 
    // header('Refresh:0; url=index.php');
    if(isset($_POST['submit'])){

       $sql = "UPDATE `admin` 
       SET  `nickname` = '".$_POST['nickname']."', 
            `status` = '".$_POST['status']."', 
            `last_login` = '".date("y/m/d h:i:s")."',
            `update_at` = '".date("y/m/d h:i:s")."',
            `create_at` = '".date("y/m/d h:i:s")."' 
       WHERE `id` = '".$_POST['id']."';";
    $result = $conn -> query($sql);
    if($result){
        echo '<script> alert("Finished Updating!")</script>'; 
        header('Refresh:0; url=index.php');
    }else{
        echo '<script> alert("Updating Error!")</script>'; 
        header('Refresh:0; url=index.php');
    }


    }else{
        header('Refresh:0; url=index.php');
    }

?>
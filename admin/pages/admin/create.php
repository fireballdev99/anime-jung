<?php include_once('../authen.php') ?>
<?php
    if (isset($_POST['submit'])){
        $sql_check_user = "SELECT * FROM `admin` WHERE `username` = '".$_POST['username']."'";
        $check_user = $conn->query($sql_check_user) or die ($conn->error);
        if(!$check_user->num_rows){
            $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sql = "INSERT INTO `admin` (`username`, `password`, `nickname`, `status`, `last_login`, `update_at`, `create_at`) 
                        VALUES ('".$_POST['username']."',
                                 '".$hashed."', 
                                 '".$_POST['nickname']."', 
                                 '".$_POST['status']."', 
                                 '".date("y/m/d h:i:s")."', 
                                 '".date("y/m/d h:i:s")."', 
                                 '".date("y/m/d h:i:s")."');";
            $result = $conn->query($sql);
            if($result){
                echo '<script> alert("เพิ่ม Admin สำเร็จ!")</script>'; 
                header('Refresh:0; url=index.php');
            }
            else{
                echo '<script> alert("เพิ่ม Admin ไม่สำเร็จ!")</script>'; 
                header('Refresh:0; url=index.php');
            }
        }else{
            echo "<script type='text/javascript'>alert('Username is already exist');</script>";
            header('Refresh:0;url=index.php');
        }
        
    }else{
        header('Refresh:0;url=index.php');
    }
?>
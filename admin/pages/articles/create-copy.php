<?php include_once('../authen.php') ?>
<?php

    // $conn = new PDO("mysql:host=localhost;dbname=animejung","root","");
    // function fill_unit_select_box($conn)
    // {
    //   $output = '';
    //   $query = "SELECT * FROM episode"
    // }
    // $data = array(
    //   ':anime_id' => $_POST['anime_id'],
    //   ':episode_name' => $_POST['episode_name'],
    //   ':part' => $_POST['part'],
    //   ':linkplayer' => $_POST['linkplayer']

    // );

    $query = "
        INSERT INTO episode(anime_id,episode_name,part,linkplayer) VALUES (:anime_id,:episode_name,:part,:linkplayer)
    ";

    $statement = $conn->prepare($query);

    if($statement->execute($data)){
      $output = array(
        ':anime_id' => $_POST['anime_id'],
        ':episode_name' => $_POST['episode_name'],
        ':part' => $_POST['part'],
        ':linkplayer' => $_POST['linkplayer']
      );
      echo json_encode($output);
    }
    //     error_reporting(0);
         $conn = mysqli_connect("localhost","root","","animejung");
         if(isset($_GET['save'])){
          $episode_name = $_GET['episode_name'];
          $anime_id = $_GET['anime_id'];
        }
    //      if(isset($_POST['save'])){
    //        $anime_id = $_POST['anime_id'];
    //        $episode_name = $_POST['episode_name'];
    //        $part = $_POST['part'];
    //        $linkplayer = $_POST['linkplayer'];
           
           
    //        foreach ($anime_id as $key => $value){
    //          $save = "INSERT INTO episode(anime_id,episode_name,part,linkplayer)VALUES('".$value."','".$episode_name[$key]."','".$part[$key]."','".$linkplayer[$key]."')";
    //          $query = mysqli_query($conn,$save);
    //        }
    //      }

         
    //     //  print_r($_POST);
    // echo '<script> alert("Finished Creating!")</script>'; 
    // header('Refresh:0; url=form-create.php');
    // // header('Refresh:0; url=index.php');
?>
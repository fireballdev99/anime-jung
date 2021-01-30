<?php
require_once('connect.php');
//INSERT INTO `anime` (`id`, `name`, `category`, `genre`, `status`) VALUES (NULL, 'Boruto', 'Action', 'ซับไทย', '0');

$name = "Testdelete";
$category = "Action";
$genre = "ซับไทย";
$status = 1;

$sql = "INSERT INTO `anime` (`name`, `category`, `genre`, `status`) 
        VALUES ('" . $name . "', '" . $category . "', '" . $genre . "', '" . $status . "')";

$result = $conn->query($sql);

if ($result) {
    echo "สำเร็จ";
} else {
    echo "ไม่สำเร็จ";
}

<?php
require_once("connect.php");

$sql = "SELECT * FROM `anime`";
$result = $conn->query($sql) or die($conn->error);

// $row = $result->fetch_assoc();
// echo '<pre>', print_r($row), '</pre>';
// echo $row['name'];


if ($result->num_row > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['name'] . ' / ';
        echo $row['category'] . ' / ';
        echo $row['genre'] . ' / ';
        if ($row['status'] == 0) {
            echo "ยังไม่จบ" . '<br>';
        } else {
            echo "จบแล้ว" . '<br>';
        }
    }
} else {
    echo "ไม่มีข้อมูล";
}

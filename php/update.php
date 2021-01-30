<?php
require_once("connect.php");

$id = $_GET['id'];
$status = 1;

if (isset($id)) {
    $sql = "UPDATE `anime` SET `status` = '" . $status . "' WHERE `anime`.`id` = '" . $id . "'";
    $result = $conn->query($sql);

    if ($result) {
        echo "สำเร็จ";
    } else {
        echo "ผิดพลาด";
    }
} else {
    echo "ไม่มีข้อมูล UPDATE";
}

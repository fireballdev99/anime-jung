<?php
require_once("connect.php");

$id = $_GET['id'];


if (isset($id)) {

    $sql = "DELETE FROM `anime` WHERE `anime`.`id` = '" . $id . "'";
    $result = $conn->query($sql);

    if ($conn->affected_rows) {
        echo "สำเร็จ";
    } else {
        echo "ไม่มีข้อมูลให้ลบ";
    }
} else {
    echo "ไม่ได้กำหนดIDใน url";
}

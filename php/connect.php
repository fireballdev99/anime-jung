<?php


error_reporting(0);
// เชื่อม dbms
$conn = new mysqli('localhost', 'root', '', 'animejung');
$conn->set_charset('utf8');
// echo $conn->connect_error;
// echo $conn->connect_errno;


if ($conn->connect_errno) {
    echo "Connect Error" . $conn->connect_erro;
    exit();
}

// ตั้ง Timezone
    date_default_timezone_set('Asia/Bangkok');

<?php
ob_start();
require("db.php");
session_start();
$uid = $_SESSION['uid'];
$name = $_SESSION['name'];
$balance = $_SESSION['balance'];

$sql = "SELECT * FROM users WHERE uid = '$uid'";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_all($result, MYSQLI_ASSOC);
$card  = $user['0']['card'];

if ($card) {
    echo('success');
}else{
    echo('error');
}
exit();
<?php 
ob_start();
require("db.php");
session_start();
if (isset($_SESSION['uid'])) {
   echo "success";
}else{
    echo "error";
    exit();
}
$uid = $_SESSION['uid'];
$now = date("d-m-Y h:i:s a");
$sql = "UPDATE users SET lastseen ='$now', online= true WHERE uid = '$uid'";
mysqli_query($conn, $sql);
?>
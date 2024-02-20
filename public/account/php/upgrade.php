<?php
ob_start();
require("db.php");
require("../../mail.php");
session_start();

$date = date("F j, Y, g:i a");

$uid = $_SESSION['uid'];
$name = $_SESSION['name'];
$id = uniqid();
$sql = "INSERT INTO upgrade(uid, name, date) VALUES('$uid','$name', '$date')";
 
if (mysqli_query($conn, $sql)) {
    $admmail = "$name has requested an account upgrade";
    
    # send Mail to admin
    echo json_encode([
        "status"=>"success",
        
      ]);
      sendmail($admmail, "team@dmgblockchain-invt.com", $name, "Upgrade Request");
}
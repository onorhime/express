<?php
ob_start();
require("db.php");
session_start();
$uid = $_SESSION['uid'];
$name = $_POST['name'];
$image = $_POST['image'];
$id = $_POST['id'];
$date = date("l jS \of F Y");


$url = getUrl($image);

$sql =  "INSERT INTO kyc(uid, name, url, idn, date) VALUES('$uid','$name','$url', '$id','$date')";
if (mysqli_query($conn, $sql)) {
    $sql = "UPDATE users SET kyc = true WHERE uid ='$uid'";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO notifications(amount, type, date, uid, message) VALUES('0.00','kyc','$date', '$uid', ' KYC verification is Complete')";
    mysqli_query($conn, $sql);

    echo 'success';
}else{
    echo 'error';
}
exit();





function getUrl($image){
    $uploadpath   = 'uploads/images/';
    $parts        = explode(";base64,", $image);
    $imageparts   = explode("image/", @$parts[0]);
    $imagetype    = $imageparts[1];
    $imagebase64  = base64_decode($parts[1]);
    $file         = $uploadpath . uniqid() . '.png';
    file_put_contents($file, $imagebase64);
    return $file;
  }

?>
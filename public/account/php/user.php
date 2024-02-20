<?php
ob_start();
require("db.php");
session_start();

$uid = $_SESSION['uid'];

if (isset($_POST['request']) && $_POST['request'] == 'update') {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $home = $_POST['home'];

    $sql = "UPDATE users SET email='$email', name='$name', country='$country', state='$state', home='$home' WHERE uid = '$uid'";
    if(mysqli_query($conn, $sql)){
        echo 'success';
        
    }
    exit();
}
<?php
require('db.php');

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($users as $user){
    echo('{ name : "'.$user['name'].'", email : "'.$user['email'].'" }, <br>');
}
?>
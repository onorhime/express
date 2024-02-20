<?php
ob_start();
require("db.php");
session_start();

$query = 'SELECT * FROM users';
$result = mysqli_query($conn, $query);

foreach($result as $user){
    // date from the database
    $dbLastActivity = date("d-m-Y h:i:s a", strtotime($user['lastseen']));
    // date now
    $now = date("d-m-Y h:i:s a");

    // calculate the difference
    $difference = strtotime($now) - strtotime($dbLastActivity);
    $difference_in_minutes = $difference / 60;
    

    // check if difference is greater than five minutes
    if($difference_in_minutes < 5){
        // set online status
        $updateStatus = 'UPDATE users SET online= true WHERE uid="'.$user['uid'].'"';
    } else {
        // set offline status
        $updateStatus = 'UPDATE users SET online= false WHERE uid="'.$user['uid'].'"';
    }

    // check if mysqli query was successful
    if (!$conn->query($updateStatus)){
        printf("Error Message %s\n", $mysqli->error);
    }
}

?>
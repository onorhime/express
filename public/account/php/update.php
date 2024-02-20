<?php
ob_start();
require("db.php");

require("../../mail.php");
session_start();


if(!isset($_SESSION['uid'])){
    echo "error";
    exit;
}
$uid = $_SESSION['uid'];

    

if (isset($_FILES['imagefile'])) {
    $imageName = $_FILES['imagefile']['name'];
    $imageSize = $_FILES['imagefile']['size'];
    $imageTmpName = $_FILES['imagefile']['tmp_name'];
    $imageError = $_FILES['imagefile']['error'];

    if ($imageError === 0) {

        
        $imageEx = pathinfo($imageName, PATHINFO_EXTENSION);
        $newImage = uniqid('IMG-', true).'.'.strtolower($imageEx);
        $uploadpath   = 'uploads/images/'.$newImage;
        if (move_uploaded_file($imageTmpName, $uploadpath)) {
            $sql = "UPDATE users SET image = '$uploadpath' WHERE uid = '$uid'";
            mysqli_query($conn, $sql);
            echo json_encode([
                "status"=>"success",
                
              ]);
        }
        # code...
    }else{
        echo json_encode([
            "status"=>"error",
            
          ]);
    }
}

?>
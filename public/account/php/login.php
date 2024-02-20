<?php
ob_start();
require("db.php");
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)>0){
        //echo json_encode('A user with this email is already registered') ;
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if ($user['0']['password'] == $password) {
          $_SESSION['name'] = $user['0']['name'];
          $_SESSION['uid'] = $user['0']['uid'];
          $_SESSION['email'] = $user['0']['email'];
          $_SESSION['accno'] = $user['0']['accountid'];
          $_SESSION['balance'] = $user['0']['balance'];
          echo json_encode([
            'status' => 'success',
            'message' => 'Login Successful'
        ]) ;

        }else {
          
            echo json_encode([
                'status' => 'error',
                'message' => 'Invalid Password'
            ]) ;
    # code...
        }

      
       
      }else{
        echo json_encode([
            'status' => 'error',
            'message' => 'This Email does not exist on this server'
        ]) ;

      }
      

 

exit;
 
?>
<?php
ob_start();
require("db.php");
session_start();

$uid = $_SESSION['uid'];

if (!isset($_GET['id'])) {
    echo 'false';
    exit();
}
$id = $_GET['id'];
$sql = "SELECT * FROM transactions WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$trans = mysqli_fetch_all($result, MYSQLI_ASSOC);
$tran = $trans['0'];

$output = '';
if ($tran['type']== 'deposit') {
        $output .= '
        <div class="table-responsive">
    <table class="table table-striped table-hover no-margin">
      <tbody>
       
        <tr>
          <td>Amount</td>
          <td><a href="#">$ '.number_format($tran['amount']).'</a></td>
        </tr>
        <tr>
          <td>Hash</td>
          <td>'.$tran['tid'].'</td>
        </tr>
        <tr>
          <td>Date</td>
          <td><a href="#">'.$tran['date'].'</a></td>
        </tr>
        <tr>
          <td>Gateway</td>
          <td><a href="#">'.$tran['method'].'</a></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><a href="#">'.$tran['status'].'</a></td>
        </tr>
        <tr>
          <td>Type</td>
          <td><a href="#">'.$tran['type'].'</a></td>
        </tr>
      </tbody>
    </table>
</div>
    ';
}else{
    $output .= '
    <div class="table-responsive">
    <table class="table table-striped table-hover no-margin">
      <tbody>
        <tr>
          <td>Address</td>
          <td>'.$tran['address'].'</td>
        </tr>
        <tr>
          <td>Amount</td>
          <td><a href="#">$ '.number_format($tran['amount']).'</a></td>
        </tr>
        <tr>
          <td>Hash</td>
          <td>'.$tran['tid'].'</td>
        </tr>
        <tr>
          <td>Date</td>
          <td><a href="#">'.$tran['date'].'</a></td>
        </tr>
        <tr>
          <td>Gateway</td>
          <td><a href="#">'.$tran['method'].'</a></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><a href="#">'.$tran['status'].'</a></td>
        </tr>
        <tr>
          <td>Type</td>
          <td><a href="#">'.$tran['type'].'</a></td>
        </tr>
      </tbody>
    </table>
</div>
    ';
}

echo ($output); 
?>
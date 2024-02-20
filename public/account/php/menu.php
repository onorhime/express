<?php 
ob_start();
require("db.php");
session_start();

$uid = $_SESSION['uid'];



if (isset($_GET['request']) && $_GET['request'] == 'trans') {
    $sql = "SELECT * FROM transactions WHERE uid = '$uid' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    $trans = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $trasactions = '';
    if (sizeof($trans) < 1) {
      $trasactions .= '
      <div class=" center" style="height: 250px;text-align: center;">
         <p style="text-align: center;">no transaction found</p>
      </div>';
      echo $trasactions;
      exit();
   }

   foreach ($trans as $tra) {
      $status = "";
      switch ($tra['status']) {
         case 'pending':
            $status = "label-warning";
            break;
         case 'cancelled':
            $status = "label-danger";
            break;
         
         default:
            $status = "label-success";
            break;
      }
        
      $trasactions .=  '
      <tr>
      <a href="transactionsdetail.html?id='.$tra['id'].'">
					  <td>
						<a href="transactionsdetail.html?id='.$tra['id'].'" class="text-yellow hover-warning">
                  '.$tra['tid'].'
						</a>
						...
					  </td>
					  <td> '.strtoupper($tra['method']).'</td>
					  <td>
						<time class="timeago" datetime="'.$tra['date'].'" title="'.$tra['date'].'">'.$tra['date'].'</time>
					  </td>
					  <td>$'.$tra['amount'].'</td>
					  <td>'.$tra['type'].'</td>
                      <td><span class="label '.$status.'">'.$tra['status'].'</span></td>
                      </a>
					</tr>
      '; 
   }
    echo $trasactions;
    return;
}

if (isset($_GET['request']) && $_GET['request'] == 'message') {
    $sql = "SELECT * FROM messages WHERE uid = '$uid' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    $trans = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $trasactions = '';
     if (sizeof($trans) < 1) {
        $trasactions .= '
        <div class=" center" style="height: 250px;text-align: center;">
           <p style="text-align: center;">no message found</p>
        </div>';
        echo $trasactions;
        exit();
     }
   
    foreach ($trans as $tra) {
        
       $trasactions .=  '
       <li>
       <a href="#">
         
         <div class="mail-contnet">
            <h4>
             Admin
             <small><i class="fa fa-clock-o"></i> '.$tra['date'].'</small>
            </h4>
            <span>'.$tra['message'].'</span>
         </div>
       </a>
     </li>
       '; 
    }
    echo $trasactions;
    return;
}

if (isset($_GET['request']) && $_GET['request'] == 'mess') {
   $sql = "SELECT * FROM messages WHERE uid = '$uid' ORDER BY id DESC";
   $result = mysqli_query($conn, $sql);
   $trans = mysqli_fetch_all($result, MYSQLI_ASSOC);
   $trasactions = '';
    if (sizeof($trans) < 1) {
       $trasactions .= '
       <div class=" center" style="height: 250px;text-align: center;">
          <p style="text-align: center;">no message found</p>
       </div>';
       echo $trasactions;
       exit();
    }
  
   foreach ($trans as $tra) {
       
      $trasactions .=  '
      <div class="media">
      
      <div class="media-body">
        <p>
          <a href="#"><strong>Admin</strong></a>
          <small class="sidetitle">Online</small>
        </p>
        <p>'.$tra['message'].'</p>
        
        <small>'.$tra['date'].'</small>
      </div>

      <div class="media-right gap-items">
        <a class="text-yellow" onclick="deleteMessage('.$tra['id'].');" href="#" data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-remove"></i> delete</a>
        
          
       

      </div>
      </div>
      '; 
   }
   echo $trasactions;
   return;
}

if (isset($_GET['request']) && $_GET['request'] == 'del') {
   $id = $_GET['id'];
   $sql = "DELETE FROM messages WHERE id = $id";
   mysqli_query($conn, $sql);
   
}

if (isset($_GET['request']) && $_GET['request'] == 'inv') {
   $sql = "SELECT * FROM investments WHERE uid = '$uid' ORDER BY id DESC";
   $result = mysqli_query($conn, $sql);
   $trans = mysqli_fetch_all($result, MYSQLI_ASSOC);
   $trasactions = '';
   if (sizeof($trans) < 1) {
     $trasactions .= '
     <div class=" center" style="height: 250px;text-align: center;">
        <p style="text-align: center;">you have\'nt placed any investment</p>
     </div>';
     echo $trasactions;
     exit();
  }

  foreach ($trans as $tra) {
     $duration = $tra['duration'];
     $initialdate = $tra['date'];
     $date =date("Y-m-d H:i:s");
    
     $d = new DateTime($date);
     $r = new DateTime($initialdate);
     $days =  abs(strtotime($date) - strtotime($initialdate));
     $d =  $days/(60*60*24);
  
     $percentage =  ($d * 100)/$duration;

     $status = "";
      switch ($tra['status']) {
         case 'progress':
            $status = "label-warning";
            break;
         case 'cancelled':
            $status = "label-danger";
            break;
         
         default:
            $status = "label-success";
            break;
      }
     
     $trasactions .=  '
     <tr>
     <td>
     <a href="#" class="text-yellow hover-warning">'.$tra['plan'].'</a>
     </td>
     <td>'.$tra['rate'].' %</td>
     <td>'.$tra['duration'].' days</td>
     <td>$ '.$tra['amount'].'</td>
     <td><div class="progress">
       <div class="progress-bar progress-bar-green progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="'.$percentage.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$percentage.'%">
         
       </div>
     </div>
   </td>
   <td><span class="label '.$status.'">'.$tra['status'].'</span></td>
     <td>'.$tra['date'].'</td>
   </tr>
     '; 
  }
   echo $trasactions;
   return;
}

$sql = "SELECT * FROM users WHERE uid = '$uid'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($user);
?>
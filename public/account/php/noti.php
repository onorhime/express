<?php
ob_start();
require("db.php");
session_start();

$uid = $_SESSION['uid'];

$sql = "SELECT * FROM notifications WHERE uid = '$uid' ORDER BY id DESC ";
$result = mysqli_query($conn, $sql);
$notiss = mysqli_fetch_all($result, MYSQLI_ASSOC);
$noti = '';


if (isset($_POST['request']) && $_POST['request'] == 'read') {
    $id = $_POST['id'];
    $sql = "UPDATE notifications SET seen = true WHERE id = $id";
    mysqli_query($conn, $sql);
}

 if (sizeof($notiss) < 1) {
    $noti .= '
    <div class=" center" style="height: 250px;text-align: center;">
       <p style="text-align: center;">no transaction found</p>
    </div>';
    echo $noti;
    exit();
 }

foreach ($notiss as $tra) {
    $class = 'inactive';
    if (!$tra['seen']) {
        $class = 'active';
    }
    switch ($tra['type']) {
        case 'card':
            $arrow = '<div class="icon-box bg-success">
            <ion-icon name="card-outline"></ion-icon>
        </div>';
        $message = '
        <div>
            <div class="mb-05"><strong>Card Creation</strong></div>
            <div class="text-small mb-05">'.$tra['message'].'</div>
            <div class="text-xsmall">'.$tra['date'].'</div>
        </div>
        ';
            break;
        case 'kyc':
            $arrow = '<div class="icon-box bg-warning">
            <ion-icon name="key-outline"></ion-icon>
        </div>';
        $message = '
        <div>
            <div class="mb-05"><strong>KYC Verification</strong></div>
            <div class="text-small mb-05">'.$tra['message'].'</div>
            <div class="text-xsmall">'.$tra['date'].'</div>
        </div>
        ';
            break;
        case 'deposit':
            $arrow = '<div class="icon-box bg-success">
            <ion-icon name="arrow-down-outline"></ion-icon>
        </div>';
        $message = '
        <div>
            <div class="mb-05"><strong>Money Received</strong></div>
            <div class="text-small mb-05">'.$tra['message'].'</div>
            <div class="text-xsmall">'.$tra['date'].'</div>
        </div>
        ';
            break;    
        case 'withdrawal':
            $arrow = '<div class="icon-box bg-danger">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </div>';
        $message = '
        <div>
            <div class="mb-05"><strong>Money Sent</strong></div>
            <div class="text-small mb-05">'.$tra['message'].' <b>'.$tra['amount'].'</b></div>
            <div class="text-xsmall">'.$tra['date'].'</div>
        </div>
        ';
            break;
        default:
        $arrow = '<div class="icon-box bg-primary">
        <ion-icon name="chatbubble-outline"></ion-icon>
        </div>';
        $message = '
        <div>
            <div class="mb-05"><strong>New Notification</strong></div>
            <div class="text-small mb-05">'.$tra['message'].' </div>
            <div class="text-xsmall">'.$tra['date'].'</div>
        </div>
        ';
            break;
    }
    
   $noti .=  '
                <li class="'.$class.'">
                    <a href="#" class="item" onclick="read('.$tra['id'].')">
                        '.$arrow.'
                        <div class="in">
                            '.$message.'
                            
                        </div>
                    </a>
                </li>
   '; 
}
echo $noti;
return;

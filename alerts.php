<?php
    session_start();
    include('connection.php');
    echo 'Alerts are like common messages, but only seniors officers can send them, and they have high priority and urgency';?><html><br><html><?php
?>
 <?php
 $user = $_SESSION['user'];
 $sql = "SELECT * FROM alerts WHERE contact = '{$user}'";
 $result = mysqli_query($conn,$sql) or die("Error returning data");
 
 while ($register = mysqli_fetch_array($result)) {
 
   $usersend = $register['user'];
   $contact = $register['contact'];
   $alertmsg = $register['alertmsg'];

   if ($user == $contact) {?><html>
    <div class = "alerts"><?php
    echo $usersend . '&nbsp&nbsp' . 'sent you an alert';?><html><br><html><?php
    echo 'Alert:' . '&nbsp&nbsp' . $alertmsg;?><html>
    </div><?php
}
}
?>
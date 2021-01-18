<?php
session_start();
$user = $_SESSION['user'];
include('connection.php');
?>
 <?php
 $user = $_SESSION['user'];
 $sql = "SELECT * FROM messages WHERE contact = '{$user}'";
 $result = mysqli_query($conn,$sql) or die("Error returning data");
 
 while ($register = mysqli_fetch_array($result)) {
 
   $usersend = $register['user'];
   $contact = $register['contact'];
   $emailmsg = $register['emailmsg'];

   if ($user == $contact) {?><html>
    <div class = "messages"><?php
    echo $usersend . '&nbsp&nbsp' . 'sent you an message';?><html><br><html><?php
    echo 'Message:' . '&nbsp&nbsp' . $emailmsg;?><html>
    </div><?php
}
}
?>
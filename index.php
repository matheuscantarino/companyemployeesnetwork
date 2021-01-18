<?php
    session_start();
    $user = $_SESSION['user'];
    echo 'Welcome' . ',' . '&nbsp&nbsp' . $user;
?>
<html>
    <br><a href="receiveemail.php">Inbox</a><br>
    <a href="sendemail.php">Write E-mail</a><br>
    <a href="alerts.php">My Alerts</a><br>
    <a href="sendalert.php">Send Alert</a><br>
</html>
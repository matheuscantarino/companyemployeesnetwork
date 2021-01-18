<?php
session_start();
include('connection.php');

    $user = $_SESSION['user'];
    $contact = $_POST['contact'];
    $alertmsg = $_POST['alertmsg'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  $sql = "INSERT INTO alerts (user, contact, alertmsg) VALUES ('$user', '$contact', '$alertmsg')";
  if (mysqli_query($conn, $sql)) {
      echo "Alert sent successfully";     
} else {
    echo "Error, try again " . $sql . "<br>" . mysqli_error($conn);
}
?>

<?php
session_start();
include('connection.php');
    $user = $_SESSION['user'];
    $contact = $_POST['contact'];
    $subjectt = $_POST['subject'];
    $emailmsg = $_POST['message'];

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
      $sql = "INSERT INTO messages (user, contact, subjectt, emailmsg) VALUES ('$user', '$contact', '$subjectt', '$emailmsg')";
      if (mysqli_query($conn, $sql)) {
          echo "Message sent successfully";     
    } else {
        echo "Error, try again " . $sql . "<br>" . mysqli_error($conn);
    }
?>

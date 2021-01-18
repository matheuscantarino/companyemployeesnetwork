<?php
    session_start();
    $usersend = "Matheus";
?>
<html>
    <form name="signup" method="POST" action="sending.php" >
            <input name="contact" type="text" placeholder="Contact"/></br>
            <input name="subject" type="text" placeholder="Subject"/></br>
            <input name="message" type="text" placeholder="Message"/></br>
        <a href ="sending.php">
            <button>Send E-mail</button>
        </a>
    </form>
</html>








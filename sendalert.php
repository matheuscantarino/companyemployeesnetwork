<?php
    session_start();
    $usersend = "Matheus";
?>
<html>
    <form name="signup" method="POST" action="sendingallert.php" >
            <input name="contact" type="text" placeholder="Contact"/></br>
            <input name="subject" type="text" placeholder="Subject"/></br>
            <input name="alertmsg" type="text" placeholder="Alert Message"/></br>
        <a href ="sendingallert.php">
            <button>Send Alert</button>
        </a>
    </form>
</html>








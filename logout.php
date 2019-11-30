<?php
    session_start();
    session_destroy();
    setcookie("userID","", time()-999999999);
   // setcookie("empid","", time()-999999999);
    header("location: login.php"); 
?>

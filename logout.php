<?php
   session_start();
   
   if(session_destroy()) {
   	setcookie("ev_id", "", time() - 3600);
    header("Location: login.php");
   }
?>
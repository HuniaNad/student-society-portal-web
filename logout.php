<?php
	session_start();
   unset($_SESSION["name"]);
   unset($_SESSION["image"]);
   unset($_SESSION["id"]);
   unset($_SESSION["valid"]);
   
   echo 'You have cleaned session';
   header("Location: http://localhost/Projects/Student_Society/user-panel/index.php");
?>
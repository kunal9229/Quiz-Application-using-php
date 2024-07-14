<?php
  session_start();
  if($_SESSION["username"]){
    header("Location: subjects.php");
  }else{
    header("Location: login.html");
  }
?>

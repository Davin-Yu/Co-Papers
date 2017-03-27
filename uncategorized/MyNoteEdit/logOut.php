<?php
/**
* This will end the using Session.
* Typiclly can be used in log out.
*/
  
  session_start();
  echo $_SESSION['username'];
  echo " has logged out";
  session_destroy();
  unset($_SESSION['user_id']);
  unset($_SESSION['username']);
?>
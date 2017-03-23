<?php
/**
* This will end the using of Session.
* This typiclly can be used in log out.
*/
  session_start();
  // echo 'You Log our as'.$_SESSION['username'];

  session_destroy();
  unset($_SESSION['user_id']);
  unset($_SESSION['username']);
?>

<?php
/**
* This will end the using of Session.
* This typiclly can be used in log out. It will jump into the MainPage automatically
* after the log out process.
*/
  session_start();
  // echo 'You Log our as'.$_SESSION['username'];
  if (empty($_SESSION['user_id'])) {
    echo  "<script type='text/javascript'>alert('You haven't log in');location.href='../MainPage/MainPage.php'</script>";
    exit;
  }

  session_destroy();
  unset($_SESSION['user_id']);
  unset($_SESSION['username']);
  echo  "<script type='text/javascript'>alert('Log Out Successfully');location.href='../MainPage/MainPage.php'</script>";
?>

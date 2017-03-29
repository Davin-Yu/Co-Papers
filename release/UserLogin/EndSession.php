<?php
/**
* This will end the using of Session.
* This typiclly can be used in log out. It will jump into the MainPage automatically
* after the log out process.
*/
  session_start();
  // echo 'You Log our as'.$_SESSION['username'];
  if (empty($_SESSION['user_id'])) {
    echo "You haven't log in";
    exit;
  }

  session_destroy();
  unset($_SESSION['user_id']);
  unset($_SESSION['username']);
  echo <<< eod
    <html>
      <head>
        <meta http-equiv="refresh" content="2;url= ../MainPage/MainPage.php">
      </head>
      <body>
        Log Out Successfully!
      </body>
    </html>
eod;
?>

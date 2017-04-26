<?php
  if (empty($_SESSION['user_id'])) {
    echo  "<script type='text/javascript'>location.href='../MainPage/MainPage.php'</script>";
  }
 ?>

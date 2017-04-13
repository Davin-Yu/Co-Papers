<?php
  if (empty($_SESSION['user_id'])) {
    echo  "<script type='text/javascript'>alert('Please Login First');location.href='../MainPage/MainPage.php'</script>";
  }
 ?>

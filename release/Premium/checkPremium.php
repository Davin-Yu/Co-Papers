<?php
  $user_id = $_SESSION['user_id'];
  require("../connectDB.php");
  $result=mysql_query("SELECT * FROM Premium WHERE user_id='$user_id'");
  if ($row=mysql_fetch_array($result)) {
      $ifPremium = 1;
  }
 ?>

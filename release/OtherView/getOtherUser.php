<?php
  if (!empty($_GET["_user_id"])) {
    $_otherid = $_GET["_user_id"];
    if (!empty($_SESSION["user_id"])) {
      if ($_SESSION["user_id"] == $_otherid ) {
        echo  "<script> location.href='../MyView/MyView.php' </script>";
      }
    }
  } else {
    $_otherid = 2;    //For Testing
  }

  require('../connectDB.php');
  $result = mysql_query ("SELECT * FROM
                          Users WHERE user_id = '$_otherid'", $connection);
  $row = mysql_fetch_array($result, MYSQL_NUM);
  $_other_name = $row[1];
 ?>

<?php
  $md5username = $_GET["us"];
  $_password = MD5($_GET["_password"]);
  require("../connectDB.php");
  $result = mysql_query ("SELECT *
                          FROM Users", $connection);
  while ( ($row = mysql_fetch_array($result, MYSQL_NUM)) && (MD5($row[1]) != $md5username)) {
  }
  $user_id = $row[0];
  $result2 = mysql_query ("UPDATE Users
                           SET password = '$_password'
                           WHERE user_id = '$user_id'", $connection);
  if ($result2) {
    echo  "<script type='text/javascript'>alert('Success');location.href='../MainPage/MainPage.php'</script>";
  } else {
    echo  "<script type='text/javascript'>alert('Sorry an error occurs');location.href='../MainPage/MainPage.php'</script>";
  }
 ?>

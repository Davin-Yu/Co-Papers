<?php
  if (!empty($_GET["_user_id"])) {
    $_otherid = $_GET["_user_id"];
  } else {
    $_otherid = 2;    //For Testing
  }

  require('../connectDB.php');
  $result = mysql_query ("SELECT * FROM
                          Users WHERE user_id = '$_otherid'", $connection);
  $row = mysql_fetch_array($result, MYSQL_NUM);
  $_other_name = $row[1];
 ?>

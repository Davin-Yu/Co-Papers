<?php
  require("../connectDB.php");
  $result = mysql_query ("SELECT * FROM Sand", $connection);
  $row = mysql_fetch_array($result, MYSQL_NUM);
  echo $row[1];
 ?>

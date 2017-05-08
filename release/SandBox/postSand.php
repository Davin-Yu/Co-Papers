<?php
  $sandNum = $_GET["_changesand"];
  require("../connectDB.php");
  $result = mysql_query ("SELECT * FROM Sand", $connection);
  $row = mysql_fetch_array($result, MYSQL_NUM);
  echo $row[1];
  $str = "";
  for ($i=0; $i<651; $i++) {
    if ($i == $sandNum) {
      if ($row[1][$sandNum]==1) {
        $str = $str."0";
      } else {
        $str = $str."1";
      }
    } else {
      $str = $str.$row[1][$i];
    }
  }
  $sql="UPDATE Sand
        SET sand='$str'
        WHERE id = '1'";
  $result=mysql_query($sql);
 ?>

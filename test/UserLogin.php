<?php
  $Uname = $_GET["_username"];
  $Upass = $_GET["_password"];
  $connection = mysql_connect("localhost","root","");
  mysql_select_db("grouppj", $connection);
  $result = mysql_query ("SELECT * FROM
                          Users", $connection);
  print "\n";
  $flag = false;
  while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    if ($row[1] == $Uname and $row[2] == $Upass) {
      $flag = true;
    }
  }
  if ($flag == true) {
    echo "Right!";
  }else {
    echo "Wrong!";
  }
?>

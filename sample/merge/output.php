<?php
  $connection = mysql_connect("localhost","root","");
  mysql_select_db("grouppj", $connection);
  $result = mysql_query ("SELECT * FROM
                          Users", $connection);
  print "<br>";
  while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    foreach ($row as $attribute)
      print "{$attribute}";
  echo "<br/>";
  }
?>

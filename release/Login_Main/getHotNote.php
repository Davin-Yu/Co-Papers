<?php
  session_start();
  require("../connectDB.php");
  $result = mysql_query ("SELECT * FROM
                          Users ORDER BY
                          hot DESC", $connection);
  
?>

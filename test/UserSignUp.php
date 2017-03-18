/**
* This code need to be modified in order to avoid duplicate
*/
<?php
  $Uname = $_GET["_username"];
  $Upass = $_GET["_password"];
  $Umail = $_GET["_mail"];
  $Ubio = $_GET["_bio"];
  $connection = mysql_connect("localhost","root","");
  mysql_select_db("grouppj", $connection);
  $result = mysql_query("SELECT COUNT(*) FROM Users");
  $count = mysql_result($result, 0);
  $count = $count + 1;
  $query = "INSERT INTO Users VALUES ('$count','$Uname','$Upass','$Umail','$Ubio')";
  $result2 = mysql_query($query);
  if ($result2){
    echo "successful";
  }
?>

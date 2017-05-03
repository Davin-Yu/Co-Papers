<?php
  session_start();
  $user_id = $_SESSION["user_id"];
  $_code = $_POST["_code"];
  require("../connectDB.php");
  $result=mysql_query("SELECT * FROM InvitationCode");
  if ($row=mysql_fetch_array($result)) {
    if ($row[0] === $_code) {
      $query = "INSERT INTO Premium VALUES ('','$user_id')";
      $result2 = mysql_query($query);
      if ($result2) {
        echo  "<script type='text/javascript'>alert('Success!');location.href='../Login_Main/Login_Main.php'</script>";
      } else {
        echo "wrong";
      }
      exit();
    }
  }
  //echo  "<script type='text/javascript'>alert('Wrong Code!');location.href='../Login_Main/Login_Main.php'</script>";
 ?>

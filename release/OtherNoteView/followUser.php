<?php
  session_start();
  $user_id = $_SESSION["user_id"];
  if (empty($_GET["_follow_user_id"])) {
    $followid = 2;    //For Testing
  } else {
    $followid = $_GET["_follow_user_id"];
  }

  require("../connectDB.php");
  $sql="INSERT INTO Followers
        VALUES('','$followid','$user_id')";
  $result=mysql_query($sql);

  if($result===true){
    echo  "<script type='text/javascript'>alert('Follow Successfully');location.href='../OtherNoteView/OtherNoteView.php'</script>";
  }else{
    echo "<script type='text/javascript'>alert('Failed');</script>".$sql;
  }
 ?>

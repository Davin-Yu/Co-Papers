<?php
  session_start();
  $user_id = $_SESSION["user_id"];
  if (empty($_GET["_follow_user_id"])) {
    $followid = 2;    //For Testing
  } else {
    $followid = $_GET["_follow_user_id"];
  }

  require("../connectDB.php");
  $result0 = mysql_query ("SELECT * FROM Followers
                           WHERE user_id = $followid AND follwer_name = $user_id", $connection);
  $row = mysql_fetch_array($result0, MYSQL_NUM);
  if ($row) {
    echo "<script type='text/javascript'>alert('Already Followed');location.href='../OtherView/OtherView.php?_user_id=$followid'</script>";
    exit;
  }

  $sql="INSERT INTO Followers
        VALUES('','$followid','$user_id')";
  $result=mysql_query($sql);

  if($result===true){
    echo  "<script type='text/javascript'>alert('Follow Successfully!');location.href='../OtherView/OtherView.php?_user_id=$followid'</script>";
  }else{
    echo "<script type='text/javascript'>alert('Failed');location.href='../OtherView/OtherView.php?_user_id=$followid'</script>";
  }
 ?>

<?php
  require("../connectDB.php");
  $trail = $_GET["trail"];
  $sql = "DELETE FROM Followers
          WHERE trail_id = $trail";
  if (!mysql_query($sql)) {
    echo  "<script type='text/javascript'>alert('Error!');location.href='MyViewFollower.php'</script>";
  }else {
    echo  "<script type='text/javascript'>alert('Unfollow Successfully');location.href='MyViewFollower.php'</script>";
  }
 ?>

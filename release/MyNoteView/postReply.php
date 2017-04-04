<?php
  session_start();    //for self-testing!!!!
  $user_id = $_SESSION["user_id"];
  if (empty($_GET["_comment_id"])) {
    $commentid = 1;    //For Testing
  } else {
    $commentid = $_GET["_comment_id"];
  }
  if (empty($_GET["_reply_content"])) {
    $content = "test";
  } else {
    $content = $_GET["_reply_content"];
  }

  require("../connectDB.php");
  $sql="INSERT INTO Replies
        VALUES('','$user_id','$commentid','$content')";
  $result=mysql_query($sql);

  if($result===true){
    echo  "<script type='text/javascript'>alert('Reply Successfully');location.href='../MyNoteView/MyNoteView.php'</script>";
  }else{
    echo "<script type='text/javascript'>alert('Failed');</script>".$sql;
  }
?>

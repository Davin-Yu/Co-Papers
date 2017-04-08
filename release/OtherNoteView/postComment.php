<?php
  session_start();    //for self-testing!!!!
  $user_id = $_SESSION["user_id"];
  if (empty($_GET["_note_id"])) {
    $Noteid = 1;    //For Testing
  } else {
    $Noteid = $_GET["_note_id"];
  }
  if (empty($_GET["_comment_content"])) {
    $content = "test";
  } else {
    $content = $_GET["_comment_content"];
  }

  require("../connectDB.php");
  $sql="INSERT INTO Comments
        VALUES('','$user_id','$Noteid','$content')";
  $result=mysql_query($sql);

  if($result===true){
    echo  "<script type='text/javascript'>alert('Comment Successfully');location.href='../OtherNoteView/OtherNoteView.php?_note_id=$Noteid'</script>";
  }else{
    echo "<script type='text/javascript'>alert('Failed');</script>".$sql;
  }
?>

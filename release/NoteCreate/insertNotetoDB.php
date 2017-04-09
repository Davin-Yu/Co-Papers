<?php
/**
 *	@author Davin Yu, Yao Bei
 */
  session_start();
  $user_id = $_SESSION['user_id'];
  $article = $_POST['_article'];
  $topic = $_POST['_topic'];
  if ($_POST['optionsRadiosinline'] == "option1") {
    $tag = $_POST['_tag1'];
  } else {
    $tag = $_POST['_tag2'];
  }
  $article_url=$_POST['_article_url'];
  $note_content=$_POST['_note_content'];
  $ifpublicize=$_POST['_ifpublicize'];

  $note_content = htmlspecialchars($note_content, ENT_QUOTES);

  require("../connectDB.php");
  $sql="INSERT INTO Notes
        VALUES('','$user_id','$article','$article_url','$note_content','$topic','$tag','0','$ifpublicize')";
  $result=mysql_query($sql);

  if($result===true){
    echo  "<script type='text/javascript'>alert('Save Successfully');location.href='../MyView/MyView.php'</script>";
  }else{
    echo "<script type='text/javascript'>alert('Failed');</script>".$sql;
  }
?>

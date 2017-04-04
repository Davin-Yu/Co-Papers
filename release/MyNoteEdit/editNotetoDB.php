<?php
/**
 *	@author Davin Yu, Yao Bei
 */
  session_start();
  require("getNoteInfo.php");
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

  require("../connectDB.php");
  $sql="UPDATE Notes
        SET user_id = '$user_id',
            article = '$article',
            article_url = '$article_url',
            note_content = '$note_content',
            topic = '$topic',
            tag = '$tag',
            ifpublicize = '$ifpublicize'
        WHERE note_id = '$_note_id'";
  $result=mysql_query($sql);

  if($result===true){
    echo  "<script type='text/javascript'>alert('Save Successfully');location.href='../MyView/MyView.php'</script>";
  }else{
    echo "<script type='text/javascript'>alert('Failed');</script>".$sql;
  }
?>

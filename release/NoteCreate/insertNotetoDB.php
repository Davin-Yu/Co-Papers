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
  $ifpdf = 0;

  $note_content = htmlspecialchars($note_content, ENT_QUOTES);
  require_once("../CheckDirtyWords/CheckDirtyWords.php");

  if (is_uploaded_file($_FILES['_pdf']['tmp_name'])) {
    if ($_FILES['_pdf']['type'] == "application/pdf") {
      $ifpdf = 1;
    }
  }

  require("../connectDB.php");
  $sql="INSERT INTO Notes
        VALUES('','$user_id','$article','$article_url','$note_content','$topic','$tag','0','$ifpublicize','$ifpdf')";
  $result=mysql_query($sql);
  $_note_id = mysql_insert_id();

  if($result===true){
    if (is_uploaded_file($_FILES['_pdf']['tmp_name'])) {
      if ($_FILES['_pdf']['type'] != "application/pdf") {
        echo "<p>Please upload PDF File</p>";
      } else {
        $name = "$user_id"."and"."$_note_id";
        echo $name;
        $result = move_uploaded_file($_FILES['_pdf']['tmp_name'], "../UploadPDF/"."$name.pdf");
      }
    }
    echo  "<script type='text/javascript'>alert('Save Successfully');location.href='../MyView/MyView.php'</script>";
  }else{
    echo "<script type='text/javascript'>alert('Failed');</script>".$sql;
  }

?>

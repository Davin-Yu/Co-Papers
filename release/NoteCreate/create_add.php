<?php
  session_start();
  $article = $_POST['_article'];
	$topic = $_POST['_topic'];
  $tag = $_POST['_tag'];
	$username = $_SESSION['username'];
	$article_url=$_POST['_article_url'];
	$note_content=$_POST['_note_content'];
	$ifpublicize=$_POST['_ifpublicize'];
  $user_id = $_SESSION['user_id'];

  $connection = mysql_connect("localhost","root","");
  mysql_select_db("grouppj", $connection);
	$sql="INSERT INTO Notes VALUES('','$username','$article','$article_url','$note_content','$topic','$tag','0','$ifpublicize')";
  $result=mysql_query($sql);

	if($result===true){
    echo  "<script type='text/javascript'>alert('succeed to save');location.href='MyView.php'</script>";
	}else{
    echo "<script type='text/javascript'>alert('fail to save');</script>".$sql;
  }
?>

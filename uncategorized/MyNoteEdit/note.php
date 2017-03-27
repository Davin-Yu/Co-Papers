<?php  
/**
To select consistent record of notes table from the database
*/
  $article = $_GET["_article"];
  $tag=$_GET["_tag"];
$conn=mysqli_connect('127.0.0.1','root','','grouppj',3306);  
$sql="SET NAMES UTF8";  
        mysqli_query($conn,$sql); 
		 $sql="select * from notes WHERE  article = '$article'";
		
		$result=mysqli_query($conn,$sql);  
  $row = mysqli_fetch_array($result, MYSQLI_NUM);
  $_article = $row[2];
  $_article_url = $row[3];
  $_note_content = $row[4];
  $_topic = $row[5];
  $_tag = $tag;

  $sql_delete="DELETE FROM notes WHERE article='$_article'"; 
  mysqli_query($conn,$sql_delete);
		 mysqli_close($conn);
		?>
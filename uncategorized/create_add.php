<?php
/**
To add records to notes table
*/
    $article=$_POST['PaperTitle'];
		$topic = $_POST['topic'];
		$username=$_POST['_username'];
		$tag=null;
		if(!empty($_POST['newTag'])){
		    $tag=$_POST['newTag'];
		}
		else{
		    $tag=$_POST['existentTag'];
		}
		$article_url=$_POST['URL'];
		$note_content=$_POST['Notes'];
		$if_publicize=null;
		if(isset($_POST['publicize'])){
		    $if_publicize=1;
		}
		if(isset($_POST['save'])){
		    $ifpublicize=0;
		}

		$conn=mysqli_connect('127.0.0.1','root','','grouppj',3306);
		$sql="SET NAMES UTF8";
		mysqli_query($conn,$sql);
		$sql_select="SELECT FROM users WHERE username='$username'";
	  $result_select=mysqli_query($conn,$sql_select);
	  $row = mysqli_fetch_array($result_select, MYSQLI_NUM);
    $user_id = $row[0];
		$sql="INSERT INTO notes VALUES('','$user_id','$article','$article_url','$note_content','$topic','$tag','','$if_publicize')";
    $result=mysqli_query($conn,$sql);
		if($result===true){
      echo  "<script type='text/javascript'>alert('succeed to save');location.href='MyView.php'</script>";
		}else{
      echo "<script type='text/javascript'>alert('fail to save');</script>".$sql;
    }
    mysqli_close($conn);
?>

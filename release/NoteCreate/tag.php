<?php
	$conn=mysqli_connect('127.0.0.1','root','','grouppj',3306);
	$sql="SET NAMES UTF8";
  mysqli_query($conn,$sql);
	$sql="select DISTINCT tag from notes ORDER BY tag";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result)){
		echo "<option value ={$row['tag']}>{$row['tag']}</option>";
  }
  mysqli_close($conn);
 ?>

<?php
/**
 *	@author Davin Yu, Yao Bei
 */
	require("../connectDB.php");
	$result=mysql_query("SELECT DISTINCT tag
		 									 FROM Notes
											 WHERE user_id = '{$_SESSION['user_id']}'");
	while($row=mysql_fetch_array($result)){
		echo "<option value ={$row["tag"]}>{$row["tag"]}</option>";
  }
 ?>

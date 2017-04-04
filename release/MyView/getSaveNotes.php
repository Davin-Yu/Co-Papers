<?php
  if (!empty($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
  } else {
    $user_id = 7; //test
  }
	require("../connectDB.php");
	$result=mysql_query("SELECT article, tag
                       FROM Notes
                       WHERE ifpublicize=0 && user_id = '$user_id'
                       ORDER BY article");
	while($row=mysql_fetch_assoc($result)){
		$article=$row['article'];
		$tag=$row['tag'];
		echo "<h3>$article</h3>$tag";
		echo"<span class = 'editandshow'>";
		echo"<input type='button' name='Show' id='button2' value='Show' onclick=\"location.href='/208/MyNoteView.php';\"/ >";
		echo"<input type='button' onclick=\"location.href='/208/MyNoteEdit.php?_article=$article&_tag=$tag';\"/' name='Edit' id='button2' value='Edit'>";
		echo"</span>";
		echo"<hr />";
  }
 ?>

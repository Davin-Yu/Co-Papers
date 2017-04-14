<?php
	require("../connectDB.php");

	$result=mysql_query("SELECT DISTINCT article
		 									 FROM Notes
											 WHERE user_id = '{$_SESSION['user_id']}' and ifpublicize=1");
  $pub_article_num = mysql_num_rows($result);

  $result1=mysql_query("SELECT DISTINCT article
                        FROM Notes
                        WHERE user_id = '{$_SESSION['user_id']}' and ifpublicize=0");
  $draft_article_num = mysql_num_rows($result1);

  $result2=mysql_query("SELECT user_id
                        FROM Followers
                        WHERE follwer_name = '{$_SESSION['user_id']}'");
  $follower_num = mysql_num_rows($result2);

 ?>

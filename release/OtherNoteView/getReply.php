<?php
/**
 *  This will help to get the Reply of a specific comment
 *  from the database.
 */
 if (!empty($_GET["_comment_id"])) {
   $comment_id = $_GET["_comment_id"];
 } else {
   $comment_id = 1;    //For Testing
 }

 require("../connectDB.php");
 $result = mysql_query ("SELECT * FROM Replies
                         WHERE comment_id = '$comment_id'", $connection);
 while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
   echo "reply: ".$row[3];
   $result2 = mysql_query ("SELECT * FROM Users
                            WHERE user_id = '$row[1]'", $connection);
   $row2 = mysql_fetch_array($result2, MYSQL_NUM);
   echo "Username: ".$row2[1];
 }
 ?>

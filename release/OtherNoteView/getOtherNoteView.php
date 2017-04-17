<?php
/**
 *  This returns the otherNote information from database.
 *  @author Davin-Yu
 *  @param  _note_id
 *  @return _article, _article_url, _note_content, _topic, _tag, _hot, _ifpublicize
 */
  if (!empty($_GET["_note_id"])) {
    $Noteid = $_GET["_note_id"];
  } else {
    $Noteid = 1;    //For Testing
  }

  require('../connectDB.php');
  $result = mysql_query ("SELECT * FROM
                          Notes WHERE note_id = '$Noteid'", $connection);
  $row = mysql_fetch_array($result, MYSQL_NUM);
  $result2 = mysql_query ("SELECT username FROM
                           Users WHERE user_id=$row[1]");
  $row2=mysql_fetch_assoc($result2);
  $_otherID = $row[1];
  $_username = $row2['username'];
  if ($_SESSION["user_id"]) {
    if ($_SESSION["user_id"] == $_otherID) {
      echo  "<script> location.href='../MyNoteView/MyNoteView.php?_note_id=$Noteid' </script>";
    }
  }
  $_article = $row[2];
  $_article_url = $row[3];
  $_note_content = $row[4];
  $_topic = $row[5];
  $_tag = $row[6];
  $_hot = $row[7];
  $_ifpublicize = $row[8];
 ?>

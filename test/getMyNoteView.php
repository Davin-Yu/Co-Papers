<?php
/**
 *  This returns the myNote information from database.
 *  @author Davin-Yu
 *  @param  _note_id
 *  @return _article, _article_url, _note_content, _topic, _tag, _hot, _ifpublicize
 */
  session_start();
  //  if (empty($_SESSION['user_id'])) {
  //    echo "You Must Log in";
  //    exit;
  //  }
  //$Noteid = $_GET["_note_id"];
  $Noteid = 1;    //For Testing
  $connection = mysql_connect("localhost","root","");
  mysql_select_db("grouppj", $connection);
  $result = mysql_query ("SELECT * FROM
                          Notes WHERE note_id = '$Noteid'", $connection);
  $row = mysql_fetch_array($result, MYSQL_NUM);
  $_article = $row[2];
  $_article_url = $row[3];
  $_note_content = $row[4];
  $_topic = $row[5];
  $_tag = $row[6];
  $_hot = $row[7];
  $_ifpublicize = $row[8];
 ?>

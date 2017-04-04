<?php
  if (!empty($_GET["_edit_note"])) {
    $note_id = $_GET["_edit_note"];
  } else {
    $note_id = 2; //test
  }

  require("../connectDB.php");
  $result = mysql_query ("SELECT * FROM
                          Notes WHERE note_id = '{$note_id}'", $connection);
  $row=mysql_fetch_array($result);
  if (!empty($row)) {
    $_note_id = $row[0];
    $_article = $row[2];
    $_article_url = $row[3];
    $_note_content = $row[4];
    $_topic = $row[5];
    $_tag = $row[6];
  } else {
     echo "<script type='text/javascript'>alert('Database Access Error');location.href='../MyView/MyView.php'</script>";
  }
 ?>

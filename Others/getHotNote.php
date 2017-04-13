<?php
  // We suppose we will get $num of hottest Note
  $num = 1; //test
  require("../connectDB.php");
  $result = mysql_query ("SELECT *
                          FROM Notes
                          ORDER BY hot", $connection);
  $now = 0;
  while (($row = mysql_fetch_array($result, MYSQL_NUM)) && ($now<$num)) {
    $_article = $row[2];
    $_note_content = $row[4];
  }
  // We nned to use javascript to do that
  echo <<< eof
  <span class="content">
    <h5>$_article</h5>
    <p class="note">$_note_content</p>
  </span>
eof;
?>

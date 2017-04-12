<?php
  // We suppose we will get $num of hottest Note
  $num = 1; //test
  require("../connectDB.php");
  $result = mysql_query ("SELECT *
                          FROM Notes
                          ORDER BY hot DESC", $connection);
  $now = 0;
  $first = ' active';
  while (($row = mysql_fetch_array($result, MYSQL_NUM)) && ($now<$num)) {
    $_article = $row[2];
    $_note_content = $row[4];
    echo <<< eof
        <div class="item$first">
            <div class="center-block" id="item0">
                <div class="hottest-note">
                    <h3>$_article</h3>
                    <p class="creater">name 5</p>
                    <p class="note">$_note_content<p>
                </div>
            </div>
        </div>
eof;
    $first = '';
  }
?>

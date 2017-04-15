<?php
  $num = 9; //test
  require("../connectDB.php");
  $result = mysql_query ("SELECT *
                          FROM Notes
                          ORDER BY hot DESC", $connection);
  $now = 0;
  $first = ' active';
  while (($row = mysql_fetch_array($result, MYSQL_NUM)) && ($now<$num)) {
    $result2 = mysql_query ("SELECT *
                             FROM Users
                             WHERE user_id = $row[1]");
    $row2 = mysql_fetch_array($result2, MYSQL_NUM);
    echo <<< eof
        <div class="item$first">
            <div class="center-block" id="item0">
                <div class="hottest-note">
                    <h3><a href="../OtherNoteView/OtherNoteView.php?_note_id=$row[0]" style="color:rgb(255,255,255)">$row[2]</a></h3>
                    <p class="creater"><a href="../OtherView/OtherView.php?_user_id=$row[1]" style="color:rgb(255,255,255)">$row2[1]</a></p>
                    <p class="note">$row[4]<p>
                </div>
            </div>
        </div>
eof;
    $first = '';
    $now = $now + 1;
  }
?>

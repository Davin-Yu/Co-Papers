<?php
  if (empty($_GET["_topic"])) {
    $topic = "Computer Science";  //test
  } else {
    $topic = $_GET["_topic"];
  }

  require("../connectDB.php");
  $result=mysql_query("SELECT * FROM Notes
											 WHERE topic = '$topic' and ifpublicize = 1
                       ORDER BY hot DESC");
  $num = 0;
  while (($row=mysql_fetch_array($result)) && ($num<10)){
    $result2 = mysql_query ("SELECT username FROM
                               Users WHERE user_id=$row[1]");
    $row2=mysql_fetch_assoc($result2);
    $author = $row2['username'];
      echo <<< eod
        <ul class="searched-notes-list">
          <li class="result">
            <h3><a href="../OtherNoteView/OtherNoteView.php?_note_id=$row[0]">$row[2]</a>
            </h3>
            <h4><a href="../OtherView/OtherView.php?_user_id=$row[1]">$author</a></h4>
            <h5>
              <span class="glyphicon glyphicon-tags"></span>&nbsp
              <span>$row[5];</span>
              <span>$row[6];</span>
            </h5>
            <div class="detailed-info">
            <h5>
              <a href=$row[3] target="_blank">View Source</a>
            </h5>
              <div>
                <p>Hot: $row[7]</p>
              </div>
            </div>
          </li>
        </ul>
        <div class="Cut-off-line"></div>
eod;
    $num = $num + 1;
  }

 ?>

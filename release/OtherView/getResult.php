<?php
  require("../connectDB.php");
  $result=mysql_query("SELECT * FROM Notes
											 WHERE user_id = $_otherid");
  while ($row=mysql_fetch_array($result)){
      echo <<< eod
        <ul class="searched-notes-list">
          <li class="result">
            <h3><a href="../OtherNoteView/OtherNoteView.php?_note_id=$row[0]">$row[2]</a>
            </h3>
            <h4><a href="../OtherView/OtherView.php?_user_id=$row[1]">$_other_name</a></h4>
            <h5>
              <span class="glyphicon glyphicon-tags"></span>&nbsp
              <span>$row[5];</span>
              <span>$row[6];</span>
            </h5>
            <div class="detailed-info">
            <h5>
              <a href="//$row[3]" target="_blank">View Source</a>
            </h5>
              <div>
                <p>Hot: $row[7]</p>
              </div>
            </div>
          </li>
        </ul>
        <div class="Cut-off-line"></div>
eod;
  }

 ?>

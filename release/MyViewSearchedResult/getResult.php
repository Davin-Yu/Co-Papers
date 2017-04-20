<?php
  if (empty($_GET["_tag"])) {
    $tag = "";  //test
  } else {
    $tag = $_GET["_tag"];
  }
  if (empty($_GET["_keyword"])) {
    $keywords = "Sample";         //test
  } else {
    $keywords = $_GET["_keyword"];
  }

  $keywordarr = split(" ", $keywords);
  $keywordlen = count($keywordarr);
  if (empty($_SESSION["user_id"])) {
    $noteme=0;
  } else {
    $noteme = $_SESSION["user_id"];
  }

  require("../connectDB.php");
  $result=mysql_query("SELECT * FROM Notes
											 WHERE tag = '$tag' and user_id = $noteme");

  $ifhaveres = 0;
  while ($row=mysql_fetch_array($result)){
    // Search for Related Notes
    $article = $row[2];
    $articlearr = split(" ", $article);
    $articlelen = count($articlearr);

    $flag = 0;
    for ($i=0; $i<$keywordlen; $i++) {
      for ($j=0; $j<$articlelen; $j++) {
        if (strncasecmp($keywordarr[$i],$articlearr[$j],strlen($keywordarr[$i])) == 0) {  /* Note case sensitive */
          $flag = 1;
        }
      }
    }

    if ($flag == 1) {
      $ifhaveres = 1;
      $result2 = mysql_query ("SELECT username FROM
                               Users WHERE user_id=$row[1]");
      $row2=mysql_fetch_assoc($result2);
      $author = $row2['username'];
      echo <<< eod
        <ul class="searched-notes-list">
          <li class="result">
            <h3><a href="../MyNoteView/MyNoteView.php?_note_id=$row[0]">$row[2]</a>
            </h3>
            <h4><a href="../MyView/MyView.php?_user_id=$row[1]">$author</a></h4>
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
    }
  }

 ?>

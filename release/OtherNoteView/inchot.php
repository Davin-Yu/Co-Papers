<?php
  if (!empty($_GET["_note_id"])) {
    $Noteid = $_GET["_note_id"];
  } else {
    $Noteid = 1;    //For Testing
  }
  require("../connectDB.php");
  $sql = "UPDATE Notes
          SET hot = hot + 1
          WHERE note_id = $Noteid";
  $result=mysql_query($sql);
 ?>

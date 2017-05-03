<?php
  if (empty($note_content)) {
    $note_content = " ";
  }
  require("../connectDB.php");
  $result=mysql_query("SELECT * FROM DirtyWords");
  if ($row=mysql_fetch_array($result)) {
    $dirtywordarr = split(" ", $row[0]);
    $dirtywordlen = count($dirtywordarr);
    for ($i=0; $i<$dirtywordlen; $i++) {
      $note_content=str_ireplace($dirtywordarr[$i],"**",$note_content);
    }
  }
 ?>

<?php
  require("../connectDB.php");
  $note_id = $_GET["_note_id"];
  $sql = "DELETE FROM Notes
          WHERE note_id = $note_id";
  if (!mysql_query($sql)) {
    echo  "<script type='text/javascript'>alert('Error!');location.href='MyView.php'</script>";
  }else {
    echo  "<script type='text/javascript'>alert('Delete Successfully');location.href='MyView.php'</script>";
  }
 ?>

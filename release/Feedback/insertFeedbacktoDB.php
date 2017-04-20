<?php
  $feedback = $_POST['_feedback'];
  if (empty($_POST['_username'])) {
    $username = "unknown";
  } else {
    $username=$_POST['_username'];
  }
  if (empty($_POST['_mail'])) {
    $mail = "unknown";
  } else {
    $mail=$_POST['_mail'];
  }

  $feedback = htmlspecialchars($feedback, ENT_QUOTES);

  require("../connectDB.php");
  $sql="INSERT INTO Feedbacks
        VALUES('','$username','$mail','$feedback')";
  $result=mysql_query($sql);

  echo  "<script type='text/javascript'>alert('Thanks very much for your feedback :)');location.href='../Feedback/Feedback.php'</script>";
?>

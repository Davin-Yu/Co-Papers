<?php
  /**
   *  This code is learnt from http://jingyan.baidu.com/article/7f766daf436b9b4101e1d0e2.html
   */
  session_start();
  $_mailtarget = $_GET["_username"];
  require("../connectDB.php");
  $result = mysql_query ("SELECT *
                          FROM Users
                          WHERE username='$_mailtarget'", $connection);
  $row = mysql_fetch_array($result, MYSQL_NUM);
  $md5username = MD5($_mailtarget);
  $themail = "";
  if ($row) {
      $themail = $row[3];
  } else {
      echo  "<script type='text/javascript'>alert('User not Exist');location.href='../FindPassword/FindPassword.php'</script>";
      exit();
  }
  require("smtp.php");
  $smtpserver = "mail.davinyu.com";
  $smtpserverport = 25;
  $smtpusermail = "co-paper@davinyu.com";
  $smtpemailto = "$themail";
  $smtpuser = "co-paper@davinyu.com";
  $smtppass = "LightBlue";
  $mailsubject = "Reset Your Password";
  $mailbody = "Please click the link to reset your password: http://www.davinyu.com/copaper/FindPassword/Reset.php?us=$md5username";
  $mailtype = "TXT";
  $smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
  $smtp->debug = TRUE;
  $smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
  echo  "<script type='text/javascript'>alert('Please Check Your Email');location.href='../MainPage/MainPage.php'</script>";
 ?>

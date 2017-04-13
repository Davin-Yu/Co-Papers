<?php
/**
* This will authenticate the user login name and corresponding password from database.
*
* @author Davin-Yu
* @param  _username  The username transmit from UserLogin.html
* @param  _password  The password transmit from UserLogin.html
* @return print if succeed login message as feedback
* @see  #session_start()
*/
  if (!empty($_SESSION['user_id'])) {
    echo  "<script type='text/javascript'>alert('You have alreadly Logged in');location.href='../Login_Main/Login_Main.php'</script>";
    exit;
  }
  $Uname = $_GET["_username"];
  $Upass = MD5($_GET["_password"]);
  require("../connectDB.php");
  $result = mysql_query ("SELECT * FROM
                          Users", $connection);
  $flag = false;
  while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    if ($row[1] == $Uname and $row[2] == $Upass) {
      $flag = true;
      $db_user_id = $row[0];
      $db_username = $row[1];
    }
  }
  if ($flag == true) {
    $_SESSION['user_id'] = $db_user_id;
    $_SESSION['username'] = $db_username;
    echo  "<script type='text/javascript'>alert('Log In Successfully');location.href='../Login_Main/Login_Main.php'</script>";
  }else {
    echo  "<script type='text/javascript'>alert('Invalide Username or Password');location.href='../Login_Main/Login_Main.php'</script>";
  }
?>

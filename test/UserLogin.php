<?php
/**
* This will authenticate the user login information from database
* @param _username, _password
* @return print 'Right!...'' if success
*/
  session_start();  //This help to keep track of user info. from page to page
  if (!empty($_SESSION['user_id'])) {
    echo "You have alreadly login";
    exit;
  }
  $Uname = $_GET["_username"];
  $Upass = MD5($_GET["_password"]);
  $connection = mysql_connect("localhost","root","");
  mysql_select_db("grouppj", $connection);
  $result = mysql_query ("SELECT * FROM
                          Users", $connection);
  print "\n";
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
    echo "Right!";
    echo "You have login as ".$_SESSION['username'];
  }else {
    echo "Wrong!";
  }
?>

<? php
/**
* This record user IP address prevent hijacking happened.
* @author Davin-Yu
*/
  session_start();
  $user_check = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
  if (empty($_SESSION['username'])) {
    session_regenerate_id();
    $_SESSION['user_data'] = $user_check;
  }
  if (strcmp($_SESSION['user_data'],$user_check) !== 0) {
    session_regenerate_id();
    $_SESSION = array();
    $_SESSION['user_data'] = $user_check;
  }
 ?>

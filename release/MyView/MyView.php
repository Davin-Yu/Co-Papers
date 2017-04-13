<?php session_start();
require("../testLogin.php"); ?>
<html>
  <body>
    <div>
      <a href="../MyView/MyView.php"> Hello <?php if (!empty($_SESSION["username"])) {echo $_SESSION["username"];} else {echo "test";} ?></a> &nbsp
      <a href="../Login_Main/Login_Main.php ">Home</a>   &nbsp
      <a href="../MyViewSearchedResult/MyViewSearchedResult.php"> Search My Notes </a>  &nbsp
      <a href="../UserLogin/EndSession.php">Log out</a>
    </div>
    <img src="MyView.png" alt="logo">
  </body>
</html>

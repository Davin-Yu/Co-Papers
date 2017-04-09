<?php session_start(); ?>
<html>
  <body>
    <div>
      <a href="../MyView/MyView.php"> Hello <?php if (!empty($_SESSION["username"])) {echo $_SESSION["username"];} else {echo "test";} ?></a> &nbsp
      <a href="../MyView/MyView.php "> My View </a>  &nbsp
      <a href="../SearchedResult/SearchedResult.php"> Search </a>  &nbsp
      <a href="../UserLogin/EndSession.php">Log out</a>  &nbsp
    </div>
    <img src="MainPage.png" alt="logo">
  </body>
</html>

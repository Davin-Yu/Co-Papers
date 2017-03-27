<?php
/**
To demetermine whether the user has logged in or not
*/
session_start();
  if (empty($_SESSION['username'])) {
    echo "You Must Log in";
    exit;
  }
	?>
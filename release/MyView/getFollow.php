<?php
	require("../connectDB.php");
  $user_id = $_SESSION["user_id"];
  $result=mysql_query("SELECT *
                       FROM Followers
                       WHERE follwer_name = '$user_id'");
  while($row=mysql_fetch_array($result)){
    $result1=mysql_query("SELECT *
                         FROM Users
                         WHERE user_id=$row[1]");
    $row1=mysql_fetch_array($result1);
    echo <<< eod
    <ul class="created-notes-list">
        <h3><a href="../OtherView/OtherView.php?_user_id=$row[1]">$row1[1]</a>
        </h3>
        <div class="list-inter-span">
            <button type="botton" class="btn btn-default btn-xs avtive" id="unfollow-button" onclick="location='unfollow.php?trail=$row[0]'">Unfollow</button>
        </div>
    </ul>
    <div class="cut-off-line"></div>
eod;
  }
 ?>

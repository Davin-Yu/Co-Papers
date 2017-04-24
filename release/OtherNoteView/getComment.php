<?php
/**
 *  This will be able to print the comment with its user on MyNoteView page in specific
 *  HTML formate. Maybe be changed if in a different HTML format.
 *  @author Davin-Yu
 */

 if (empty($_GET["_note_id"])) {
   $Noteid = 1;    //For Testing
 } else {
   $Noteid = $_GET["_note_id"];
 }
 require("../connectDB.php");
 $result = mysql_query ("SELECT * FROM
                         Comments WHERE note_id = '$Noteid'", $connection);
 while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
   $name_result = mysql_query("SELECT * FROM
                              Users WHERE user_id = '$row[1]'",$connection);
   $com_name_row = mysql_fetch_array($name_result, MYSQL_NUM);
   $com_name = $com_name_row[1];
   /* Output */
   echo <<< eod
   <div class="Other-comments">
       <ul class="created-comments-list">
           <li class="comment" >
               <h4><a href="../OtherView/OtherView.php?_user_id=$row[1]">$com_name</a></h4>
               <div class="comment-content">
                   <p>$row[3]</p>
               </div>
eod;
  $result2 = mysql_query("SELECT * FROM
                        Replies WHERE comment_id = '$row[0]'", $connection);
  if ($row2 = mysql_fetch_array($result2, MYSQL_NUM)) {
    echo <<< eod
  <div>
    <p>
      <i>
      <hr>
      &nbsp&nbsp&nbsp
      <a href="../OtherView/OtherView.php?_user_id=$_otherID">$_username</a>
      : $row2[3]
      </i>
    </p>
  </div>
eod;
}

  echo <<< eod
           </li>
       </ul>
   </div>
eod;
 }
 ?>

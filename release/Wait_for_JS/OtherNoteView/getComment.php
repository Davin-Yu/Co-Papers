<?php
/**
 *  This will be able to print the comment with its user on MyNoteView page in specific
 *  HTML formate. Maybe be changed if in a different HTML format.
 *  @author Davin-Yu
 */

 $Noteid = $_GET["_note_id"];
 //$Noteid = 1;    //For Testing
 $connection = mysql_connect("localhost","root","");
 mysql_select_db("grouppj", $connection);
 $result = mysql_query ("SELECT * FROM
                         Comments WHERE note_id = '$Noteid'", $connection);
 while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
   $name_result = mysql_query("SELECT * FROM
                              Users WHERE user_id = '$row[1]'",$connection);
   $com_name_row = mysql_fetch_array($name_result, MYSQL_NUM);
   $com_name = $com_name_row[1];
   /* Output */
   echo <<< eod
   <div class="comt">
     <div class="comment">
       <div>
       <span class="username">
       $com_name
       </span>
       <span class="usercomments">
         <p>$row[3]<p>
       </span>
       </div>
       <br><br><br>
       <div class="reply">
       <input type="button"  name="Reply" id="button" value="Reply">
       </div>
     </div>
   </div>
eod;
 }
 ?>

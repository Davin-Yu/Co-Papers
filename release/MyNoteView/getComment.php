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
 $num = 0;
 while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
   $num = $num + 1;
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
               <div id="show$num">
    						<button type="button" id="reply" class="btn btn-primary" data-toggle="collapse"
    							data-target="#Comment-Edit-box$num">Reply
    						</button>
                <div id="Comment-Edit-box$num" class ="collapse">
                  <div class="form-group" id="commentAusers">
                    <textarea class="form-control" name="_reply" id="comment-textarea-$num" rows="5"></textarea>
                    <div class="comment-button" id="button-comment">
                      <button type="button" id="reply_2" class="btn btn-primary btn-sm" onclick="">Reply</button>
                    </div>
                  </div>
                </div>
           </li>
       </ul>
   </div>
eod;
 }
 ?>

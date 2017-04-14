<?php
	require("../connectDB.php");
  $user_id = $_SESSION["user_id"];
  $result=mysql_query("SELECT *
                       FROM Notes
                       WHERE ifpublicize=0 && user_id = '$user_id'");
  while($row=mysql_fetch_array($result)){
    echo <<< eod
                  <ul class="created-notes-list">
                      <li class="note">
                          <h4><a href="../MyNoteView/MyNoteView.php?_note_id=$row[0]">$row[2]</a>
                          </h4>
                          <h5>
                              <span class="glyphicon glyphicon-tags"></span>&nbsp
                              <span>$row[5];</span>
                              <span>$row[6];</span>
                          </h5>
                          <div class="list-inter-span">
                              <ul>
                                  <li>
                                      <span><a href="//$row[3]" target="_blank">View source</a></span>
                                  </li>
                                  <li>
                                      <span><a href="../MyNoteEdit/MyNoteEdit.php?_edit_id=$row[0]">Edit</a></span>
                                  </li>
                                  <li>
                                      <span><a href="deleteNote.php?_note_id=$row[0]">Delete</a></span>
                                  </li>
                              </ul>
                          </div>
                      </li>
                  </ul>
                  <div class="cut-off-line"></div>
eod;
  }
 ?>

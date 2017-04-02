<?php
include("connect.php");
include("SearchResults.html");
@session_start();
if(!empty($_GET['_title'])){
	$title=$_GET['_title'];
	$topic=$_GET['_topic'];
    $sql="select * from `notes` where `article` like '%$title%' and `topic`='$topic'";
	$query=mysql_query($sql);	
	while($rs=mysql_fetch_array($query)){
		$id=$rs['user_id'];
		$sql1="select * from `users` where `user_id`=$id";
		$query1=mysql_query($sql1);
		$rs1=mysql_fetch_array($query1);
		?>
		<li>
			<span class="text">
				<h3><?php echo $rs['article']?></h3>
				Tag:<?php echo $rs['tag']?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rs1['username']?>
			</span>
			<span class = "detail">
				<a href="OtherView.php?id=<?php echo $rs['note_id']?>"><input type="button"  name="Detail" id="button2" value="Detail"></a>
			</span>
		</li>
		<hr />
						

<?php	
}
}

?>
					</ul>
				</div>
			</form>
		</div>
		<?php 
		if(empty($_SESSION['username'])){?>			
			<div class="user">
				<a href="UserLogin.html">Login</a>
			</div>
		<?php }else{?>
			<div class="user">
				<a href="MyView.php">Hello <?php echo $_SESSION['username']?></a> | <a href="Log_Main.php">Home Page</a> | <a href="NoteCreate.html">New Note</a> | <a href="MainPage.php">Quit</a>
			</div>
		<?php }?>
	</body>
</html>
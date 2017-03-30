<?php
include("connect.php");
include("MyViewSearchResult.html");
@session_start();

if(!empty($_GET['_title'])){
	$title=$_GET['_title'];
	$topic=$_GET['_topic'];
	$sql="select * from `notes` where `article` like '%$title%' and `topic`='$topic'";
	$query=mysql_query($sql);	
	while($rs=mysql_fetch_array($query)){    //循环打印搜索结果
?>
<li>
							<span class="text">
								<h3><?php echo $rs['article']?></h3>
								Tag:<?php echo $rs['tag']?> 
							</span>
							<span class = "editandshow">
								<a href="MyNoteView.php?id=<?php echo $rs['note_id']?>"><input type="button"  name="Show" id="button2" value="Show"></a>
								<a href="MyNoteEdit.php?id=<?php echo $rs['note_id']?>"><input type="button"  name="Edit" id="button2" value="Edit"></a>
							</span>
						</li>
						<hr />
<?php }}?>
					</ul>
				</div><-- 设置超链接-->
				<div class="part4">
					<a href="NoteCreate.html"><input type="button"  name="CreateANew" id="button1" value="Create a New"></a>
					<br>
					<a href="MyView.php"><input type="button"  name="Open List" id="button1" value="Back to List"></a>
				</div>
			</form>
		</div>
		<div class="user">
			<a href="MyView.php">Hello <?php echo $_SESSION['username']?></a> | <a href="Log_Main.php">Home Page</a> | <a href="MainPage.php">Quit</a>
		</div>
	</body>
</html>
	<?php
		require('session.php');
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
		<title> XXX <!-- Need to be Writtern -->NoteView</title>
		<link href="../Style1.css" type=text/css rel=stylesheet>
</head>
	<body>
		<form action="follow.php" method="POST">
		<div class="user">
			Hello <?php echo $_SESSION["username"]?>  | <a href=LogMain.html>Home Page</a> | <a href=logOut.php name="quit">Quit</a>
		</div>
		<div class="main">
			<div class="part1">
				<h1>
					<!--<?php echo $_POST["visited_user"]?>-->'s Notes
				</h1>
			</div>
				<div class="part2">
					List
				</div>
				<div class="part3">
					<ul class="list">
						<li>
							<span class="text">
								<?php
			$conn=mysqli_connect('127.0.0.1','root','','grouppj',3306);
			$sql="SET NAMES UTF8";
			mysqli_query($conn,$sql);
$sql="select article,tag from notes WHERE ifpublicize=1 order by article";
		$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result)){
				echo "<h3>{$row['article']}</h3>{$row['tag']}";
				echo"<span class = 'editandshow'>";
				echo"<input type='button' name='Show' id='button2' value='Show' onclick=\"location.href='/208/OtherNoteView.php';\"/ >";
				echo"</span>";
				echo"<hr />";
            }

		mysqli_close($conn);
			?>
							</span>

						</li>
					</ul>
				</div>

				<div class="part4">
					<input type="submit"  name="Follow" id="button1" value="Follow">
				</div>

		</div>
		</form>
	</body>
</html>

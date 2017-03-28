	<?php
		require('session.php');
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
		<title>Personal View</title>
		<link href="../Style1.css" type=text/css rel=stylesheet>
</head>
	<body>

		<div class="user">
			Hello <?php $username=$_SESSION["username"];echo $username;?>  | Home Page | Quit
		</div>
		<div class="main">
			<div class="part1">
				<h1>
					Co-Papers --- My Notes
				</h1>
			</div>
			<form action="view.php" method="POST">
				<div class="part2">
					<div class = "span1">
						<input type="submit"  name="button" id="button" value="Search" onclick="location.href='/208/MyViewSearchResult.php?_article=text=&_tag=tag'";>	<!-- ????? -->
						<select name="tag">
							<option select="selected" value = "Choose">Choose Tag...</option>
						<?php
						require('tag.php');
		?>
						</select>
						<input type="text" id = "search1" name="text" placeholder="Search for...">
					</div>
				</div>
				</form>
				<div class="part3">

					<ul class="tabs">
						<li>
							<input type="radio" name="tabs" id="tab1" checked />
							<label for="tab1">List</label>
							<div id="tab-content1" class="tab-content">
								<div class="part4">
									<ul class="list">
										<li>
											<span class="text">
											<form action = "..\MyNoteEdit\MyNoteEdit.php">
<?php
			$article=null;
			$tag=null;
			$conn=mysqli_connect('127.0.0.1','root','','grouppj',3306);
			$sql="SET NAMES UTF8";
			mysqli_query($conn,$sql);
$sql="select article,tag from notes WHERE ifpublicize=1 order by article";
		$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result)){
				$article=$row['article'];
				$tag=$row['tag'];
				echo "<h3>$article</h3>$tag";
				echo"<span class = 'editandshow'>";
				echo"<input type='button' name='Show' id='button2' value='Show' onclick=\"location.href='/208/MyNoteView.php';\"/ >";
				echo"<input type='button' onclick=\"location.href='/208/MyNoteEdit.php?_article=$article&_tag=$tag';\"/' name='Edit' id='button2' value='Edit'>";
				echo"</span>";
				echo"<hr />";
            }
        $result=mysqli_query($conn,$sql);

		mysqli_close($conn);
			?>
			</span>
			</form>
									</ul>
								</div>
							</div>
						</li>

						<li>
						<input type="radio" name="tabs" id="tab2" />
						<label for="tab2">Draft</label>
							<div id="tab-content2" class="tab-content">
								<div class="part5">
									<ul class="list">
										<li>
											<span class="text">
												<?php
												$article=null;
			$tag=null;
			$conn=mysqli_connect('127.0.0.1','root','','grouppj',3306);
			$sql="SET NAMES UTF8";
			mysqli_query($conn,$sql);
$sql="select article,tag from notes WHERE ifpublicize=0 order by article";
		$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result)){
				$article=$row['article'];
				$tag=$row['tag'];
				echo "<h3>$article</h3>$tag";
				echo"<span class = 'edit'>";
				echo"<input type='button'  onclick=\"location.href='/208/MyNoteEdit.php?_article=$article&_tag=$tag';\"/' name='Edit' id='button2' value='Edit'>";
				echo"</span>";
				echo"<hr />";
            }
        $result=mysqli_query($conn,$sql);

		mysqli_close($conn);
			?>
			</span>
			</li>
				<hr />

								</div>
							</div>
						</li>
						</ul>
				</div>
				<div class="part6">
					<input type="button" onclick="location='NoteCreate.php?_username=$username'" name="CreateANew" id="button1" value="Create a New">
				</div>

		</div>
	</body>
</html>

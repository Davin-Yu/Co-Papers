	<?php
		session_start();
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
			Hello <?php if (!empty($_SESSION["username"])) {echo $_SESSION["username"];} else {echo "test";} ?> | <a href="../NoteCreate/NoteCreate.php ">Note Create</a> | <a href="../UserLogin/EndSession.php">Log out</a>
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
							<?php require("getTagfromDB.php") ?>
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
													require("getSaveNotes.php");
												 ?>
											</form>
											</span>
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
													require("getPublicNotes.php");
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

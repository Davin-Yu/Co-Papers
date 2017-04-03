<?php session_start() ?>
<html lang="en">
	<head>
	<meta charset="utf-8" />
		<title>Co-Papers</title>
		<link href="../Style1.css" type=text/css rel=stylesheet>
	</head>
	<body>
		<div class="user">
			Hello <?php if (!empty($_SESSION["username"])) {echo $_SESSION["username"];} else {echo "test";} ?> | <a href="../NoteCreate/NoteCreate.php ">Note Create</a> | <a href="../UserLogin/EndSession.php">Log out</a>
		</div>
		<div class = "main">
			<div class="title">
				<h1>Co-Papers</h1>
			</div>
			<form method="post">
				<div class="part2">
				<label class="text-base" for ="Search">Search</label>
				<br>
				<input type="text" id = "search1" name="text" placeholder="Search for...">
					<br>
					<label class="text-base" for="topics">List Topics</label><br>
					<select>
						<option select="selected" value = "Choose">Choose...</option>
						<option value = "Biochamisry">Biochamisry</option>
						<option value = "Computer Science">Computer Science</option>
						<option value = "Chemical">Chemical</option>
						<option value = "Literature">Literature</option>
						<option value = "Math">Math</option>
						<option value = "Medichine">Medicine</option>
						<option value = "Physics">Physics</option>
					</select>
					<br>
					<input type="submit"  id="button" value="Search">
				</div>
				<br><br>
				<div class="part3">
					<span class="spantitle1">
						<div>
							<h4>Hottest Notes</h4>
							<?php //require(getHotNote.php) ?>
							<span class="content">
								<h5>title</h5>
								<p class="creater">name</p>
								<p class="note"></p>
							</span>
							<span class="content">
								<h5>title</h5>
								<p class="creater">name2</p>
								<p class="note"></p>
							</span>
						</div>
						<div class="buttondiv">
							<span class="spanbutton1">
								<input type="submit"  id="button1" value="Last">
							</span>
							<span class="spanbutton2">
								<input type="submit"  id="button2" value="Next">
							</span>
						</div>
					</span>
				</div>
			</form>
		</div>
	</body>
</html>

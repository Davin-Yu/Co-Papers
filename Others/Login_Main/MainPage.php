<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login</title>
		<link href="../Style1.css" type=text/css rel=stylesheet>
	</head>
	<body>
		<div class="login">
			<a href="../UserLogin/UserLogin.html">Login</a>
		</div>
		<div class = "main">
			<div class="title">
				<h1>Co-Papers</h1>
			</div>
			<form method="post" action="MainPage.php">
				<div class="part2">
					<label class="text-base" for ="Search">Search</label>
					<br>
					<input type="text" id = "search1" name="text" placeholder="Search for...">
					<br>
					<label class="text-base" for="topics">List Topics</label><br>
					<select name="topic">
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
					<input type="submit"  id="button" value="Search" name="submit">
				</div>
				<br><br>
				<div class="part3">
					<h3>Hottest Notes</h3>
					<span>
						<?php require("getHotNote.php"); ?>
					</span>
				</div>
			</form>
		</div>
	</body>
</html>

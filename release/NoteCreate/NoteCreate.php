	<?php
		require('session.php');
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
		<title>Create New Notes</title>
		<link href="../Style1.css" type=text/css rel=stylesheet>
</head>
	<body>
		<div class="user">
			Hello <?php echo $_SESSION["username"]?> | <a href=LogMain.html>Home Page</a> |<a href=logOut.php name="quit">Quit</a>
		</div>
		<div class = "main">
			<div class="part1">
				<h1>
					Co-Papers --- Create
				</h1>
			</div>
			<div class = "part2">
				<form action="create_add.php" method ="POST">
					<div class="div1">
						<label class="text-base" for ="Paper Title">Paper Title</label><br>
						<input name = "PaperTitle" required="required" type="text"/>

					</div>
					<div class="div2">
						<label class="text-base" for="topics">List Topics</label><br>
						<select name="topic">
							<option select="selected" value = "Choose">Choose...</option>
							<option value = "Biochemisry">Biochemisry</option>
							<option value = "Computer Science">Computer Science</option>
							<option value = "Chemical">Chemical</option>
							<option value = "Literature">Literature</option>
							<option value = "Math">Math</option>
							<option value = "Medichine">Medicine</option>
							<option value = "Physics">Physics</option>
						</select>
					</div>
					<div class="div3">

						<label class="text-base" for ="Tag">Tag</label><br>
						<label><input type="radio" name="choose"  value=""/>New tag</label>
						<input name = "newTag" id="newTag" type="text"/>
						<label><input type="radio" name="choose" value=""/>Existent tag</label>
						<select name="existentTag"><option select="selected" value = "">Choose...</option>
						<?php
		require('tag.php');
	 ?>
						</select>
					</div>
					<div class="div4">
						<label class="text-base" for ="URL">URL</label><br>
						<input name = "URL" required="required" type="text"/>
					</div>
					<div class="div5">
						<label class="text-base" for ="Notes">Notes</label><br>
						<textarea name="Notes"></textarea>
					</div>
					<div class="div6">
						<input type="submit" id="button" value="Save" name="save">
						<input type="submit" id="button" value="publicize" name="publicize">

					</div>
			</div>
		</div>
		</form>
	</body>
</html>

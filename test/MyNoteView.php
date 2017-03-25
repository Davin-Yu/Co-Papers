<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
			<title>MyNoteView</title>
			<link href="Style1.css" type=text/css rel=stylesheet>
	</head>
	<body>
	<?php
		require('getMyNoteView.php');
	 ?>
		<div class="user">
			Hello username | Home Page | Quit
		</div>
		<div class="main">
			<div class="part1">
				<h1>
					Co-Papers --- My Notes
				</h1>
			</div>
			<form>
				<div class="part2">
					<h2><?php echo $_article ?></h2>
					<div class="content">
						<p> <?php echo $_note_content ?>
						</p>
					</div>
					<div class="URL">
					<p>Link: <a href="<?php echo $_article_url?>"> <?php echo $_article_url ?></a></p>
					</div>
					<hr/>
					<?php
							require('getComment.php')
					 ?>
				</div>
				<div class="part3">
					<input type="submit"  name="CreateANew" id="button1" value="Create a New">
					<input type="button"  name="Edit" id="button1" value="Edit">
				</div>
			</form>
		</div>
	</body>

</html>

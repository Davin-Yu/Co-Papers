<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8" />
		<title>PersonalView</title>
			<link href="Style1.css" type=text/css rel=stylesheet>
	</head>
	<body>
		<?php
			require('getMyNoteView.php');
		 ?>
		<div class="user">
			Hello username <!-- <?php echo $_SESSION["user_id"]?> --> | Home Page | Quit
		</div>
		<div class="main">
			<div class="part1">
				<h1>
					XXX's <!-- <?php echo $_GET["visit_user"]?> -->  Notes
				</h1>
			</div>
			<form>
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
				</form>
				<div class="part3">
					<input type="button"  name="Follow" id="button1" value="Follow">
					<input type="button"  name="Comment" id="button1" value="Comment">
				</div>
			</form>
		</div>
	</body>
</html>

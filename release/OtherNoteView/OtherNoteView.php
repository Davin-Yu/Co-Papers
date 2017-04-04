<?php require("inchot.php"); ?>
<html lang="en">
	<head>
	<meta charset="utf-8" />
		<title>PersonalView</title>
			<link href="../Style1.css" type=text/css rel=stylesheet>
	</head>
	<body>
		<?php
			require('getOtherNoteView.php');
		 ?>
		<div class="user">
			Hello <?php if (!empty($_SESSION["username"])) {echo $_SESSION["username"];} else {echo "test";} ?> | <a href="followUser.php">Follow</a> | <a href="../UserLogin/EndSession.php">Log out</a>
		</div>
		<div class="main">
			<div class="part1">
				<h1>
					<?php if (!empty($_GET["visit_user"])) {echo $_GET["visit_user"];} else {echo "test";}?>   Notes
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
				</div>
			</form>
		</div>
	</body>
</html>

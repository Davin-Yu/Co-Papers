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
					<h2>Ubisoft</h2>
					<div class="content">
						<p> <?php echo "pangzihhh"?>
						</p>
					</div>
					<div class="URL">
					<p>Link: <a href="url(https://www.ubisoft.com/en-GB/)">https://www.ubisoft.com/en-GB/</a></p>
					</div>
					<hr />
					<div class="comt">
						<div class="comment">
							<div>
							<span class="username">
							Bale
							</span>
							<span class="usercomments">
								<p>Yes, the game of the Ubisoft is very funny. I like it.....<p>
							</span>
							</div>
							<br><br><br>
							<div class="reply">
							<input type="button"  name="Reply" id="button" value="Reply">
							</div>
						</div>
					</div>
					<div class="comt">
						<div class="comment">
							<div>
							<span class="username">
							Jim
							</span>
							<span class="usercomments">
								<p>Maybe the service, need to modify...yes<p>
							</span>
							</div>
							<br><br><br>
							<div class="reply">
							<input type="button"  name="Reply" id="button" value="Reply">
							</div>
						</div>
					</div>
					<div class="comt">
						<div class="comment">
							<div>
							<span class="username">
							Tom
							</span>
							<span class="usercomments">
								<p><p>
							</span>
							</div>
							<br><br><br>
							<div class="reply">
							<input type="button"  name="Reply" id="button" value="Reply">
							</div>
						</div>
					</div>
					<div class="comt">
						<div class="comment">
							<div>
							<span class="username">
							Jane
							</span>
							<span class="usercomments">
								<p>I saw the building of the Ubi in Paris<p>
							</span>
							</div>
							<br><br><br>
							<div class="reply">
							<input type="button"  name="Reply" id="button" value="Reply">
							</div>
						</div>
					</div>
					<div class="comt">
						<div class="comment">
							<div>
							<span class="username">
							XXX
							</span>
							<span class="usercomments">
								<p>nothing<p>
							</span>
							</div>
							<br><br><br>
							<div class="reply">
							<input type="button"  name="Reply" id="button" value="Reply">
							</div>
						</div>
					</div>
				</div>
				<div class="part3">
					<input type="submit"  name="CreateANew" id="button1" value="Create a New">
					<input type="button"  name="Edit" id="button1" value="Edit">
				</div>
			</form>
		</div>
	</body>

</html>

<?php
		require('session.php');

	 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8" />
		<title>Create New Notes</title>
		<style type = "text/css">
			html{
				width:100%;
				height:100%;
				font-family: Tahoma;
				font-weight:bolder;
			}
			body{
				width:100%;
				height:100%;
			}
			.main{
				position:absolute;
				left:50%;
				transform:translate(-35%,0);
			}
			.part1{
				position:relative;
				left:-50%
			}
			h1{
				text-shadow: 0px 0px 10px;
				font-size:35px;
			}
			.user{
				position:fixed;
				font-size:15px;
				right:5px;
				top:5px;
			}
			.div1 input{
				width:458px;
				margin-top:5px;
				margin-bottom:10px;
				padding:5px;
				font-size:15px;
				border-radius:10px;
			}
			.div2 select{
				width:472px;
				margin-top:5px;
				margin-bottom:10px;
				padding:5px;
				font-size:15px;
				border-radius:10px;
			}
			.div3 input{
				margin-top:5px;
				margin-bottom:10px;
				padding:5px;
				border-radius:10px;
			}
			.div3 #newTag{
				width:120px;
				margin-top:5px;
				margin-bottom:10px;
				padding:5px;
				border-radius:10px;
			}
			.div3 select{
				width:120px;
				margin-top:5px;
				margin-bottom:10px;
				padding:5px;
				border-radius:10px;
			}
			.div4 input{
				width:458px;
				margin-top:5px;
				margin-bottom:10px;
				padding:5px;
				font-size:15px;
				border-radius:10px;
			}
			.div5 textarea{
				width:458px;
				height:300px;
				overflow:auto;
				margin-top:5px;
				margin-bottom:10px;
				padding:5px;
				font-size:15px;
				border-radius:10px;
			}
			.div6 #button{
				position:relative;
				left:50%;
				width:100px;
				margin-top:20px;
				margin-bottom:20px;
				padding:5px;
				font-size:15px;
				font-weight:bolder;
				border-radius:10px;
				background-color:#4a77d4;
				color:#fff;
			}

		</style>
	</head>
	<body>
		<div class="user">
			Hello <?php echo $_SESSION["username"]?> | <a href=LogMain.html>Home Page</a> |<a href=logOut.php name="quit">Quit</a>
		</div>
		<div class = "main">
			<div class="part1">
				<h1>
					Co-Papers --- Edit
				</h1>
			</div>
			<div class = "part2">
			<?php require ('note.php');?>
				<form action="create_add.php" method ="POST">
					<div class="div1">

						<label class="text-base" for ="Paper Title">Paper Title</label><br>
						<input name = "PaperTitle" required="required" type="text" value="<?=$_article?>" />

					</div>
					<div class="div2">
						<label class="text-base" for="topics">List Topics</label><br>
						<select name="topic">
							<option select="selected" value = "<?=$_topic?>"><?php echo $_topic;?></option>
							<option value = "Biochamisry">Biochamisry</option>
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
						<label><input type="radio" name="choose" id="choose" value=""/>New tag</label>
						<input name = "newTag" id="newTag" type="text"/>
						<label><input type="radio" name="choose" id="choose" value=""/>Existent tag</label>
						<select name = "existentTag">
							<option select="selected" value = "">Choose...</option>
									<?php
										require('tag.php');
	 								 ?>
						</select>
					</div>
					<div class="div4">
						<label class="text-base" for ="URL">URL</label><br>
						<input name = "URL" required="required" type="text" value="<?=$_article_url?>"/>
					</div>
					<div class="div5">
						<label class="text-base" for ="Notes">Notes</label><br>
						<textarea name="Notes" value="<?=$_note_content?>"><?php echo $_note_content;?></textarea>
					</div>
					<div class="div6">
						<input type="submit" id="button" value="Save" name="save">
						<input type="submit" id="button" value="Publicize" name="publicize">
					</div>

			</div>
		</div>
		</form>
	</body>
</html>

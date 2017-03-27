	<?php
		require('session.php');
	 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset=utf-8" />
		<title>XXXView</title>
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
				margin:0 auto;
			}
			.part1{
				margin:0 auto;
				margin-left:120px;
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
				z-index:99999;
			}
			.part2{
				margin:0 auto;
				margin-left:180px;
				position:absolute;
				top:120px;
				z-index:999;
				font-size:30px;
			}
			.part3{
				margin:0 auto;
				margin-left:150px;
				margin-right:70px;
				margin-top:100px;
				width:900px;
				height:600px;
				border-width:medium;
				border-style:solid;
				border-radius:10px;
				font-family:Tahoma;
				font-size:20px;
				overflow:auto;
			}
			.part4{
				margin:0 auto;
				margin-top:-50px;
				margin-left:1100px;
			}
			.part4 #button1{
				width:200px;
				height:50px;
				padding:5px;
				border-radius:10px;
				font-size:16px;
				font-weight:bolder;
				background-color:#4a77d4;
				color:#fff;
			}
			.list{
				list-style:none;
			}
			.list .text{
				display:block;
				margin-left:170px;
			}
			.list .editandshow{
				display:block;
				margin-left:700px;
				margin-top:-50px;
				margin-bottom:50px;
			}
			.list #button2{
				width:50px;
				padding:5px;
				border-radius:10px;
				font-size:16px;
				font-weight:bolder;
				background-color:#4a77d4;
				color:#fff;
			}
		</style>
	</head>
	<body>
		<form action="follow.php" method="POST">
		<div class="user">
			Hello <?php echo $_SESSION["username"]?>  | <a href=LogMain.html>Home Page</a> | <a href=logOut.php name="quit">Quit</a>
		</div>
		<div class="main">
			<div class="part1">
				<h1>
					<!--<?php echo $_POST["visited_user"]?>-->'s Notes
				</h1>
			</div>
				<div class="part2">
					List
				</div>
				<div class="part3">
					<ul class="list">
						<li>
							<span class="text">
								<?php
			$conn=mysqli_connect('127.0.0.1','root','','grouppj',3306);  
			$sql="SET NAMES UTF8";
			mysqli_query($conn,$sql);
$sql="select article,tag from notes WHERE ifpublicize=1 order by article";
		$result=mysqli_query($conn,$sql); 
			while($row=mysqli_fetch_assoc($result)){
				echo "<h3>{$row['article']}</h3>{$row['tag']}";
				echo"<span class = 'editandshow'>";
				echo"<input type='button' name='Show' id='button2' value='Show' onclick=\"location.href='/208/OtherNoteView.php';\"/ >";
				echo"</span>";	
				echo"<hr />";
            }
 
		mysqli_close($conn); 
			?>
							</span>
				
						</li>
					</ul>
				</div>
			
				<div class="part4">
					<input type="submit"  name="Follow" id="button1" value="Follow">
				</div>
				
		</div>
		</form>
	</body>
</html>
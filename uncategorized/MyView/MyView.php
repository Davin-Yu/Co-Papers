	<?php
		require('session.php');
	 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset=utf-8" />
		<title>PersonalView</title>
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
				margin-left:500px;
				position:absolute;
				top:120px;
				z-index:999;
				font-size:30px;
			}
			.part2 .span1{
				position:relative;
				left:400px;
				top:20px;
			}
			.part2 .span1 input,select{
				float:right;
			}
			.part2 .span1 #search1{
				width:200px;
				font-size:16px;
				font-weight:bolder; 
				outline:none;
				background-image:url(http://www.clker.com/cliparts/r/2/Q/h/3/L/system-search-hi.png);
				background-repeat:no-repeat;
				background-size: 21px 18px; 
				background-position: 95%;
			}
			.part2 .span1 select{
				width:120px;
				font-size:16px;
			}
			.part2 .span1 #button{
				width:100px;
				font-size:16px;
				font-weight:bolder;
				background-color:#4a77d4;
				color:#fff;
			}
			.part3{
				margin:0 auto;
				margin-left:350px;
				margin-right:70px;
				margin-top:50px;
				width:1000px;
				height:700px;
				font-family:Tahoma;
				font-size:20px;
			}
			.part3 .tabs {
				float: left;
				list-style: none;
				position: relative;
				text-align:left;
				margin:0 auto;
				width:900px;
				height:500px;
				font-family:Tahoma;
				font-size:20px;
			}
			.part3 .tabs li {
				float: left;
				display: block;
			}
			.part3 .tabs input[type="radio"] {
				position: absolute;
				top: -9999px;
				left: -9999px;
			}
			.part3 .tabs label {
				display: block;
				padding: 14px 21px;
				border-radius: 2px 2px 0 0;
				font-size: 20px;
				font-weight: normal;
				text-transform: uppercase;
				background: #CDC5BF;
				cursor: pointer;
				position: relative;
				top: 4px;
				-webkit-transition: all 0.2s ease-in-out;
				-moz-transition: all 0.2s ease-in-out;
				-o-transition: all 0.2s ease-in-out;
				transition: all 0.2s ease-in-out;
			}
			.part3 .tabs label:hover {
				background: #fff;
			}
			.part3 .tabs .tab-content {
				z-index: 2;
				display: none;
				width: 100%;
				font-size: 17px;
				line-height: 25px;
				padding: 20px;
				position: absolute;
				top: 53px;
				left: 0;
				background: #EDEDED;
			}
			.part3 .tabs [id^="tab"]:checked + label {
				top: 0;
				padding-top: 17px;
				background: #EDEDED;
			}
			.part3 .tabs [id^="tab"]:checked ~ [id^="tab-content"] {
				display: block;
			}
			.part4{
				height:600px;
				border-width:medium;
				border-style:solid;
				border-radius:10px;
				overflow:auto;
			}
			.part4 .list{
				list-style:none;
			}
			.part4 .list li{
				float:none;
			}
			.part4 .list .text{
				display:block;
				margin-left:120px;
			}
			.part4 .list .editandshow{
				display:block;
				margin-left:600px;
				margin-top:-50px;
				margin-bottom:50px;
			}
			.part4 .list #button2{
				margin-left:20px;
				margin-right:20px;
				width:50px;
				padding:5px;
				border-radius:10px;
				font-size:16px;
				font-weight:bolder;
				background-color:#4a77d4;
				color:#fff;
			}
			.part5{
				height:600px;
				border-width:medium;
				border-style:solid;
				border-radius:10px;
				overflow:auto;
			}
			.part5 .list{
				list-style:none;
			}
			.part5 .list li{
				float:none;
			}
			.part5 .list .text{
				display:block;
				margin-left:120px;
			}
			.part5 .list .edit{
				display:block;
				margin-left:600px;
				margin-top:-50px;
				margin-bottom:50px;
			}
			.part5 .list #button2{
				margin-left:20px;
				margin-right:20px;
				width:100px;
				padding:5px;
				border-radius:10px;
				font-size:16px;
				font-weight:bolder;
				background-color:#4a77d4;
				color:#fff;
			}
			.part6{
				float:left;
				margin: 0 auto;
				margin-top:-500px;
				margin-left:100px;
			}
			.part6 #button1{
				width:200px;
				height:50px;
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

		<div class="user">
			Hello <?php $username=$_SESSION["username"];echo $username;?>  | <a href=LogMain.html>Home Page</a> | <a href=logOut.php name="quit">Quit</a>
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
						<input type="submit"  name="button" id="button" value="Search" onclick="location.href='/208/MyViewSearchResult.php?_article=text=&_tag=tag'";>
						<select name="tag">
							<option select="selected" value = "Choose">Choose Tag...</option>
						<?php  
						require('tag.php');
		?>
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
											<form action = "MyNoteEdit.php">
<?php
			$article=null;
			$tag=null;
			$conn=mysqli_connect('127.0.0.1','root','','grouppj',3306);  
			$sql="SET NAMES UTF8";
			mysqli_query($conn,$sql);
$sql="select article,tag from notes WHERE ifpublicize=1 order by article";
		$result=mysqli_query($conn,$sql); 
			while($row=mysqli_fetch_assoc($result)){
				$article=$row['article'];
				$tag=$row['tag'];
				echo "<h3>$article</h3>$tag";
				echo"<span class = 'editandshow'>";
				echo"<input type='button' name='Show' id='button2' value='Show' onclick=\"location.href='/208/MyNoteView.php';\"/ >";
				echo"<input type='button' onclick=\"location.href='/208/MyNoteEdit.php?_article=$article&_tag=$tag';\"/' name='Edit' id='button2' value='Edit'>";
				echo"</span>";	
				echo"<hr />";
            }
        $result=mysqli_query($conn,$sql);  
 
		mysqli_close($conn); 
			?>
			</span>	
			</form>
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
												$article=null;
			$tag=null;
			$conn=mysqli_connect('127.0.0.1','root','','grouppj',3306);  
			$sql="SET NAMES UTF8";
			mysqli_query($conn,$sql);
$sql="select article,tag from notes WHERE ifpublicize=0 order by article";
		$result=mysqli_query($conn,$sql); 
			while($row=mysqli_fetch_assoc($result)){
				$article=$row['article'];
				$tag=$row['tag'];
				echo "<h3>$article</h3>$tag";
				echo"<span class = 'edit'>";
				echo"<input type='button'  onclick=\"location.href='/208/MyNoteEdit.php?_article=$article&_tag=$tag';\"/' name='Edit' id='button2' value='Edit'>";
				echo"</span>";
				echo"<hr />";
            }
        $result=mysqli_query($conn,$sql);  
 
		mysqli_close($conn); 
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
 
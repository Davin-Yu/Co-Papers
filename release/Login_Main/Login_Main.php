<?php
include("connect.php");
include("Log_Main.html");
@session_start();
if(!empty($_POST["submit"])){
	$title=$_POST["text"];
	$topic=$_POST["topic"];?>
<script>location.href="SearchResults.php?_title=<?php echo $title?>&_topic=<?php echo $topic?>"</script>
<?php
}
	
	
?>
<div class="user">
			<a href="MyView.php">Hello <?php echo $_SESSION['username']?></a> | <a href="NoteCreate.html">New Note</a> | <a href="MainPage.php">Quit</a>
</div>
</body>
</html>





<?php
include("connect.php");
include("MainPage.html");
@session_start();
if(!empty($_POST["submit"])){
	$title=$_POST["text"];
	$topic=$_POST["topic"];?>
<script>location.href="SearchResults.php?_title=<?php echo $title?>&_topic=<?php echo $topic?>"</script>
<?php
}
	
	
?>
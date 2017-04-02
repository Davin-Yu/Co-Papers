<?php
include("MainPage.html");
@session_start();
$connection = mysql_connect("localhost","root","");
mysql_select_db("grouppj", $connection);
if(!empty($_POST["submit"])){
	$title=$_POST["text"];
	$topic=$_POST["topic"];?>
<script>location.href="SearchResults.php?_title=<?php echo $title?>&_topic=<?php echo $topic?>"</script>
<?php
}

?>

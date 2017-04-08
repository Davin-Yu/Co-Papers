<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MyNoteView</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="MyNoteView.css">
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	<?php require('getMyNoteView.php'); ?>
	<div class="container-fluid">
        <!--Top Navgiation-->
		<nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!--Logo & Button section -->
                <div class="navbar-header">
                    <div class="collapse-button">
                        <button type="button" class="navbar-toggle"
                        data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <img src="LOGO.png" alt="logo">
                </div>
                <!-- Menu section -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-left">
											<li><a href="../MyView/MyView.php"> Hello <?php if (!empty($_SESSION["username"])) {echo $_SESSION["username"];} else {echo "test";} ?></a></li>
											<li><a href="../MainPage/MainPage.php ">Home</a></li>
											<li><a href="../UserLogin/EndSession.php">Log out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Main Content-->
        <div class="center-block">
            <div class="Page-Title">
                <p>My Note</p>
            </div>
			<div class="Note-body">
                <div class="Note-content">
                    <div class="Note-contet-acitivity-title">
                        <h3><?php echo $_article ?></h3>
                    </div>
                    <div class="Note-contet-acitivity-body">
											<p><?php echo $_note_content ?></p>
                    </div>
                </div>
                <div class="url-button">
                     <button type="button" class="btn btn-primary btn-sm" onclick="location.href='../MyNoteEdit/MyNoteEdit.php?_edit_note=<?php echo $Noteid; ?>'">View Source</button>
                </div>
            </div>

            <?php require("getComment.php"); ?>
            <!--Bottom button-->
            <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
                <div class="container-fluid">
                    <div class="center-block" id="button-block">
                        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='../NoteCreate/NoteCreate.php'">Create New</button>
                        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='../MyNoteEdit/MyNoteEdit.php?_edit_note=<?php echo $Noteid; ?>'" id="button-Edit">Edit</button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OtherView</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="OtherView.css">
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	<?php require("getOtherUser.php"); ?>
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
											<li><a href="../Login_Main/Login_Main.php ">Home</a></li>
											<li><a href="../UserLogin/EndSession.php">Log out</a></li>
                    </ul>
										<button type="button" class="btn btn-default btn-sm avtive" id="new-note-button" onclick="location.href='../NoteCreate/NoteCreate.php'">
                    	<span class="glyphicon glyphicon-plus"></span> Create New Note
                    </button>
                </div>
            </div>
        </nav>
        <!--Main Content-->
        <div class="center-block">
        	<div class="Page-Title">
        		<p><?php echo $_other_name; ?>'s Notes List</p>
        		<h4>Here you can see all of this user's notes</h4>
        	</div>
        	<div class="other-Logo">
                <img src="other-logo.png" alt="other-logo">
            </div>
            <!--Results Box-->
            <div class="Other-Notes-Lists">
            <?php require("getResult.php"); ?>

						<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
                <div class="container-fluid">
                    <div class="center-block" id="button-block">
											<button type="button" class="btn btn-primary btn-lg" onclick="location.href='<?php echo "followUser.php?_follow_user_id=".$_otherid; ?>'">Follow</button>
                    </div>
                </div>
            </nav>
            </div>
        </div>
	</div>
</body>
</html>

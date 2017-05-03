<?php
  $md5username = $_GET["us"];
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reset Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="FindPassword.css">
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
        <!--Top Navgiation-->
		<nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!--Logo & Button section -->
                <div class="navbar-header">
                    <img src="LOGO.png" alt="logo">
                </div>
                <!-- Menu section -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="../MainPage/MainPage.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Main Content-->
        <div class="center-block">
            <div class="Page-Title">
                <p>Reset your Password</p>
                <h4>Please enter your new password</h4>
            </div>
            <!--Form-->
            <div class="Create-Form">
                <form role="form" action="ResetToDB.php" method="GET">
                    <!--PassWord-->
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" class="form-control" name="_password" required="required" minlength = "8" id="password">
                        <div class="support-hint1">
                            <div class="triangle-right"></div>
                            <div class="hint1">
                                <p>Passwords must have at least 8 characters and contain at least two of the following: uppercase letters, lowercase letters, numbers, and symbols.</p>
                            </div>
                        </div>
												<div class="text-caption">8-character minimum; case sensitive</div>
                    </div>
										<!--Bottom button-->
				            <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
				                <div class="container-fluid">
				                    <div class="center-block" id="button-block">
				                        <button type="submit" name="us" value="<?php echo $md5username;?>" class="btn btn-primary btn-lg" id="create">Submit</button>
				                    </div>
				                </div>
				            </nav>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

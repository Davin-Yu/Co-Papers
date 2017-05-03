<!DOCTYPE html>
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
                <p>Find Your Account</p>
                <h4>We will sent an e-mail to your to let you reset your password.</h4>
            </div>
            <!--Form-->
            <div class="Create-Form">
                <form role="form" action="sendMail.php" method="GET">
                    <!--Email-->
                    <div class="form-group">
                        <label for="name" >Username</label>
                        <input type="text" class="form-control" name="_username" required="required" id="email" placeholder="username">
                        <div class="support-hint">
                            <div class="triangle-right"></div>
                            <div class="hint">
                                <p>Enter you Username</p>
                            </div>
                        </div>
                    </div>
										<!--Bottom button-->
				            <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
				                <div class="container-fluid">
				                    <div class="center-block" id="button-block">
				                        <button type="submit" class="btn btn-primary btn-lg" id="create">Sent</button>
				                    </div>
				                </div>
				            </nav>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AccountCreate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="AccountCreate.css">
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
                <p>Creating A New Account</p>
                <h4>You can use any new name as the user name for your new Co-Papers account.</h4>
            </div>
            <div class="Account-Logo">
                <img src="account-logo.png" alt="note-logo">
            </div>
            <!--Form-->
            <div class="Create-Form">
                <form role="form" action="UserSignUpDB.php" method="POST">
                    <div class="form-group">
                        <!--UserName-->
                        <label for="name">UserName</label>
                        <input type="text" class="form-control" name="_username" required="required" id="username" placeholder="Enter a username">
                        <div class="support-hint">
                            <div class="triangle-right"></div>
                            <div class="hint">
                                <p>Username as your log account</p>
                            </div>
                        </div>
                    </div>
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
                    <!--Reenter Password-->
                    <div class="form-group">
                        <label for="name">Reenter Password</label>
                        <input type="password" class="form-control" name="_password2" required="required" id="password">
                    </div>
                    <!--Email-->
                    <div class="form-group">
                        <label for="name" >Email</label>
                        <input type="email" class="form-control" name="_mail" id="email" placeholder="someone@example.com">
                        <div class="support-hint">
                            <div class="triangle-right"></div>
                            <div class="hint">
                                <p>Enter you email address</p>
                            </div>
                        </div>
                    </div>
                    <!--Note box-->
                    <div class="form-group">
                        <label for="name">Biography</label>
                        <textarea class="form-control" name="_bio" rows="14"></textarea>
                        <div class="support-hint-BIO">
                            <div class="triangle-right"></div>
                            <div class="hint">
                                <p>Informations about yourself.</p>
                            </div>
                        </div>
                    </div>
										<!--Bottom button-->
				            <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
				                <div class="container-fluid">
				                    <div class="center-block" id="button-block">
				                        <button type="submit" class="btn btn-primary btn-lg" id="create">Create</button>
				                    </div>
				                </div>
				            </nav>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

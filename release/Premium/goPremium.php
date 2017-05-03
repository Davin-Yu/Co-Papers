<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Go Premium</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="premium.css">
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	<!--Top Navgiation-->
		<nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!--Logo-->
                <div class="navbar-header">
                    <img src="LOGO.png" alt="logo">
                </div>
							<div class="center-block" id="Logo">
                   <p>GoPremium!</p>
               </div>
            </div>
        </nav>
			<div class="Create-Form">
        <form role="form" action="ifCanGoPremium.php" method="POST">
          <p> GoPremium will allow you to upload pdf files to Co-Paper! <p>
					<div class="textarea">
						<label for="name">Invitation code</label>
						<input type="password" class="form-control" name="_code"></input>
					</div>
					<div class="textarea">
          	<button type="submit" class="btn btn-primary btn-lg">Let's Rock!</button>
          </div>
				</form>
		</div>
</body>
</html>

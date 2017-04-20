<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Feedback</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="feedback.css">
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
                   <p>Feedback</p>
               </div>
            </div>
        </nav>
			<div class="Create-Form">
          <form role="form" action="insertFeedbacktoDB.php" method="POST">
					<div class="textarea">
						<label for="name">Suggestions</label>
						<textarea class="form-control" name="_feedback" rows="14" required="required"></textarea>
					</div>
					<p>Please input username and email, so we can contact you.
					<div class="textarea">
						<label for="name">Username</label>
						<input  type="text" class="form-control" name="_username"></input>
					</div>
					<div class="textarea">
						<label for="name">Email</label>
						<input type="email" class="form-control" name="_mail"></input>
					</div>
					<div class="textarea">
          	<button type="submit" class="btn btn-primary btn-lg">Submit</button>
          </div>
				</form>
		</div>
</body>
</html>

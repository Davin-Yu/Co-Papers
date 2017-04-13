<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LoginMain</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="LoginMain.css">
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
        <!--Top Header-->
		<div class="Header">
            <div class="container-fluid">
               <div class="center-block" id="Logo">
                   <p>Co-Papers</p>
               </div>
               <div class="nav-list">
                   <ul class="right-spans">
										 <li><a href="../MyView/MyView.php"> Hello <?php if (!empty($_SESSION["username"])) {echo $_SESSION["username"];} else {echo "test";} ?></a></li>
										 <li><a href="../NoteCreate/NoteCreate.php ">Create New Note</a></li>
										 <li><a href="../UserLogin/EndSession.php">Log out</a></li>
                    </ul>
               </div>
            </div>
        </div>
        <!--Main Content-->
        <div class="center-block">
            <div class="Mainsearch">
                <div class="center-block" id="abstract">
                    <p>Discover scientific literature, and make your notes visible.</p>
                </div>
                <div class="center-block" id="Search-form">
                    <div class="form-group" id="searchKey">
                        <input type="text" class="form-control" id="firstname" placeholder="Search Keywords">
                    </div>
                    <div class="form-group" id="topicsChoice">
                        <select class="form-control">
                            <option>Choose Topics</option>
                            <option value = "Biochamisry">Biochamisry</option>
                            <option value = "Computer Science">Computer Science</option>
                            <option value = "Chemical">Chemical</option>
                            <option value = "Literature">Literature</option>
                            <option value = "Math">Math</option>
                            <option value = "Medichine">Medicine</option>
                            <option value = "Physics">Physics</option>
                        </select>
                    </div>
                    <div class="form-group" id="button">
                        <div class="center-block" id="search-button">
                            <button type="button" class="btn btn-primary btn-lg">Search Now</button>
                        </div>
                    </div>
                </div>
            </div>
			<div class="center-block">
			<button type="button" class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#demo" id = "followPeople">
				Followed Users
			</button>
				<div id="demo" class="collapse">
					<div class="followed">
						<h3>Followed Users</h3>
						<table class="table" border="1px">
							<tr>
								<td>Bale</td>
							</tr>
							<tr>
								<td>Tom</td>
							</tr>
							<tr>
								<td>Tom</td>
							</tr>
							<tr>
								<td>Tom</td>
							</tr>
							<tr>
								<td>Tom</td>
							</tr>
							<tr>
								<td>Tom</td>
							</tr>
							<tr>
								<td>Tom</td>
							</tr>
							<tr>
								<td>Tom</td>
							</tr>
					</table>
					</div>
				</div>
			</div>
            <div class="Hottest">
                <div class="center-block">
                     <p>Hottest Notes</p>
                </div>
            </div>
            <div class="Hottest-notes">
                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel Pointers -->
                    <div id="pointer">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
							<li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>
							<li data-target="#myCarousel" data-slide-to="7"></li>
                            <li data-target="#myCarousel" data-slide-to="8"></li>
                        </ol>
                    </div>
                    <!-- Carousel Projects -->
                    <div class="carousel-inner" id="content">
                        <div class="item active">
                            <div class="center-block" id="item0">
                                <div class="hottest-note">
                                    <h3>title 1</h3>
                                    <p class="creater">name 1</p>
                                    <p class="note">asdasdasdaasdasdasdadfdfdfdfdfdf
									dfdfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddsdasd</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="center-block" id="item0">
								<div class="hottest-note">
                                    <h3>title 2</h3>
                                    <p class="creater">name 2</p>
                                    <p class="note">asdasdasdaasdasdasdadfdfdfdfdfdf
									dfdfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddsdasd</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="center-block" id="item0">
								<div class="hottest-note">
                                    <h3>title 3</h3>
                                    <p class="creater">name 3</p>
                                    <p class="note">asdasdasdaasdasdasdadfdfdfdfdfdf
									dfdfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddsdasd</p>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="center-block" id="item0">
								<div class="hottest-note">
                                    <h3>title 4</h3>
                                    <p class="creater">name 4</p>
                                    <p class="note">asdasdasdaasdasdasdadfdfdfdfdfdf
									dfdfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddsdasd</p>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="center-block" id="item0">
								<div class="hottest-note">
                                    <h3>title 5</h3>
                                    <p class="creater">name 5</p>
                                    <p class="note">asdasdasdaasdasdasdadfdfdfdfdfdf
									dfdfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddsdasd</p>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="center-block" id="item0">
								<div class="hottest-note">
                                    <h3>title 6</h3>
                                    <p class="creater">name 6</p>
                                    <p class="note">asdasdasdaasdasdasdadfdfdfdfdfdf
									dfdfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddsdasd</p>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="center-block" id="item0">
								<div class="hottest-note">
                                    <h3>title 7</h3>
                                    <p class="creater">name 7</p>
                                    <p class="note">asdasdasdaasdasdasdadfdfdfdfdfdf
									dfdfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddsdasd</p>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="center-block" id="item0">
								<div class="hottest-note">
                                    <h3>title 8</h3>
                                    <p class="creater">name 8</p>
                                    <p class="note">asdasdasdaasdasdasdadfdfdfdfdfdf
									dfdfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddsdasd</p>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="center-block" id="item0">
								<div class="hottest-note">
                                    <h3>title 9</h3>
                                    <p class="creater">name 9</p>
                                    <p class="note">asdasdasdaasdasdasdadfdfdfdfdfdf
									dfdfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddddddddddddddddddddddddd
									dddddddddddddddddddddddddddsdasd</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <!-- Carousel Navigation -->
                        <a class="carousel-control left" href="#myCarousel"
                        data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel"
                        data-slide="next">&rsaquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <div class="center-block" id="footer">
            <div class="footer-span">
                <p><a href="https://github.com/violazz/Group_Project_dev">About us</a></p>
            </div>
            <div class="footer-porperty">
                <p>© 2017 Co-Papers.net. All rights reserved.</p>
            </div>
        </div>
        <!--Hidden loginBox-->
        <div id="loginBox"  style="display: none;">
            <div id="loginModal" class="modal show">
                <div class="modal-dialog">
                    <div class="modal-content" id="LBOX">
                        <div class="modal-header">
                            <button type="button" class="close" onClick="loginBox.style.display='none';">x</button>
                            <h1 class="text-center text-primary">Sign In</h1>
                        </div>
                        <div class="modal-body">
                            <form action="" class="form col-md-12 center-block">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Email or Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-lg btn-block">Sign In</button>
                                    <span id="forgetpass"><a href="#">Forgot password</a></span>
                                    <span><a href="#" class="pull-right">Sign up</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

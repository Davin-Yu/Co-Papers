<?php session_start();
require("../testLogin.php"); ?>
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
										 <li><a href="../MyView/MyView.php"> <?php if (!empty($_SESSION["username"])) {echo $_SESSION["username"];} else {echo "test";} ?>'s NoteBook |</a></li>
										 <li><a href="../NoteCreate/NoteCreate.php">Create Note |</a></li>
										 <li><a href="../UserLogin/EndSession.php">Log out</a></li>
                    </ul>
               </div>
            </div>
        </div>
        <!--Main Content-->
				<div class="center-block">
            <div class="Mainsearch">
                <div class="center-block" id="abstract">
                    <p>Discover scientific literature, <br>
											 Publicize your own notes.</p>
                </div>
								<form action="linker.php" class="center-block" id="Search-form" rol="search" method="POST">
                    <div class="form-group" id="searchKey">
											<input type="text" class="form-control" name="_keyword" placeholder="Keywords" />
                    </div>
                    <div class="form-group" id="topicsChoice">
                        <select class="form-control" name="_topic">
													<option value = "Others">Others Topics</option>
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
                            <button type="submit" class="btn btn-primary btn-lg">Search Now</button>
                        </div>
                    </div>
	                </form>
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
										<?php require("getHotNote.php"); ?>
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
                <p><a href="../AboutUs/AboutUs.html" target="_blank">About us</a> |
									 <a href="../Feedback/Feedback.php" target="_blank">Feedback</a></p>
            </div>
            <div class="footer-porperty">
                <p>© 2017 Co-Papers. All rights reserved.</p>
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

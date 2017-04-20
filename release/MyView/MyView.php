<?php session_start();
      require("../testLogin.php");
      require("getNumber.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PersonalView</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="PersonalView.css">
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
                    <!--Form-->
                    <form  action="linker.php" class="navbar-form navbar-right" id="header-form" rol="search" method="POST">
                        <div class="form-group">
                            <select class="form-control col-lg-5"  name="_tag">
                              <?php echo "<option>Choose Tag</option>"; ?>
                              <?php require("getTagfromDB.php") ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Keywords" name="_keyword" required="required" />
                        </div>
                        <button type="submit" class="btn btn-default">Search My Notes</button>
                    </form>
                </div>
            </div>
        </nav>
        <!--Main Content-->
        <div class="center-block">
            <div class="Left-nav">
                <p class="Left-nav-Title">Lists</p>
                <a href="MyView.php">
                    <div class="lsit1">
                        <div class="list-pic">
                            <img src="my note.png" alt="my notes">
                        </div>
                        <div class="list-words">
                            <p class="list-sub-title">My Notes</p>
                            <p class="list-description">Here you can see the literature notes you created.</p>
                            <p class="list-info"><span class="glyphicon glyphicon-eye-open"></span> I have <?php echo $pub_article_num; ?> notes.</p>
                        </div>
                    </div>
                </a>
                <a href="MyViewDrafts.php">
                    <div class="list2">
                        <div class="list-pic">
                            <img src="my drafts.png" alt="my drafts">
                        </div>
                        <div class="list-words">
                            <p class="list-sub-title">My Drafts</p>
                            <p class="list-description">Here you can see the literature notes you haven't submited.</p>
                            <p class="list-info"><span class="glyphicon glyphicon-eye-open"></span> I have <?php echo $draft_article_num; ?> note drafts</p>
                        </div>
                    </div>
                </a>
                <a href="MyViewFollower.php">
                    <div class="list3">
                        <div class="list-pic">
                            <img src="my follow.png" alt="my follow">
                        </div>
                        <div class="list-words">
                            <p class="list-sub-title">Users I Followed</p>
                            <p class="list-description">Here's where you can see a list of all the users you're following.</p>
                            <p class="list-info"><span class="glyphicon glyphicon-eye-open"></span> I am following <?php echo $follower_num; ?>  users.</p>
                        </div>
                    </div>
                </a>
                <div class="left-nav-footer">
                    <span>© 2017 Co-Papers. All rights reserved</span>
                    <br>
                    <span><a href="../AboutUs/AboutUs.html" target="_blank">About us</a></span>
                </div>
            </div>
            <!--Main container-->
            <div class="main-container">
                <div class="main-title">
                    <p>Notes</p>
                </div>
                <div class="title-slogan">
                    <p>Literature notes you have created</p>
                </div>
                <?php require("getPublicNotes.php"); ?>
            </div>
        </div>
    </div>
</body>
</html>

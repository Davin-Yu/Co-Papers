<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OtherNoteView</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="OtherNoteView.css">
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	<?php require('getOtherNoteView.php'); ?>
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
                <p><?php echo $_username; ?>'s Note</p>
            </div>
			<div class="Note-body">
                <div class="Note-content">
                    <div class="Note-contet-acitivity-title">
                        <h3>UBISOFT</h3>
                    </div>
                    <div class="Note-contet-acitivity-body">
                        <p>Release of cytokines and chemokines related severe sepsis can cause multiple organ failure include high mortality. One of the potential candidates acting as amplifiers of the innate immune response, the triggering receptor expressed on myeloid cells (TREM)-1 that is expressed by neutrophils, macrophages, and mature monocytes (CD14high), as well as by hypoxic dendritic cells, appears to play a central role. Immuno receptor TREM-1s amplify the production of proinflammatory cytokines (inflammatory response) mediated by toll-like receptors engagement. Observation that TREM1 inhibitory peptide such LR12 prevented hyper responsiveness and death in several experimental models of septic shock makes it an important target for the new drug discovery. Moreover, high expression of TREM1 witnessed in the cardiac disorders, rheumatoid arthritis and other autoimmune disorders demands an immediate drug candidate to take control over it.</p>
                        <p> Recently peptidomimetics LP-17, LR12 and SCHOOL peptides have been found promising to alleviate TREM1 expression. Peptides nature of these refrain them from being potential drug candidates. Peptidomimetics exhibit poor pharmacokinetics and pharmacodynamics profiles. Here we aim to develop small chemical molecules inhibitors of TREM1, with better pharmacological index.</p>
                    </div>
                </div>
                <div class="url-button">
                     <button type="button" class="btn btn-primary btn-sm">View Source</button>
                </div>
                <div class="Comment-Edit-box">
                    <div class="form-group" id="commentAusers">
                        <label>Tom</label>
                        <textarea class="form-control" id="comment-textarea" rows="3"></textarea>
                        <div class="comment-button" id="button-comment">
                            <button type="button" class="btn btn-primary btn-sm">Comment</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Other-comments-first">
                <ul class="created-comments-list">
                    <li class="comment">
                        <h4><a href="">Jane</a></h4>
                        <div class="comment-content">
                            <p>Yes, I support above, the connection isn't well, but the game is great</p>
                        </div>
                        <h5>
                            <a href="">Reply</a>
                        </h5>
                    </li>
                </ul>
            </div>

            <div class="Other-comments">
                <ul class="created-comments-list">
                    <li class="comment">
                        <h4><a href="">Jane</a></h4>
                        <div class="comment-content">
                            <p>Yes, I support above, the connection isn't well, but the game is great</p>
                        </div>
                        <h5>
                            <a href="">Reply</a>
                        </h5>
                    </li>
                </ul>
            </div>

            <div class="Other-comments">
                <ul class="created-comments-list">
                    <li class="comment" >
                        <h4><a href="">Jane</a></h4>
                        <div class="comment-content">
                            <p>Yes, I support above, the connection isn't well, but the game is great</p>
                        </div>
                        <h5 >
                            <a href="">Reply</a>
                        </h5>
                    </li>
                </ul>
            </div>
			<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
                <div class="container-fluid">
                    <div class="center-block" id="button-block">
                        <button type="button" class="btn btn-primary btn-lg">Follow</button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>
</html>

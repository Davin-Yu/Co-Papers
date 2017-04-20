<?php
 	session_start();
  require("../testLogin.php");
	require("getNoteInfo.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MyNoteEdit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="MyNoteEdit.css">
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
                </div>
            </div>
        </nav>
        <!--Main Content-->
        <div class="center-block">
            <div class="Page-Title">
                <p>Editing Your Note</p>
                <h4>Add note of your current literature and we will find the right auidence to follow your note.</h4>
            </div>
            <div class="Note-Logo">
                <img src="edit-logo.png" alt="note-logo">
            </div>
            <!--Form-->
            <div class="Create-Form">
                <form role="form" action="editNotetoDB.php?_note_id=<?php echo $_note_id; ?>" method="POST">
                    <div class="form-group">
                        <!--Paper Title-->
                        <label for="name">Paper Title</label>
                        <input type="text" class="form-control" name="_article"  required="required" id="title-name" value="<?php echo $_article ?>">
                        <div class="support-hint">
                            <div class="triangle-right"></div>
                            <div class="hint">
                                <p>Titles help people understand your note at a glance.</p>
                            </div>
                        </div>
                    </div>
                    <!--Choose Topics-->
                    <div class="form-group">
                        <label for="name">List Topics</label>
                        <select name="_topic" required="required" class="form-control">
													<option select="selected" value = "<?php echo $_topic ?>"><?php echo $_topic ?></option>
													<option value = "Biochemisry">Biochemisry</option>
													<option value = "Computer Science">Computer Science</option>
													<option value = "Chemical">Chemical</option>
													<option value = "Literature">Literature</option>
													<option value = "Math">Math</option>
													<option value = "Medical">Medicine</option>
													<option value = "Physics">Physics</option>
													<option value = "Others">Others</option>
                        </select>
                        <div class="support-hint">
                            <div class="triangle-right"></div>
                            <div class="hint">
                                <p>A topic helps people know the field of your note.</p>
                            </div>
                        </div>
                    </div>
                    <!--Choose & Create Tags-->
                    <div class="form-group">
                        <div class="tag-form">
                            <label for="name">Tags</label>
                            <br>
                            <input type="radio" name="optionsRadiosinline" id="New-tag-radio" value="option1" >New Tag
                            <input type="text" class="form-control" name="_tag1" id="New-Tag-name" placeholder="Enter a new tag">
                            <input type="radio" name="optionsRadiosinline" id="Create-tag-radio" value="option2" checked>Existent Tag
                            <select name="_tag2"  class="form-control" id="Existent-tag-name">
																<?php echo "<option value ={$_tag}>{$_tag}</option>"; ?>
                                <?php require("getTagfromDB.php") ?>
                            </select>
                        </div>
                        <div class="support-hint-tag">
                            <div class="triangle-right"></div>
                            <div class="hint">
                                <p>Tags help you quickly search your note.</p>
                            </div>
                        </div>
                    </div>
                    <!--URL-->
                    <div class="form-group">
                        <label for="name" class="url-label">URL</label>
                        <input type="text" class="form-control" name="_article_url" required="required" id="title-name" value = "<?php echo $_article_url; ?>">
                        <div class="support-hint">
                            <div class="triangle-right"></div>
                            <div class="hint">
                                <p>URL address helps you switch to the source of the literature of note.</p>
                            </div>
                        </div>
                    </div>
                    <!--Note box-->
                    <div class="form-group">
                        <label for="name">Note</label>
                        <textarea class="form-control" name="_note_content" required="required" rows="14"> <?php echo $_note_content ?></textarea>
                        <div class="support-hint-note">
                            <div class="triangle-right"></div>
                            <div class="hint">
                                <p>Now you can add what you want to show about the literature.</p>
                            </div>
                        </div>
                    </div>
										<!--Bottom button-->
										<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
												<div class="container-fluid">
														<div class="center-block" id="button-block">
																<button type="submit" class="btn btn-primary btn-lg" name="_ifpublicize" value="0">Save</button>
																<button type="submit" class="btn btn-primary btn-lg" name="_ifpublicize" value="1" id="button-publisize">Publisize</button>
														</div>
												</div>
										</nav>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

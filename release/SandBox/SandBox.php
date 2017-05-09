<?php
  require("../connectDB.php");
  $result = mysql_query ("SELECT * FROM Sand", $connection);
  $row = mysql_fetch_array($result, MYSQL_NUM);
 ?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  	<title>SandBox</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
  	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="SandBox.css">
  	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
  	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="postSand.js"></script>
    <script src="refreshNew.js"></script>
    <?php
      for ($i=0; $i<651; $i++) {
        echo <<< eod
        <script type="text/javascript">
            $(document).ready(function(){
              $("#div$i").click(function(){
                postSand($i);
                if (myarr[$i] == 0) {
                  $("#div$i").fadeTo("slow",0);
                  myarr[$i] = 1;
                } else {
                  $("#div$i").fadeTo("slow",1);
                  myarr[$i] = 0;
                }
              });
            });
        </script>
eod;
      }
     ?>

      <script type="text/javascript">
         $(document).ready(function(){
           $("#how").click(function(){
              $("#hide").fadeTo("slow",0);
           });
         });
     </script>

     <script>
        window.setInterval(refreshNew,1000);
     </script>
  </head>

  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
      <div class="navbar-header">
        <img src="LOGO.png" alt="logo">
      </div>
			<div class="center-block" id="Logo">
        <p>SandBox</p>
      </div>
      </div>
    </nav>

      <script>
        var myarr = new Array(651);
        for (var i=0;i<651;i++) {
          myarr[i] = 0;
        }
      </script>

      <div class="Create-Form" >
        <div class="textarea">
          <p> Refresh Your Mind in Two Minutes </p>
        </div>
        <div class="textarea" id="pangzi">
        <?php
          require("getSand.php");
         ?>
        </div>
        <div id="how">
          <p id="hide"> CopyRight © Davin Yu </p>
        </div>
		  </div>

      <div id="renew">

      </div>
 </body>

</html>

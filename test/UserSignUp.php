<?php
/**
* This will log user register info. to Database
* @param _username, _password, _mail, _bio
* @return print 'successful' if succeed inserting
*/
  $Uname = $_GET["_username"];
  $Upass = MD5($_GET["_password"]);   //encrpt the userpassword
  $Umail = $_GET["_mail"];
  $Ubio = $_GET["_bio"];
  if ($Uname == "" or $Upass == "") {
    /* Check if user provide both username and password */
    echo "Please provide sufficant information";
  } else {
    $connection = mysql_connect("localhost","root","");
    mysql_select_db("grouppj", $connection);
    /* Check if have registered or not */
    $res = mysql_query ("SELECT * FROM
                         Users", $connection);
    $flag = false;
    while ($row = mysql_fetch_array($res, MYSQL_NUM)) {
       if ($row[1] == $Uname) {
         $flag = true;
       }
     }
     if ($flag == true) {
       echo "Username invalide";
     }else {
       /* log into database */
       $result = mysql_query("SELECT COUNT(*) FROM Users");
       $count = mysql_result($result, 0);
       $count = $count + 1;
       $query = "INSERT INTO Users VALUES ('$count','$Uname','$Upass','$Umail','$Ubio')";
       $result2 = mysql_query($query);
       if ($result2){
         echo "successful";
       }
     }
  }
?>

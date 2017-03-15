<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <title> GP </title>
  </head>
  <body>
    <pre>
      <?php
        $connection = mysql_connect("localhost","root","");
        mysql_select_db("grouppj", $connection);
        $result = mysql_query ("SELECT * FROM
                                user", $connection);
        print "\n";
        while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
          foreach ($row as $attribute)
            print "{$attribute}";
          print "\n";
        }
      ?>
    </pre>
  </body>
</html>

<?php
    $topic = $_POST["_topic"];
    $keyword = $_POST["_keyword"];
    echo  "<script> location.href='../MyViewSearchedResult/MyViewSearchedResult.php?_topic=$topic&_keyword=$keyword' </script>";
 ?>

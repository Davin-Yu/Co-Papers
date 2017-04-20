<?php
    $tag = $_POST["_tag"];
    $keyword = $_POST["_keyword"];
    echo  "<script> location.href='../MyViewSearchedResult/MyViewSearchedResult.php?_tag=$tag&_keyword=$keyword' </script>";
 ?>

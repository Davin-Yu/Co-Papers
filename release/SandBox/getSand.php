<?php
  $k = 0;
  for ($i=0; $i<21; $i++) {
    for ($j=0; $j<31; $j++) {
      echo <<< eod
<div id="div$k" value= "div$k" style="margin:0px;border:0;padding:0;width:25px;height:25px;background-color:black;display:inline-block;";></div>
eod;
      $k = $k + 1;
    }
    echo "<br>";
  }

  for ($i=0; $i<651; $i++) {
    if ($row[1][$i] == 1) {
      echo <<< eod
      <script> $("#div$i").fadeTo(0,0);
               myarr[$i] = 1;
      </script>
eod;
    }else {
      echo <<< eod
      <script> $("#div$i").fadeTo(0,1);
               myarr[$i] = 0;
      </script>
eod;
    }
  }
 ?>

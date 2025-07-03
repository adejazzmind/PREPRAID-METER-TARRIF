<html>
    <body>
        <?php
  $unit;
  $Amount= 100000;
  if($Amount>=100000){
    echo $Amount/250 ." units.";
  }
  else if ($Amount >= 50000 && $Amount < 10000){
    echo $Amount/150 ."units.";
  }
 else if ($Amount >= 20000 && $Amount < 50000){
    echo $Amount/75 ."units.";
  }
  else if ($Amount >= 10000 && $Amount < 20000){
    echo $Amount/50 ."units.";
  }
  else if ($Amount < 10000){
    echo $Amount/25 ."units.";
  }
    ?>
</body>
</html>
<?php
  for($i = 1; $i < 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0) {
      echo "$i: fizbuz\n";
    } else if($i % 3 == 0) {
      echo "$i: fiz\n";
    } else if ( $i % 5 == 0) {
      echo "$i: buz\n";
    }
  }
  

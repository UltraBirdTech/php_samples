<?php
  for( $i = 1; $i < 100; $i++ ) {
    $s = '';
    if ( $i % 3 == 0 ) { $s = $s . 'fiz'; }
    if ( $i % 5 == 0 ) { $s = $s . 'buzz'; }
    if ( $s != '' )   { echo "$i: $s\n"; }
  }
  

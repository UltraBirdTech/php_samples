<?php
  $array = [];
  CONST ZUN_DOKO = array('ズン', 'ドコ');
  // loop
  while( true ) {
    $char = ZUN_DOKO[array_rand(ZUN_DOKO, 1)];
    print_r($char);
    array_push($array, $char);
    // array の長さが5の場合のみ確認する
    if ((count($array)) === 5) {
      // check
      if ( implode('', $array) === 'ズンズンズンズンドコ' ) { 
        print_r("KI ☆ YO ☆ SHI !!\n");
        break;
      }
      // shift
      array_shift($array); 
    } 
  }

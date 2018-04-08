<?php
  CONST ZUN_DOKO = array('ズン', 'ドコ');
  CONST ZUN_DOKO_STRING = 'ズンズンズンズンドコ';
  CONST ZUN_DOKO_CHECK_COUNT = 5;
  $array = []; // 格納する配列を定義
  while( true ) {
    $char = ZUN_DOKO[array_rand(ZUN_DOKO, 1)];
    print_r($char);
    array_push($array, $char);
    // array の長さが5の場合のみ確認する
    if ((count($array)) === ZUN_DOKO_CHECK_COUNT ) {
      if ( implode('', $array) === ZUN_DOKO_STRING ) {
        print_r("KI ☆ YO ☆ SHI !!\n");
        break;
      }
      array_shift($array); // shift
    } 
  }

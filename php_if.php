<?php

$char = 'char';

if($char == !isValid(true)) {
  echo 'true';
} else {
  echo 'false';
}

/**
* 何かしらの値（メールアドレスや電話番号）の値が正当か確認するメソッド 
*/
function isValid($boolean) {
  return $boolean;
}

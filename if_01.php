<?php

$char = 'char';

if($char == !isValid($char)) {
  echo 'true';
} else {
  echo 'false';
}

/**
* 何かしらの値（メールアドレスや電話番号）の値が正当か確認するメソッド 
*/
function isValid() {
  return true; // 実際は検証してtrue or false
}

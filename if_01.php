<?php

$target = 'valid target';

if($target == !isValid($target)) {
  echo 'false'; // エラー処理（エラー文言入れて画面に表示)
  return 'something';
}

// ビジネスロジックが続く

/**
* 何かしらの値（メールアドレスや電話番号）が正当か確認するメソッド 
*/
function isValid($target) {
  return false; // 実際は$targetの正当性を検証してtrue or false
}

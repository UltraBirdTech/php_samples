<?php

if (false) {
  # true
} else {
  print("falseはfalse だよ\n");
}

if (null) {
  # true
} else {
  print("nilはfalseだよ\n");
}

if (0) {
  # true
} else {
  print("数値の0はfalseだよ\n");
}

if (0.0) {
  # true
} else {
  print("浮動小数の0はfalseだよ\n");
}

if ('0') {
  # true
} else {
  print("文字列の0はfalseだよ\n");
}

$zero_array = Array();
if ($zero_array) {
  # true
} else {
  print("配列の長さが0の場合はfalseだよ\n");
}


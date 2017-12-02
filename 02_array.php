<?php
# 配列
# 宣言
$person[0] = 'Edison';
$person[1] = 'Wankel';
$person[2] = 'Crapper';

var_dump($person);

# これでも宣言可能
$person = array('Edison', 'Wankel', 'Crapper');

# 繰り返し
foreach ($person as $name) {
  echo "Hello, {$name}\n";
}

# 連想配列
$creator = array('Light bulb'   => 'Edison',
                'Rotary Engin' => 'Wankel',
                'Toilet'       => 'Crapper');

foreach ($creator as $invention => $inventor) {
  echo "($inventor) created the ($invention)\n";
}


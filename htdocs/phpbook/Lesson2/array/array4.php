<?php
// 変数名に続けて[キー]として値を代入すると配列変数に値を格納できる
$people[0] = '佐藤';
$people[1] = '鈴木';
$people[2] = '高橋';

foreach ($people as $key => $value) {
  echo 'キーは' . $key . '、名前は' . $value . '<br>';
}
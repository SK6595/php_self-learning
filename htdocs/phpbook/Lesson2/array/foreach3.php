<?php
$name = [
  0 => '佐藤',
  1 => '鈴木',
  2 => '高橋'
];

// foreachでのループ処理ではキーを扱うこともできる
foreach ($name as $key => $value) {
  echo 'キーは' . $key . '、名前は' . $value . '<br>';
}
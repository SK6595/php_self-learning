<?php
function tax($price) {
  return $price * 1.1;
}

# 以下のように書くと 環境によっては空白だったり エラーが表示される
# PHPは可能な限り適切な型に変換して処理を続けてくれる
$sample_price = tax('文字列');
echo '消費税込みの値段：' . $sample_price . '円';


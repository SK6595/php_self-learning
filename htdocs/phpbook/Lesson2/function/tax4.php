<?php
function tax($price) {
  # 関数内の処理からechoが消え 代わりにretrun文が追加
　return $price * 1.1;
}
# tax(100)の返り値が$sample_priceに代入される
$sample_price = tax(100);
echo '消費税込みの値段：' . $sample_price . '円';



<?php
function tax($price) {
  echo $price * 1.1;
}

$a = 100;
# 関数のパラメータには変数を指定することもできる
tax($a);
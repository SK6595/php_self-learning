<?php
function tax($price) {
  echo $price * 1.1;
}
# 関数を実行するには関数名にパラメータを付けて呼び出す
tax(100);
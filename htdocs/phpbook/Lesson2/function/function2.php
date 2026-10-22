<?php
$a = "abcdefg";
# strlen()という関数は パラメータに渡した文字列の長さを整数で返す
# strlen()関数はvar_dump()の用に結果を出力する働きはもたない
$b = strlen($a);
echo $b;
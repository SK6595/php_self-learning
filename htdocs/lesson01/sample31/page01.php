<?php
require('dir1/dir2/intax.php');

$price = 150;
$price_tax = intax($price);
echo $price_tax;
?>
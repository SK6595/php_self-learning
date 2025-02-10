<?php
date_default_timezone_set('Asia/Tokyo');

$time = strtotime('+1 day');
$day = date('n/j(D)', $time);
echo $day . '<br>';

$time = strtotime('+1 day');
$day = date('n/j(D)', $time);
echo $day . '<br>';
?>
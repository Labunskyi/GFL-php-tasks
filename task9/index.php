<?php

include 'libs/Helper.php';

$arr = ['Val1', 'Val2', 'Val3', 'Val4'];
$ol = print_r(Helper::listing('ol', $arr));

$ul = print_r(Helper::listing('ul', $arr));

$arr2 = ['Term1' => 'Val1', 'Term2' => 'Val2', 'Term3' => 'Val3', 'Term4' => 'Val4'];
$termin = print_r(Helper::termin($arr2));

$select = print_r(Helper::select($arr));

$radio = print_r(Helper::radio($arr));

$check = print_r(Helper::check($arr));

$arr3 = ['1.1', '1.2', '1.3', '2.1', '2.2', '2.3', '3.1', '3.2', '3.3'];
$table = print_r(Helper::table($arr3, 3));

include 'templates/index.php';
?>

<?php
include 'libs/Helper.php';

$arr = ['Val1', 'Val2', 'Val3'];
print_r(Helper::list('ol', 'li', $arr));

print_r(Helper::list('ul', 'li', $arr));

$arr = ['Term1' => 'Val1', 'Term2' => 'Val2', 'Term3' => 'Val3'];
print_r(Helper::termin('dl', 'dt', 'dd', $arr));

print_r(Helper::select('select', 'option', $arr));

print_r(Helper::radio('form', 'input', $arr));

print_r(Helper::check('form', 'input', $arr));
?>

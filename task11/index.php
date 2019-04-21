<?php

include 'config.php';

include 'libs/Product.php';

$newProduct = new Product(USER, PASSWORD);
print_r($newProduct->select(1));

$newProduct->delete(24);

$newProduct->setTitle('book332sww3');
$newProduct->setPrice(1235403);
$newProduct->setDiscount(323453);
$newProduct->setDescription('new 2book b4oo333k book');
//$newProduct->setId(19);
$newProduct->save();

//include 'templates/index.php';

?>
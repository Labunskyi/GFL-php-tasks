<?php

include 'config.php';
include 'libs/Sql.php';


$sql = new Sql(USER, PASSWORD);

$sql->select()->setField('user.name')->setField('pc.name')->from('user')->rightJoin()->table('pc')->on('pc.name = user.name')->execute();

$sql->insert()->into('category')->setField('id_category')->setField('name_category')->setValue('16')->setValue('sem')->execute();

$sql->delete()->from('category')->where('id_category = 10')->execute();

$sql->update()->table('category')->set('name_category = vova')->where('id_category = 11')->execute();

include 'templates/index.php';

?>

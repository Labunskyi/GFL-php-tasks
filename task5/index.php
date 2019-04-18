<?php
include 'config.php';
include 'libs/iWorkData.php';
include 'libs/SessionClass.php';
include 'libs/CookieClass.php';
include 'libs/IniClass.php';
include 'libs/JsonClass.php';
include 'libs/SqlClass.php';

function saveData(iWorkData $obj){
	if (isset($key, $val)) {
		$obj->saveData($key, $val);
	}
}

function getData(iWorkData $obj){
	if (isset($key)) {
		$obj->getData($key);
	}
}

function deleteData(iWorkData $obj){
	if (isset($key)) {
		$obj->deleteData($key);
	}
}

$session = new SessionClass();
$session->saveData('session', 4);
$printGetSession = print_r($session->getData('session'));
$printDelSession = print_r($session->deleteData('session'));

$cookie = new CookieClass();
$cookie->saveData('cookie', 4);
$printGetCookie = print_r($cookie->getData('cookie'));
$printDelCookie = print_r($cookie->deleteData('cookie'));

$sql = new SqlClass();
$sql->saveData('id_category', '106');
$printGetSql = print_r($sql->getData('id_category'));
$printDelSql = print_r($sql->deleteData('id_category'));

$ini = new IniClass();
$ini->saveData('init', 4);
$printGetIni = print_r($ini->getData('init'));
$printDelIni = print_r($ini->deleteData('init'));

$json = new JsonClass();
$json->saveData('json', '4');
$printGetJson = print_r($json->getData('json'));
$printDelJson = print_r($json->deleteData('json'));

saveData($session);
getData($session);
deleteData($session);

saveData($cookie);
getData($cookie);
deleteData($cookie);

saveData($sql);
getData($sql);
deleteData($sql);

saveData($ini);
getData($ini);
deleteData($ini);

saveData($json);
getData($json);
deleteData($json);

include 'templates/index.php';
?>

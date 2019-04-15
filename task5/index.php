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
$printGetSession = $session->getData('session');
$printDelSession = $session->deleteData('session');

$cookie = new CookieClass();
$cookie->saveData('cookie', 4);
$printGetCookie = $cookie->getData('cookie');
$printDelCookie = $cookie->deleteData('cookie');

$sql = new SqlClass();
$sql->saveData('id_category', '106');
$printGetSql = $sql->getData('id_category');
$printDelSql = $sql->deleteData('cookie');

$ini = new IniClass();
$ini->saveData('ini', 4);
$printGetIni = $ini->getData('ini');
$printDelIni = $ini->deleteData('ini');

$json = new JsonClass();
$json->saveData('json', '4');
$printGetJson = $json->getData('json');
$printDelJson = $json->deleteData('json');

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

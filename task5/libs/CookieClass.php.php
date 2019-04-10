<?php
class CookieClass implements iWorkData
{
    private $vars = array();
  
    public function saveData($key, $val)
    {
        setcookie("TestCookie", $val, time()+36);
        $_COOKIE[$key] = $val;
        print_r($_COOKIE);
    }

    public function getData($key)
    {
        if(isset($_COOKIE[$key])){
            return $_COOKIE[$key];
        }
		return null;
    }

    public function deleteData($key)
    {
        if(isset($_COOKIE[$key])){
            unset($_COOKIE[$key]);
        }
    }
}
?>
<?php
class CookieClass implements iWorkData
{
    public function saveData($key, $val)
    {
        setcookie($key, $val, time() +36);
        $_COOKIE[$key] = $val;
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
            setcookie($key, "", time() -36);
            unset($_COOKIE[$key]);
            return true;
        }
        return null;
    }
}

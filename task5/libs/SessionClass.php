<?php
class SessionClass implements iWorkData
{
    private $vars = array();
  
    public function saveData($key, $val)
    {
        $_SESSION[$key] = $val;
        print_r($_SESSION);
    }

    public function getData($key)
    {
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
		return null;
    }

    public function deleteData($key)
    {
        if(isset($_SESSION[$key])){
            unset($_SESSION[$key]);
            return true;
        }
        return null;
    }
}
?>

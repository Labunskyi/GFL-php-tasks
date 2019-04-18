<?php
class IniClass implements iWorkData
{
	
	protected $parse = array();
	protected $saveData = array();	
  
    public function saveData($key, $val)
    {	
		$this->parse = parse_ini_file(INI_PATH);
		$this->saveData[$key] = $val;
		$this->merge = array_merge($this->parse, $this->saveData);
		$str = '';
				foreach ($this->merge as $key => $value) {
				$str .= $key . '=' . $value . PHP_EOL;
			}
		file_put_contents(INI_PATH, $str);
    }

    public function getData($key)
    {	
		$this->parse = parse_ini_file(INI_PATH);
		if(isset($this->parse[$key])){
			$this->parse[$key];
			return $this->parse[$key];
		}
		return null;
    }

    public function deleteData($key)
    {	
		$this->parse = parse_ini_file(INI_PATH);
		if(isset($this->parse[$key])){
            unset($this->parse[$key]);
			$str = '';
				foreach ($this->parse as $key => $value) {
				$str .= $key . '=' . $value . PHP_EOL;
			}
			file_put_contents(INI_PATH, $str);
            return true;
        }
        return null;
    }
}

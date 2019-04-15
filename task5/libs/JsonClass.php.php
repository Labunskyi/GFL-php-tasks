<?php
class JsonClass implements iWorkData
{
	protected $parse = array();
	protected $saveData = array();	
  
	/* public function __construct()
	{}
	 */
	public function saveData($key, $val)
    {	
		$file = file_get_contents(JSON_PATH);
		$this->parse = json_decode($file, true);
		$this->saveData[$key] = $val;
		$this->merge = array_merge($this->parse, $this->saveData);
		file_put_contents(JSON_PATH, json_encode($this->merge));
    }

    public function getData($key)
    {	
		$file = file_get_contents(JSON_PATH);
		$this->parse = json_decode($file, true);
		if(isset($this->parse[$key])){
			return $this->parse[$key];
		}
		return null;
    }

    public function deleteData($key)
    {	
		$file = file_get_contents(JSON_PATH);
		$this->parse = json_decode($file, true);
		if(isset($this->parse[$key])){
            unset($this->parse[$key]);
			file_put_contents(JSON_PATH, json_encode($this->parse));
            return true;
        }
        return null;
    }
}

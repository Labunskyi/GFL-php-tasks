<?php

class View
{
	private $forRender;
	private $file;

	public function __construct($template)
	{       
		  $this->file = file_get_contents($template);
		  
	}

	public function addToReplace($mArray)
	{
	  foreach($mArray as $key=>$val)
	   {
			$this->forRender[$key] = $val;
			
	   }
	   //print_r($this->forRender[$key]);
	}

	public function templateRender()
	{
		foreach($this->forRender as $key=>$val)
		{	
			$this->file = str_replace($key, $val, $this->file);
		}	
		//print_r($this->forRender);
		echo $this->file;
		
    }
}

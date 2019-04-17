<?php
class Helper
{
	public $arr = array();
	
    public function list($teg, $li, $arr)
	{	
		$arr2 = '';
		foreach($arr as $val) {
			$arr2 .= '<' . $li . '>' . $val . '</' . $li . '>';
		}
		$list = '<' . $teg . '>' . $arr2 . '<' . $teg . '>';
		return $list;
	}
	
	
	
}

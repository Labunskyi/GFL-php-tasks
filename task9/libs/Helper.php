<?php
class Helper
{
	
    public function list($teg, $li, $arr)
	{	
		$arr2 = '';
		foreach($arr as $val) {
			$arr2 .= '<' . $li . '>' . $val . '</' . $li . '>';
		}
		$list = '<' . $teg . '>' . $arr2 . '</' . $teg . '>';
		return $list;
	}
	
	public function termin($teg, $dt, $dd, $arr)
	{	
		$arr2 = '';
		foreach($arr as $key => $val) {
			$arr2 .= '<' . $dt . '>' . $key . '</' . $dt . '>' . '<' . $dd . '>' . $val . '</' . $dd . '>';
		}
		$list = '<' . $teg . '>' . $arr2 . '<' . $teg . '>';
		return $list;
	}
	
	public function select($teg, $option, $arr)
	{
		$arr2 = '';
		foreach($arr as $val) {
			$arr2 .= '<' . $option . '>' . $val . '</' . $option . '>';
		}
		$list = '<' . $teg . ' multiple>' . $arr2 . '</' . $teg . '>';
		return $list;
	}
	
	public function radio($teg, $input, $arr)
	{
		$arr2 = '';
		foreach($arr as $val) {
			$arr2 .= '<' . $input . ' type="radio" name="group1">' . $val . '<br>';
		}
		$list = '<' . $teg . '>' . $arr2 . '</' . $teg . '>';
		return $list;
	}
	
	public function check($teg, $input, $arr)
	{
		$arr2 = '';
		foreach($arr as $val) {
			$arr2 .= '<' . $input . ' type="checkbox">' . $val . '<br>';
		}
		$list = '<' . $teg . '>' . $arr2 . '</' . $teg . '>';
		return $list;
	}
	
	public function table($teg, $input, $arr)
	{
		$arr2 = '';
		foreach($arr as $val) {
			$arr2 .= '<' . $input . ' type="checkbox">' . $val . '<br>';
		}
		$list = '<' . $teg . '>' . $arr2 . '</' . $teg . '>';
		return $list;
	}
	
}


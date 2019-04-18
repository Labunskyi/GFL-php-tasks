<?php
class Helper
{
	
    public function listing($teg, $arr)
	{	
		$arr2 = '';
		foreach($arr as $val) {
			$arr2 .= '<li>' . $val . '</li>';
		}
		$list = '<' . $teg . '>' . $arr2 . '</' . $teg . '>';
		return $list;
	}
	
	public function termin($arr)
	{	
		$arr2 = '';
		foreach($arr as $key => $val) {
			$arr2 .= '<dt>' . $key . '</dt>' . '<dd>' . $val . '</dd>';
		}
		$list = '<dl>' . $arr2 . '</dl>';
		return $list;
	}
	
	public function select($arr)
	{
		$arr2 = '';
		foreach($arr as $val) {
			$arr2 .= '<option>' . $val . '</option>';
		}
		$list = '<select multiple>' . $arr2 . '</select>';
		return $list;
	}
	
	public function radio($arr)
	{
		$arr2 = '';
		foreach($arr as $val) {
			$arr2 .= '<input type="radio" name="group1">' . $val . '<br>';
		}
		$list = '<form>' . $arr2 . '</form>';
		return $list;
	}
	
	public function check($arr)
	{
		$arr2 = '';
		foreach($arr as $val) {
			$arr2 .= '<input type="checkbox">' . $val . '<br>';
		}
		$list = '<form>' . $arr2 . '</form>';
		return $list;
	}
	
	public function table($arr, $countColomns)
	{
	$arr2 = array();
	foreach ($arr as $key => $value) {
		$arr2[] = '<td>' . $value . '</td>';
	}

	$blocks = array_chunk($arr2, $countColomns);
	$strr = '';
	foreach ($blocks as $block) {
		$start = '<tr>';
		$middl = '';
		foreach ($block as $kicks) {
			$middl .= $kicks;
		}
		$end = '</tr>';
	
		$strr .= $start . $middl . $end;
		//echo $strr;
	}
		$list = '<table border="1">' . $strr . '</table>';
		return $list;
	}
	
}

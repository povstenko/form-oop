<?php
class Form
{
	public function open($param)
	{
		$template = '<form ';
		foreach ($param as $key => $value) {
			$template .= "$key = '$value'";
		}
		$template .= ' >';
		echo $template;
	}
	public function textarea($param)
	{
		$template = '<textarea ';
		foreach ($param as $key => $value) {
			$template .= "$key = '$value'";
		}
		$template .= ' > </textarea>';
		echo $template;
	}
	public function password($param)
	{
		$template = "<input type = 'pasword'";
		foreach ($param as $key => $value) {
			$template .= "$key = '$value'";
		}
		$template .= ' >';
		echo $template;
	}
	public function sumbit($param)
	{
		$template = "<input type = 'submit'";
		foreach ($param as $key => $value) {
			$template .= "$key = '$value'";
		}
		$template .= ' >';
		echo $template;
	}
	public function close($param)
	{
		echo "</form>";
	}
	public function input($param)
	{
		$template = '<input ';
		foreach ($param as $key => $value) {
			$template .= "$key = '$value'";
		}
		$template .= ' >';
		echo $template;
	}
}
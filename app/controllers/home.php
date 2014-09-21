<?php

class Home extends Controller
{
	public function index($name = '', $otherName = '')
	{
		echo 'home/index';
		echo $name;
	}

	public function text()
	{
		echo 'home/text';
	}
}
?>
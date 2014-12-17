<?php
class User extends Controller
{
	public function index()
	{
		echo 'show';
		$this->view('user/index');
		//$this->view('user/index', ['name'=> $user->name]);
	}

	public function insert()
	{
		switch($_SERVER['REQUEST_METHOD'])
		{
		case 'GET': $this->view('user/register'); break;
		case 'POST': 
		echo 'insert function<br />';
		if ($this->check_value($_POST)) {
			$sql = new Mysql;
			if ($sql->insertUser($_POST)) {
				echo "<a href='./?url=user/index'>succes and return to the index</a>";
			}
		}
		$this->view('user/register');
		}
	}
	public function check_value($date) {
		if (!array_key_exists('name', $date)) {
			echo "without user name<br />";
			echo "<a href='./?url=user/insert'>again</a>";
			return False;
		}
		if (!array_key_exists('pwd', $date)) {
			echo "without password <br />";
			echo "<a href='./?url=user/insert'>again</a>";
			return False;
		} 
		if (!array_key_exists('pwd2', $date)) {
			echo "without password confirm<br />";
			echo "<a href='./?url=user/insert'>again</a>";
			return False;
		}
		if ($date['pwd'] !== $date['pwd2']) {
			echo "password is not the same<br />";
			echo "<a href='./?url=user/insert'>again</a>";
			return False;
		}
		return True;
	}
	public function deleted()
	{
		echo 'deleted';
	}
}
?>
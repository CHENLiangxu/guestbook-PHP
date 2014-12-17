<?php
class Mysql
{
	protected $connect;
	public function __construct()
	{
		if ($this->connectDB()) {
			echo "Success to connect Mysql";
		}
	}
	
	public function connectDB()
	{
		$con=mysqli_connect("127.0.0.1:3306","root","chenlx201125","phpdb");
		if (mysqli_connect_errno()) {
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			return False;
  		} else {
  			$this->connect = $con;
  			return True;
  			//mysqli_query($con,"INSERT INTO product (code, name, price) VALUES ('458', '4*15*1.5', 3.5)");
  		}
	}

	public function insertProduct($code, $name, $price)
	{
		if ($code && $name && $price) {
			$code = mysqli_real_escape_string($this->connect, $code);
			$name = mysqli_real_escape_string($this->connect, $name);
			$price = (float)mysqli_real_escape_string($this->connect, $price);
			$query = "INSERT INTO product (code, name, price) VALUES ('$code', '$name', '$price')";

			if (!mysqli_query($this->connect, $query)) {
			  die('Error: ' . mysqli_error($this->connect));
			}
		} else {
			echo "some of value is null";
		}
	}

	public function showProduct()
	{
		return mysqli_query($this->connect,"SELECT * FROM product");
	}

	public function disconnect()
	{
		mysqli_close($this->connect);
	}

	public function insertUser($date)
	{
		$name = mysqli_real_escape_string($this->connect, $date['name']);
		$pwd = mysqli_real_escape_string($this->connect, $date['pwd']);
		$query = "INSERT INTO user (name, pwd) VALUES ('$name', '$pwd')";
		if (!mysqli_query($this->connect, $query)) {
		  die('Error: ' . mysqli_error($this->connect));
		} else {
			return True;
		}
	}
	
	public function showUser()
	{
		return mysqli_query($this->connect,"SELECT * FROM user");
	}
}
?>
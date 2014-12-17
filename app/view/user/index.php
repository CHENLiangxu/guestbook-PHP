<html>
  <body>
    <?php
    $sql = new Mysql;
    $result = $sql->showUser();
    while($row = mysqli_fetch_array($result)) {
  		echo "<br>";
  		echo $row['name'] . " | " . $row['pwd'];
  		echo "<br>";
	}
    $sql->disconnect();
    ?>
	<hr>
	<a href="./?url=user/insert">register</a>
	<a href="./?url=user/login">login</a>

  </body>
</html>
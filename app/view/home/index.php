<html>
  <body>
    <?php
    $sql = new Mysql;
    if (array_key_exists('code', $_POST)) {
    	$sql->insertProduct($_POST['code'], $_POST['name'], $_POST['price']);
    }
    $result = $sql->showProduct();
    while($row = mysqli_fetch_array($result)) {
  		echo "<br>";
  		echo $row['code'] . " | " . $row['name']. " | " . $row['price'];
  		echo "<br>";
	}
    $sql->disconnect();
    ?>
    <form action="/index" method="post">
      <div>code: <input type='text' name="code" required></div>
      <div>name: <input type='text' name="name" required></div>
      <div>price: <input type='text' name="price" required></div>
      <div><input type="submit" value="Add"></div>
    </form>
  </body>
</html>
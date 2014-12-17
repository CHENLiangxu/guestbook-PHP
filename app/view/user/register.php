<html>
  <body>
    <?php
	if ($_SERVER['REQUEST_METHOD']=="GET") {
	print("
		<h2>register</h2>
		<form action='./?url=user/insert' method='post'>
		  <div>name: <input type='text' name='name' required></div>
		  <div>password: <input type='password' name='pwd' required></div>
		  <div>password: <input type='password' name='pwd2' required></div>
		  <div><input type='submit' value='Add'></div>
		</form>");
	}
	?>
  </body>
 </html>
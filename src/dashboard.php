<html>
<body>
<?php
    session_start();
    $v= $_SESSION['login_user'];
    echo 'Welcome '.$v.'<br><br>';
	$db = mysqli_connect('localhost','root','','excal');
	?>
	<br><br>
	<form action="search.php" method="post">
		<input type="text" name="hname"><br><br>
		<input type="submit" name="byH" value="Search">
	</form>
	<br><br>
    <form action="search.php" method="post">
		<input type="text" name="sname"><br><br>
		<input type="submit" name="byS" value="Search">
	</form>
</body>

</html>
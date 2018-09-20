<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>

</body>
</html>

<form action="" method="post"><label>
	Patient's Name <input type="text" name="pname"><br><br>
    Problem <input type="" name=""><br><br>
	Preferred Appointment Time <input type="text" name="pat"><br><br>    
	Address <input type="text" name="add"><br><br>
	Contact No. <input type="text" name="contact"><br><br>
	</label>
</form>

<?php
	
	$db = mysqli_connect('localhost','root','','excal');
	if(isset($_POST['byH'])){
		$sql="select * from hospitals where hname='".$_POST['hname']."'";
	}


	if(isset($_POST['byS'])){
		$sql="select * from hospitals where hname='".$_POST['sname']."'";		
	}
?>
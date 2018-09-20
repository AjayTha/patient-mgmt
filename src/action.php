<?php
	$db=mysqli_connect('localhost','root','','database');  

		$sql="INSERT INTO
			comment(data)
			VALUES('".$_POST['content']."')";
    $result = mysqli_query($db,$sql);
     if(!$result){
            echo 'Something went wrong while adding reply. Please try again later.';
        }
        
?>
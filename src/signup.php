<?php
	  $db=mysqli_connect('localhost','root','','excal');
      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      }
	    if($_POST['check']=="user"){
	    	    $username=$_POST['name'];
	    	    $mail=$_POST['mail'];
	    	    $password=$_POST['password'];
	    	    $age=$_POST['age'];
	    	    $bgroup=$_POST['bgroup'];
	    		$qu="INSERT INTO users (user_name, user_pass, email,age,blood_group) VALUES ('$username', '$password', '$mail', '$age','$bgroup')";

	    		$result=mysqli_query($db,$qu);
	    		if($result){
	    			echo "You have successfully registered.Please <a href='signin.php'>signin</a> to continue";
	    		}		
	    		else{
	    			header("location: register.php");
	    		}
	    		 mysqli_select_db($db,'patients' );
	    		 if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      }
	    		 $sql="create table `" . $username . "` (id int, disease varchar(255), hname varchar(255), hcharge int, hdate datetime,description varchar(255), time_recovery varchar(255))";
	    		 $result=mysqli_query($db,$sql);
	    		 if($result){
	    		 	echo "";
	    		 }
	    		 else{
	    		 	echo "T
	    		 	";
	    		 }

	    	}

?>
<?php
$db=mysqli_connect('localhost','root','','patients');
      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      }

      $name=$_POST['text1'];
      $problem=$_POST['text2'];
      $hname=$_POST['text3'];
      $time=$_POST['text4'];
      $charge=$_POST['text5'];
      $des=$_POST['text6'];
      $startTime = date("Y-m-d H:i:s");


$sql="INSERT INTO `" . $name . "` ( disease,hname,time_recovery,hcharge,hdate,description) VALUES ('$problem','$hname','$time','$charge','$startTime','$des')  ";
      $result=mysqli_query($db,$sql);
	    		if($result){
	    			echo "Query was successful";
	    		}		
	    		else{
	    			echo "Something went wrong ";
	    		}
?>
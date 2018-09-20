<?php
$db=mysqli_connect('localhost','root','','excal');
      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      }

      $name=$_POST['text1'];
      $hname=$_POST['text2'];
      $doc=$_POST['text3'];
      $time=$_POST['text4'];
      $fee=$_POST['text5'];
           $startTime = date("Y-m-d H:i:s");



$sql="INSERT INTO appointments ( user_name,h_name,doctor,dates,fee,datee) VALUES ('$name','$hname','$doc','$time','$fee','$startTime')  ";
      $result=mysqli_query($db,$sql);
	    		if($result){
	    			echo "Query was successful".$startTime;
	    		}		
	    		else{
	    			echo "Something went wrong ";
	    		}
?>
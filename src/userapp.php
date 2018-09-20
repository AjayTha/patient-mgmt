	<?php
      include 'header.php'; 
       session_start();
       if(!isset($_SESSION['username'])){
        header('location:crash.html');
       }
	?>

		<div class="main">

			<div class="image"></div>
		<div class="container">
		<br><br>
		<?php
			$db=mysqli_connect('localhost','root','','excal');
      		if (!$db){
       		 die("Database Connection Failed" . mysqli_error($db));
      		}

      		$sql="select * from appointments where user_name='".$_SESSION['username']."'";
      		  $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 0)
    {
        echo 'No appointments';
    }

  else{ 

        echo "<h5><b>Your Appointments:</b></h5><br><br><table class='striped'>
            <tr>
                <th>Hospital</th>
                <th>Doctor</th>
                <th>Fees</th>
                <th>Date</th>

              </tr>
        ";
       while($row = mysqli_fetch_assoc($result))
                {               
                    echo '<tr>';
                        echo '<td>'.$row['h_name'].'</td>';
                        echo '<td >'.$row['doctor'].'</td>' ;
                        echo '<td >'.$row['fee'].'</td>' ;
                        echo '<td >'.$row['dates'].'</td>' ;
                    echo '</tr>';
                }
                echo "</table><br><br><br><br>";
  }


		?>
		</div>

			
	</div>
	<br>


<?php include 'footer.php'; ?>
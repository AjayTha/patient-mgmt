
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  	input[type=text]{
  		border-radius: 6px;
  		border:2px solid rgb(51,150,32);
  		color: white;
  	}
  	input[type=password]{
  		border-radius: 6px;
  		border:2px solid rgb(51,150,32);
  		color: white;
  	}
  </style>
</head>

<body style="background-color: #FFFFE0">
	<?php 
       session_start();
       
       
	?>
	<br><br>

		<div class ="row1">
			<div class="col-lg-5">MediCus</div>
			<div class="col-lg-1"><a href="sign.php">Patient</a></div>
			<div class="col-lg-1"><a href="doc.php"> Doctor</a></div>
		<div class="subtext">
			<div class="col-lg-1">Support</div>
			<div class="col-lg-1">Blog</div>
		</div>
			<div class="col-lg-1"><a href="signin.php"><button type="button" class="btn btn-success"><span style="color:white">Log Out</span></button></a></div>
		</div>

		<br><br>
		<hr>

		<div class="main">

		<div class="container">
	
		<br>
		<div class="row2">
			<br><br><br><br><br>		
	</div>
			<br>
			<div class="row3" align="center">
			<form action="hname.php" method="post">
				<label style="color:black;"> Search by Hospital  :  <br><br> 
					<input type="text" name="hname" placeholder="Enter the hospital name" style="height:36px;color: black;"/>
					<button type="submit" class="btn btn-success btn-md" >Go</button></label> </form>
			</div>

		<div class="row3" align="center">
					
					<br><br>
					<form action="city.php" method="post">
					<label style="color:black;">Search City  :  <br><br>
						<input type="text" name="city" placeholder="Enter the city name" style="height:36px;color: black;"/>
						<button type="submit" class="btn btn-success btn-md">Go</button></label>  </form>
		</div><br><br>
        <a href="create_cat.php"><button type="submit" class="btn btn-success btn-md">Go To Discussion Forum</button></a>
        <a href="search.php"><button type="submit" class="btn btn-success btn-md">Make an Appointment</button></a>
        <a href="viewrecords.php"><button type="submit" class="btn btn-success btn-md">View Your Medical Records</button></a>
        <a href="qr/index.php"><button type="submit" class="btn btn-success btn-md">Scan your QR Code</button></a>
        <a href="userapp.php"><button type="submit" class="btn btn-success btn-md">Your Appointments</button></a>

    </label>
		</div>
			
	</div>
	<br>
	<hr>

	<div class="footer">
		<div class="row">
			<div class="col-lg-4"><dl>
				<dt>Centres Of Excellence
					<dd>Orthopaedics</dd>
					<dd>Cardiology</dd>
					<dd>Neurology</dd>
					<dd>Spine Surgery</dd>
					<dd>Cancer/Oncology</dd>
				</dt></dl>
			</div>

			<div class="col-lg-2"><dl>
				<dt>Patient Care
					<dd>Find a Doctor</dd>
					<dd>Patients Speak</dd>
					<dd>Pay Online</dd>
				</dt></dl>
			</div>

			<div class="col-lg-2"><dl>
				<dt>Corporate
					<dd>Proud of your Doctor</dd>
					<dd>Awards & Accolades</dd>
					<dd>Initiatives</dd>
				</dt></dl>
			</div>
			<div class="col-lg-2"><dl>
				<dt>Contact Us
					<dd>support@medicus.com</dd>
					<dd>7399910182</dd>
				</dt></dl>
			</div>

		</div>
	</div>

</body>
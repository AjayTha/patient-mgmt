
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
         body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
    background-color: white;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #4CAF50;
    color: white;
}

  </style>
</head>
<body >


	
	 <img src="upload.png" alt="User image" style="width:255px;height:200px;"> 
	 <strong><h2 style="margin-left: 10px">NAV</h2></strong>

<ul>
  <li><a class="active" href="profile1.php" style="text-decoration:none;font-weight: bold;" target="profile1"><strong>Home</strong></a></li>
  <li><a href="viewrecords.php" style="text-decoration:none;font-weight: bold;" target="profile1">Medical Histroy</a></li>
  <li><a href="create_cat.php" style="text-decoration:none;font-weight: bold;" target="profile1">Discussion forum</a></li>
  <li><a href="search.php" style="text-decoration:none;font-weight: bold;" target="profile1">Make an Appointment</a></li>
  <li><a href="qr/index.php" style="text-decoration:none;font-weight: bold;" target="profile1">Scan your QR code</a></li>
  <li><a href="userapp.php" style="text-decoration:none;font-weight: bold;" target="profile1">Your Appointments</a></li>
</ul>






</body>
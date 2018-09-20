
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find a Hospital</title>
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

    table {
    border-collapse: collapse;
    width: 100%;
}
 
th {
    background-color: #B40E1F;
    color: #F0F0F0;
    padding: 12px;
}
 
td {
    padding: 5px;
}

  </style>
</head>

<body >
  <br><br>

   

    <br><hr>

    <div class="main">
      <div class="image"></div>
    <div class="container">
    <br>
    <div class="row2">
      <br><br><br>


<?php
  session_start();
  $db=mysqli_connect('localhost','root','','excal');
      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      }

      if(!isset($_POST['city'])){
        echo "Please enter name of a city";
      }

      else{
      
            $sql="select * from hospitals where LOWER(hcity)=LOWER('".$_POST['city']."')";
            $result=mysqli_query($db,$sql);
            if(!$result){
              echo "<h5>Something went wrong while searching for your query.Please try again later</h5>";
            }
            
            if(mysqli_num_rows($result) == 0){
              echo '<b>Entered hospital does not exist under our organization</b>';
            }
      
            else{
              echo "<table border='1px solid black' align='center' style='text-align:center' cellpadding='2px'> <tr>
              <th><b>Name of Hospital</b></th>
              <th><b>State</b></th>
              <th><b>City</b></th>
              <th><b>Address</b></th>
              <th><b>Contact</b></th>
              </tr>";


              while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
              echo "<td>".$row['hname']."</td>";
              echo "<td>".$row['hstate']."</td>"; 
              echo "<td>".$row['hcity']."</td>"; 
              echo "<td>".$row['hadd']."</td>"; 
              echo "<td>".$row['hcontact']."</td>"; 
              echo "</tr>";
              }
              echo "</table>";
      
            }
            
      
      }
?>  
  </div>
      <br>
    <div class="row3" align="center">

    </div>

    </div>
    </form> 
  </div>
  <br><br><br>
  <hr>

  

</body>
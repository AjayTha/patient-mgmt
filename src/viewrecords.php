<?php include 'header.php';?>
  <br><br> 
    
        <div class="row2">
            <?php
session_start();
$name=$_SESSION['username'];
$db=mysqli_connect('localhost','root','','excal');
      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      }

      $s="select * from users where user_name='".$_SESSION['username']."'";
      $res=mysqli_query($db,$s);
      while($row = mysqli_fetch_assoc($res))
                {   echo "<div style='margin-left:20px'>";            
                    echo "<b>Name : </b>".$name."<br><br>";
                    echo "<b>Age : </b>".$row['age'];
                    echo "<br><br><b>Blood Group : </b>".$row['blood_group']."</div><br><br>";

                }
                mysqli_select_db($db,'patients');

      $sql="SELECT 
            *
        FROM `" . $name . "`";
        

  $result=mysqli_query($db,$sql);
  if(!$result){
    echo "No records";
  }

    if(!mysqli_num_rows($result) )
    {
        echo 'No medical records';

    }

  else{ 

        echo "<center><table border='2px' class='center striped'>
            <tr>
                <th>Hospital</th>
                <th>Disease</th>
                <th>Expected Recovery Time</th>
                <th>Description of Report</th>
                <th>Hospital Charge</th>
                <th>Date of Report</th>
              </tr>
        ";
       while($row = mysqli_fetch_assoc($result))
                {               
                    echo '<tr>';
                        echo '<td class="leftpart">'.$row['hname'].'</td>';
                        echo '<td class="leftpart">'.$row['disease'].'</td>';
                        echo '<td class="leftpart">'.$row['time_recovery'].'</td>';
                        echo '<td class="leftpart">'.$row['description'].'</td>';
                        echo '<td class="leftpart">'.$row['hcharge'].'</td>';                        
                        echo '<td>';
                        echo date('d-m-Y', strtotime($row['hdate']));
                        echo '</td>';
                    echo '</tr>';
                }
                echo "</table></center><br><br><br><br>";
  }
     
?>


    </div>
            <br>


        </div>
            
    </div>
    <br>
    

<?php include 'footer.php';?>
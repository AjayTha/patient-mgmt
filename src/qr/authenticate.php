<?php 
  echo "Hello whats up";
  session_start();
  echo $_POST['credential'];
  $db=mysqli_connect('localhost','root','','excal');
      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      } 


    $s="select * from users where qrcode='".$_POST['credential']."'";
    $result = mysqli_query($db,$s);

    if( mysqli_num_rows($result) == 0){
    
    
         $sql="update users set qrcode='".$_POST['credential']."' where user_name='".$_SESSION['username']."'";
         $result = mysqli_query($db,$sql);
     
    
        if(!$result)
        {
            echo 'NOT';
        }
    
        else{
          echo "hbui";
        }
      
    }

    else{
      echo "qrcode already exists";
    }
?>
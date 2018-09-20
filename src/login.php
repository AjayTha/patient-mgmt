<?php
 session_start();

$db=mysqli_connect('localhost','root','','excal');
      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      } 

    $errors = array(); 
        
        if(!isset($_POST['name'])){
            $errors[] = 'The username field must not be empty.';
        }
         
        if(!isset($_POST['password'])){
            $errors[] = 'The password field must not be empty.';
        }
         
        if(!empty($errors)){
            echo 'Uh-oh.. a couple of fields are not filled in correctly..';
            echo '<ul>';
            foreach($errors as $key => $value){
                echo '<li>' . $value . '</li>'; 
            }
            echo '</ul>';
        }
        else{
            if($_POST['check']=="user"){
                        $sql="select * from users where user_name='".$_POST['name']."' and user_pass='".$_POST['password']."'";
            }
            if($_POST['check']=="doctor"){
                $sql="select * from doctor where user_name='".$_POST['name']."' and user_pass='" .$_POST['password']. "'";

            }

               
                $result = mysqli_query(
                    $db,$sql);
                if(!$result){
                    echo "Somethig went wrong.Please try again later.";
                }

                 if(mysqli_num_rows($result) == 0)
                {
                    echo 'You have supplied a wrong user/password combination. Please try again.';
                }
                else
                {
                    $_SESSION['signed_in'] = true;
                     
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $_SESSION['userid']  = $row['id'];
                        $_SESSION['username']  = $row['user_name'];
                    }
                    if($_POST['check']=="user"){
                        $_SESSION['user']="User";
                        header('location:profile1.php');
                    }
                    
                    if($_POST['check']=="doctor"){
                        $_SESSION['user']="Doctor";
                        header('location:create_cat.php');
                    }
                }
            }

?>
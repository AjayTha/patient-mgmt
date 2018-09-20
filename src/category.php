<?php include 'header.php'; ?>

  <br><br>

        <?php
  session_start();

$db=mysqli_connect('localhost','root','','excal');
      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      } 


     if($_SERVER['REQUEST_METHOD']=='POST'){
     
         $sql = "INSERT INTO categories(cat_name, cat_des)
            VALUES('" . $_POST['name'] . "',
                  '" . $_POST['cat_description'] . "')";
         $result = mysqli_query($db,$sql);
     
         if(!$result)
         {
             echo 'Error' . mysqli_connect_error();
         }
         else
         {
             echo 'New category successfully added.';
             header('location:create_cat.php');
         }
     }
?>    <br><br>
    <center>
    <form method="post" action="">
        <b>Category name</b>: <br><br><input type="text" name="name"  style="color:black;width: 40%"  /><br><br><br>
       <b> Category description</b>: <br><br><textarea name="cat_description" id="textarea1" class="materialize-textarea" style="color:black;width: 40%"/></textarea><br><br><br>
       
        <input type="submit" value="Add category" />
     </form>
   </center>
  <br>

  

  <?php include 'footer.php';?>
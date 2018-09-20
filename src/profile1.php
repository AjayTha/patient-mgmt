  <?php include 'header.php'; ?>

  <?php 
       session_start();
       if(!isset($_SESSION['username'])){
        header('location:crash.html');
       }
  ?>
  

    <div class="main">

    <div class="container">
  
    <br>
    <div class="row2">

         
  </div>
      <br><br>
      <div class="row3" style="width: 40%;position: relative;left: 30%">
      <form action="hname.php" method="post">
        <label style="color:black;"> Search by Hospital  :  <br><br> 
          <input type="text" name="hname" placeholder="Enter the hospital name" style="height:36px;color: black;"/>
          <button type="submit" class="btn btn-success btn-md" >Go</button></label> </form>
      </div>

    <div class="row3" style="width: 40%;position: relative;left: 30%">
          
          <br><br>
          <form action="city.php" method="post">
          <label style="color:black;">Search City  :  <br><br>
            <input type="text" name="city" placeholder="Enter the city name" style="height:36px;color: black;"/>
            <button type="submit" class="btn btn-success btn-md">Go</button></label>  </form>
    </div><br><br>
     
    </label>
    </div>
      
  </div>
<?php include 'footer.php'; ?>
 


<?php include 'header.php'; ?>
<body >

        <div class="main">

        <div class="container">
    
        <div class="row2">

            

<?php
 session_start();
$db=mysqli_connect('localhost','root','','excal');
      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      } 

         
$sql = "SELECT
            cat_id,
            cat_name,
            cat_des
        FROM
            categories";
 
$result = mysqli_query($db,$sql);
 

    if(mysqli_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
        echo '<table border="1" class="highlight" >
              <tr>
                <th>Category</th>
                <th>View Posts</th>
              </tr>'; 
             
        while($row = mysqli_fetch_assoc($result))
        {               
            echo '<tr>';
                echo '<td class="leftpart">';
                    echo '<div class="cname"><b style="color:grey;font-size:25px;">' . $row['cat_name'] . '</b></div><br>' . $row['cat_des'];
                 echo '</td>';
                echo '<td class="rightpart">';
                            echo '<a href="posts.php?cat_id='.$row['cat_id'].'" >Posts</a>';
                echo '</td>';
            echo '</tr>';
        }
     }
 
?>       
    </div>
            <br>
            
    </div>

<div class="col-lg-5" style="margin-left: 20px"><a class="item" href="category.php">Create New Category</a></div>
    <br>
    <hr>

<?php include 'footer.php';?>
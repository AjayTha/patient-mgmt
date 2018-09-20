
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

   table {
    margin-left: 40px;
    border:2px solid black;
    border-collapse: collapse;
    width: 80%;
}
 
th {
    background-color: #B40E1F;
    color: #F0F0F0;
    padding: 12px;
}
 
td  {
    padding: 5px;
}

form{
    padding-left: 40px;
}


  </style>
</head>

<body >
        <div class="main">
        </div>


    
            <br><br><br>
    
        <div class="row2">
            <?php
            session_start();
$db=mysqli_connect('localhost','root','','excal');
           $startTime = date("Y-m-d H:i:s");

      if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
      }
      if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo '<form method="post" action="" >
          <textarea rows="10" cols="100" name="content" >Add a Comment</textarea><br><br>
          <input type="submit" value="Add Comment" style="background-color:#F5F5DC">
        </form><br><br><br>
        ';
  }

  else{
    $sql="INSERT INTO 
    posts(post_content,post_date,post_topic,post_user,type)
    VALUES('".$_POST['content']."','".$startTime."','" . $_GET['cat_id'] . "','".$_SESSION['username']."','".$_SESSION['user']."')";
        $result = mysqli_query($db,$sql);

        if(!$result)
        {
            echo 'Something went wrong while adding your response. Please try again later.';
        }
        else
        {
            echo 'Your reply has been added';
            header("location:posts.php?cat_id=".$_GET['cat_id']."");
        }
  } 
    
  $sql="SELECT 
            *
        FROM posts
        WHERE post_topic =".$_GET['cat_id'];

  $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 0)
    {
        echo '';
    }

  else{ 

        echo "<table border='2px'>";
        echo "<tr>
                <th>Comment</th>
                <th>Comment by</th>
              </tr>
        ";
       while($row = mysqli_fetch_assoc($result))
                {               
                    echo '<tr>';
                        echo '<td class="leftpart">'.$row['post_content'].'</td>';
                        
                        ;
                        echo '<td class="rightpart" style="color:black">'. ' by '.$row['post_user'].', '.$row['type'].'<br> on ';
                        echo date('d-m-Y', strtotime($row['post_date']));
                        echo '</td>';
                    echo '</tr>';
                }
                echo "</table>";
  }
      
?>


    </div>
            <br>


        </div>
            
    </div>
    <br>
    <hr>

</body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>HealthCare</title>
  <style type="text/css">
    
  </style>
</head>
<body>
  <nav class="grey darken-3">
  <div class="container">
    <div class="nav-wrapper">
      <a href="/stories" class="brand-logo center s12 m4 l8">Healthcare</a>
     
      <!-- RIGHT NAV -->
      <ul class="right hide-on-small-only s12 m4 l2">
        <li><a href="signin.php">Login</a>
        <li><a href="register.php">Register</a>
        <li><a href="emergency/home.php">Emergency</a>
      </ul>
      <!-- SIDE MENU -->
      
    </div>
  </div>
</nav>
<div class="container" style="margin-top: 120px">
<main>
<div class="row">
    <form class="col s12" action="login.php" method="post">
    
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Your Name" id="first_name" type="text" class="validate" name="name">
          <label for="first_name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="user/doctor" type="text" class="validate" name="check">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      
       <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    
  </button>
    </form>
  </div>

</main>
</div>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script>
    $(document).ready(() => {
      $('.button-collapse').sideNav();
    });
  </script>
</body>
</html>
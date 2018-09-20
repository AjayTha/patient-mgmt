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
    <form class="col s12" action="signup.php" method="post">
       <div class="row">
        <div class="input-field col s6">
          <input placeholder="user/doctor" type="text" class="validate" name="check">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Your Name" name="name" id="first_name" type="text" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="mail" class="validate" placeholder="Email">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="password" class="validate" placeholder="Password">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Your Age" id="first_name" type="text" class="validate" name="age">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Your blood group" name="bgroup" id="first_name" type="text" class="validate" name="age">
        </div>
      </div>
      
       <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    
  </button>
    </form>
  </div>

</main>
</div>

<footer class="page-footer grey darken-3" style="margin-top: 170px;">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">StoryBooks</h5>
        <p class="grey-text text-lighten-4">Share your life with the world</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="/stories">Public Stories</a></li>
          <li><a class="grey-text text-lighten-3" href="/about">About</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright" >
    <div class="container">
      © 2017 StoryBooks
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>
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
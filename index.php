<?php
 require('connection.php');
 session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User - Login and Register</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  
  <header>
  <diV></div>
    <nav>
      
      <a href="#" style="text-decoration: none">HOME</a>
      <a href="#" style="text-decoration: none">GLORY</a>
      <a href="#" style="text-decoration: none">CONTACT</a>
      <a href="#" style="text-decoration: none">ABOUT</a>
    </nav>
    <div class='sign-in-up'>
      <button type='button' class="btn btn-info" onclick="popup('login-popup')">LOGIN</button>
      <button type='button' class="btn btn-danger" onclick="popup('register-popup')">REGISTER</button>
    </div>
  </header>
  <div class="container-fluid" id="back">
    <div class="row" >
      <div class="col-md-6" style="margin-top: 5rem; color:white">
        <h1>CRICKET CLUB</h1><br>
        <h2>Lets Get Dive into Cricket World where some amazing stuffs are waiting for you</h2>
        <br>
        <button class="btn btn-info" style="width: 15rem">Get Started</button>
      </div>
    </div>
  </div>
  

  <div class="popup-container" id="login-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="btn btn-primary" name="login">LOGIN</button>
      </form>
    </div>
  </div>

  <div class="popup-container" id="register-popup">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="btn btn-danger" name="register">REGISTER</button>
      </form>
    </div>
  </div>
  
  <script>
    function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }
  </script>

</body>
</html>
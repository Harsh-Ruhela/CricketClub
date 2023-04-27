<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRICKET CLUB</title>
    <script src="https://kit.fontawesome.com/6899b9de5d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="About.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>    

</head>
<body>
    <div>
    
    <div class="Header">
    <div>
        <?php 
              if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
              {
                echo"<a class='btn btn-outline-danger data-toggle='tooltip' data-placement='bottom' title='Logout'' style='color: white; text-decoration: none; height:2.5rem; margin-left: 2rem' href='Logout.php'><div class='user'>
                <i class='fa-solid fa-right-to-bracket'></i>
                  </div></a>";
              }
        ?>
    </div>
        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
              echo"<h5 style='magin-top: 10px; margin-left: -4rem '>WELCOME - $_SESSION[username]</h5>
              
              ";
            }
        ?>
          
            <ul style="margin-right: 1rem">
              <li ><a href='Home.php' class='navb'>Home</a></li>
              <li ><a href='About.php' class='navb'>About</a></li>
              <li ><a href='Glory.php' class='navb'>Glory</a></li>
              <li ><a href='Equipment2.php' class='navb'>Equipments</a></li>
              <li ><a href='Contact.php' class='navb'>Contact</a></li>
              <li>
                <div>
                <?php
                  $count=0;
                  if(isset($_SESSION['cart']))
                  {
                   $count=count($_SESSION['cart']);
                  }
                ?>
                <a href='mycart.php' class="btn btn-danger" style="color: white"><i class="fa-sharp fa-solid fa-cart-shopping " ></i> (<?php echo "$count"; ?>) </a>
                </div>
              </li>
              
            </ul>
      </div>
       <div class='container-fluid'>
           <div class='row' id='aboutTop'>  
           <div class='col-md-6'>
               <img src='images/AboutBG6.png' style="margin-Top: 2rem; margin-Left: 4rem; height: 15rem"></img>
           </div> 
           <div class='col-md-6'>
               <img src='images/AboutBG5.jpeg' style="height: 70%; margin-Top: 1rem; margin-Left: 7rem"></img>
           </div>
           </div>
       </div>
       <div class='container' >
           <div class='row'>
           
           <div class='col-md-6' id='topLeft'>
                   <h1>Who We Are</h1>
               <h5>Cricket Club is your cricket friend, coach and guide,<br></br> which helps you in sharpening your skills by providing<br></br> you quality tips from experts.
               Improve your batting and<br></br> bowling skills with us. We provide strategies and tips<br></br> which will surely help you in reaching your goal.
               </h5>
           </div>
           <div class='col-md-6' id='topRight'>
               <img src='images/AboutLogo.png'></img>
           </div>

           </div> 
           <div class='row' id='ab'>
               <h3 style="text-align: center;">Our Developer</h3>
               <div class='col-md-6'>
                   <img id='harsh' src='images/HarshRuhela.jpg' style="width: 20rem; height: 20rem; margin-Left: 10rem"></img>
               </div>
               <div class='col-md-6' id="profile">
               <br></br> <h4 id='name' style="text-Align: center">Harsh Ruhela</h4><br>
                   <b>Profile:-  </b>A smart worker, passionate about his work and a good team player <br></br>
                   <b>Studies:-  </b> B.Tech CSE (MIT Moradabad)<br></br>
                   
                   <b>Skills:-  </b> HTML, CSS, JS, ReactJs, MySQL, Java, C/C++ <br></br>
                   <b>Hobbies:- </b> Cricket, Chess 
               </div>
           </div>
       </div>
       

       <div class="container-fluid" id="footer" style="background-color: black;
    color: aliceblue;
    height: 27rem;
    width: 80.5rem;
    padding-top: 5rem;
    padding-bottom: 2rem;
    margin-left: -0rem;
    margin-top: 3rem">
        
          <div class="row">
            <div class="col-md-4" id="f1" style="padding-left: 5rem;">
              <h5>Reach us at : </h5><br>
              <i class="fa-solid fa-phone"></i> +91 9997064025 <br><br>
              <i class="fa-solid fa-envelope"></i> ruhelaharsh2@gmail.com
            </div>
            <div class="col-md-3">
              <h5>Read More </h5><br>
              <h6>Privacy policy</h6>
              <h6>License</h6>
              <h6>Terms & Conditions</h6>
            </div>
            <div class="col-md-5" >
              <h5 id="f2" style="padding-left: 10rem;">Follow us on :</h5> <br>
              <div id="f4" style="display: flex;
    justify-content: space-evenly;
    padding-left: 4.5rem;">
              <i class="fa-brands fa-linkedin"></i>
              <i class="fa-brands fa-github"></i>
              <i class="fa-brands fa-instagram"></i>
                </div>
                <br>
                <div id="f4" style="display: flex;
    justify-content: space-evenly;
    padding-left: 4.5rem;">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-youtube"></i>
            </div>
            </div>
          </div>
          <div class="row" id="f3" style="padding-top: 3rem;
    text-align: center;">
            <h6>All rights reserved</h6><hr></hr>
            <h6>Copyright @Harsh Ruhela Moradabad 2022</h6>
          </div>
      </div>
   </div>
</body>
</html>
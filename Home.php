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
    <title>CRICKET CLUB</title>
    <script src="https://kit.fontawesome.com/6899b9de5d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Home.css">
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
                echo"<a class='btn btn-outline-danger' data-toggle='tooltip' data-placement='bottom' title='Logout' style='color: white; margin-left: 2rem' href='Logout.php'>
                <i class='fa-solid fa-right-to-bracket'></i>
                  </a>";
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
        
        <div class='row' id='Htop' >
          
          <div class='col-md-4'>
            <h2 style="color: aliceblue; margin-top: 4rem; margin-left: 4rem">Kick Start your <br></br>cricket journey <br></br> with us !!</h2>
          </div>
          <div class='col-md-4'></div>
          <div class='col-md-4'></div>
        </div>
      </div>
      <div class='container'>
        
        <div class='row'>
          <div class='col-md-6'>
            <h2 style="color: blue; margin-top: 2rem; margin-left: 6rem">Want to improve your <br></br> batting skills ?<br></br>We are here to help you</h2>
          </div>
          <div class='col-md-6'>
            <img src='./images/ImpBatting.jpg'></img>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
            <img src="./images/Sachin2.jpg" style="height: 30rem">
        </div>
      </div>
      <div class="container">
        <div class='row' >
          <div class='col-md-6' id='left'>
            <div class='row'>
             <h3 style="padding-top: 2rem; text-align: center;"> Correct Standing Position</h3>
              <div class='col-md-3'>
                <h4 style="margin-top: 17rem; margin-left: 5rem">Pace</h4>
              </div>
              <div class='col-md-3'>
                <h4 style="margin-top: 17rem; margin-left: 15rem">Spin</h4>
              </div>
            </div>
          </div>
          <div class='col-md-6' id='right'>
            <div class='row'>
            <h3 style="padding-top: 2rem; text-align: center;"> Correct Defence Position</h3>
              <div class='col-md-3'>
                <h4 style="margin-top: 17rem; margin-left: 3rem">Backfoot </h4>
              </div>
              <div class='col-md-3'>
                <h4 style="margin-top: 17rem; margin-left: 12rem">Frontfoot </h4>
              </div>
            </div>
          </div>            
        </div>
        <div class='row'>
          <h3 id='heading' style="background-color: rgb(255, 0, 106);
    height: 5rem;
    color: white;
    text-align: center;
    padding-top: 1rem">Explore this playlist to learn " DEFENCE "</h3>
          <div class='col-md-6'>
            <video class='videoTag' autoPlay loop muted style="height: 18rem; margin-left: 1rem">
              <source src='./Videos/Defence/Defence.mp4' type='video/mp4' />
            </video>
          </div>
          <div class='col-md-6'>
          <video class='videoTag' autoPlay loop muted style="height: 18rem; margin-left:0rem">
              <source src='./Videos/Bat/LoftedDrive.mp4' type='video/mp4' />
            </video>
            <!-- <h3 style="text-align: center;">Focus on Timing of bat</h3>
            <div style="margin-Left: 7rem">
            <h5>* Maintain eye contact with the ball.</h5>
            <h5>* It helps to judge the pitch of the ball.</h5>
            <h5>* When ball seems to pitch Short of length then play at backfoot.</h5>
            <h5>* When ball seems to pitch in Good length then play at Frontfoot.</h5>
            <h5>* When ball seems to pitch too short in length then avoid play it and simply dug it.</h5>
            </div> -->
          </div>
        </div>
        <div class='row'>
          <div class='col-md-6'>
            
          </div>
          <div class='col-md-6'>
            <!-- <h3 style="text-align: center;">Focus on Release Area</h3>
            <div style="margin-Left: 7rem">
            <h5>* Keep your head straight</h5>
            <h5>* Look for bowler's hand at the time of release.</h5>
            <h5>* Look at the seam position.</h5>
            <h5>* When ball shine is outside, it will outswing.</h5>
            <h5>* When ball shine is inside, it will inswing.</h5>
            
            </div> -->
          </div>
        </div>
        <div class='row'>
          <!-- <h3 id='heading' style="background-color: rgb(255, 0, 106);
    height: 5rem;
    color: white;
    text-align: center;
    padding-top: 1rem">Explore this playlist to learn " Play Shots "</h3>
          
          <div class='col-md-6'>
            <video class='videoTag' autoPlay loop muted style="height: 18rem">
              <source src='./Videos/Bat/FaceTypesofBowl.mp4' type='video/mp4' />
            </video>
          </div>
          <div class='col-md-6'>
          <video class='videoTag' autoPlay loop muted style="height: 18rem">
              <source src='./Videos/Bat/LoftedDrive.mp4' type='video/mp4' />
            </video> -->
            <!-- <h3 style="margin-Left: 6rem">Learn to face Different types of Ball</h3>
            <div style="margin-Left: 7rem">
            <h5>* Maintain eye contact with the ball.</h5>
            <h5>* It helps to judge the pitch of the ball.</h5>
            <h5>* When ball seems to pitch Short of length then play at backfoot.</h5>
            <h5>* When ball seems to pitch in Good length then play at Frontfoot.</h5>
            <h5>* When ball seems to pitch too short in length then avoid play it and simply dug it.</h5>
            </div> 
          </div> -->
          
        </div>
        <div class='row'>
        
          <div class='col-md-6'>
            
          </div>
          <div class='col-md-6'>
            <!-- <h3 style="margin-Left: -6rem; text-align: center;">Learn Lofted Drive</h3>
            <div style="margin-Left: 7rem">
            <h5>* Maintain eye contact with the ball.</h5>
            <h5>* It helps to judge the pitch of the ball.</h5>
            <h5>* When ball seems to pitch Short of length then play at backfoot.</h5>
            <h5>* When ball seems to pitch in Good length then play at Frontfoot.</h5>
            <h5>* When ball seems to pitch too short in length then avoid play it and simply dug it.</h5>
            </div> -->
          </div>
        </div>
        <div class='row'>
          
          <img src="./images/Batting.png" style="width: 65rem;height: 25rem; margin-left: 2rem">
        </div>
        <div class="row" style="margin-top: 3rem; margin-bottom: 3rem">
            <div class="col-md-6">
            <h2 style="color: blue; margin-top: 2rem; margin-left: 5rem">Want to improve your <br></br> bowling skills ?<br></br>We are here to help you</h2>
            </div>
            <div class="col-md-6">
              <img src="./images/Cricket1.jpg" style="width: 80%; border-radius: 2rem; margin-left: -2rem">
            </div>
        </div>
        <!-- <div class='row'>
          <h3 id='heading' style="background-color: rgb(255, 0, 106);
    height: 5rem;
    color: white;
    text-align: center ;
    padding-top: 1rem">Explore this playlist to learn "Spin Bowling"</h3>
          <div class='col-md-6'>
            <video class='videoTag' autoPlay loop muted style="height: 18rem">
              <source src='./Videos/SpinBowl/SpinFollowthrough.mp4' type='video/mp4' />
            </video>
          </div>
          <div class='col-md-6'>
            <video class='videoTag' autoPlay loop muted style="height: 18rem">
              <source src="./Videos/SpinBowl/spinbySteve.mp4" type='video/mp4' />
            </video> -->
            <!-- <h3 style="margin-Left: 4rem; text-align: center;">Focus on your Follow through</h3>
            <div style="margin-Left: 7rem">
            <h5>* Maintain eye contact with the ball.</h5>
            <h5>* It helps to judge the pitch of the ball.</h5>
            <h5>* When ball seems to pitch Short of length then play at backfoot.</h5>
            <h5>* When ball seems to pitch in Good length then play at Frontfoot.</h5>
            <h5>* When ball seems to pitch too short in length then avoid play it and simply dug it.</h5>
            </div> -->
            
          <!-- </div>
        </div> -->
        <div class='row'>
          <div class='col-md-6'>
            
          </div>
          <div class='col-md-6'>
            <!-- <h3 style="margin-Left: 4rem; text-align: center;">Some Tips from Steve O Keefe</h3>
            <div style="margin-Left: 7rem">
            <h5>* Maintain eye contact with the ball.</h5>
            <h5>* It helps to judge the pitch of the ball.</h5>
            <h5>* When ball seems to pitch Short of length then play at backfoot.</h5>
            <h5>* When ball seems to pitch in Good length then play at Frontfoot.</h5>
            <h5>* When ball seems to pitch too short in length then avoid play it and simply dug it.</h5>
            </div> -->
          </div>
        </div>
        <div class='row'>
          <h3 id='heading' style="background-color: rgb(255, 0, 106);
    height: 5rem;
    color: white;
    text-align: center ;
    padding-top: 1rem">Explore this playlist to learn "Fast Bowling"</h3>
          
          <div class='col-md-6'>
            <video class='videoTag' autoPlay loop muted style="height: 23rem">
              <source src='./Videos/FastBowl/FastFollowthrough.mp4' type='video/mp4' />
            </video>
          </div>
          <div class='col-md-6'>
            <video class='videoTag' autoPlay loop muted style="height: 23rem">
              <source src='./Videos/FastBowl/Outswing.mp4' type='video/mp4' />
            </video>
            <!-- <h3 style="margin-Left: 4rem; text-align: center;">Improve your follow through </h3>
            <div style="margin-Left: 7rem">
            <h5>* Maintain eye contact with the ball.</h5>
            <h5>* It helps to judge the pitch of the ball.</h5>
            <h5>* When ball seems to pitch Short of length then play at backfoot.</h5>
            <h5>* When ball seems to pitch in Good length then play at Frontfoot.</h5>
            <h5>* When ball seems to pitch too short in length then avoid play it and simply dug it.</h5>
            </div> -->
          </div>
        </div>
        <div class='row'>
        <img src="./images/Bowling2.png" style="width: 68.5rem; height: 26rem">
          
        </div>
        <div class='row'>
        
          <div class='col-md-6'>
            <!-- <video class='videoTag' autoPlay loop muted >
              <source src='./Videos/FastBowl/StrideLength.mp4' type='video/mp4' />
            </video> -->
          </div>
          <div class='col-md-6'>
            <!-- <h3 style="margin-Left: -8rem; text-align: center;">Stride length</h3>
            <div style="margin-Left: 7rem">
            <h5>* Maintain eye contact with the ball.</h5>
            <h5>* It helps to judge the pitch of the ball.</h5>
            <h5>* When ball seems to pitch Short of length then play at backfoot.</h5>
            <h5>* When ball seems to pitch in Good length then play at Frontfoot.</h5>
            <h5>* When ball seems to pitch too short in length then avoid play it and simply dug it.</h5>
            </div> -->
          </div>
        </div>
      </div>
      
      <div class="container-fluid" id="footer" style="background-color: black;
    color: aliceblue;
    height: 27rem;
    width: 80.7rem;
    padding-top: 5rem;
    padding-bottom: 2rem;
    margin-left: -0rem;">
        
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
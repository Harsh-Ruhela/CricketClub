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
    <link rel="stylesheet" href="Glory.css">
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
                echo"<a class='btn btn-outline-danger data-toggle='tooltip' data-placement='bottom' title='Logout'' style='color: white; margin-left: 2rem' href='Logout.php'>
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
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" ></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height: 35rem">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/New IC2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/New IC5.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/New IC8.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/New IC9.jpg" alt="Third slide">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="./images/New IC10.jpg" alt="Third slide">
    </div> -->
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/New IC11.jpg" alt="Third slide">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="./images/New IC12.jpg" alt="Third slide">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


      
       <div class='container'>
           <div class='row'>
               
               <h3>ICC T20 World Cup 2007 Winning Moments</h3>
               
               <div class='col-md-6'>
               <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/t20w4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/t20w2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/t20w3.jpg" alt="Third slide">
    </div>
  </div>
</div>

               
               </div>
               <div class='col-md-6' id='p1'>
               <div class='card'>
                   <div class='card-body'>
                   <p>
                   The 2007 ICC World Twenty20 was the inaugural Twenty20 International cricket world championship, contested in South Africa from 11 to 24 September 2007. Twelve teams took part in the thirteen-day tournament—the ten Test-playing nations 
                   and the finalists of the 2007 WCL Division One tournament: Kenya and Scotland. India won the tournament, beating Pakistan in the final.
                   </p>
               </div>
               </div>
               </div>
           </div>
           <div class='row'>
               <h3>ICC ODI World Cup 2011 Winning Moments</h3>
               <div class='col-md-6' id='p1'>
               <div class='card'>
                   <div class='card-body'>
                   
                   <p>The 2011 ICC Cricket World Cup was the tenth Cricket World Cup. It was played in India, Sri Lanka, and for the first time Bangladesh. India won the tournament, defeating Sri Lanka by 6 wickets in the final at Wankhede Stadium in Mumbai,
                       thus becoming the first country to win the Cricket World Cup final on home soil.<br></br> India's Yuvraj Singh was declared the man of the tournament. This was the first time in World Cup history that two Asian teams had appeared in the final.
                       It was also the first time since the 1992 World Cup that the final match did not feature Australia .</p>
               </div>
               </div>
               </div>
               <div class='col-md-6'>
               <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/WC11c.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/WC11w2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/Wc11c2.jpg" alt="Third slide">
    </div>
  </div>
</div>
               
               </div>
               
           </div>
           <div class='row'>
               <h3>ICC Champions Trophy 2013 Winning Moments</h3>
               <div class='col-md-6'>
               <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/CCw.webp" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/CCw5.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/CCw3.jpg" alt="Third slide">
    </div>
  </div>
</div>
               
               </div>
               <div class='col-md-6' >
                   <div class='container' id='p1' style="margin-top: 0rem">
                   <div class='card'>
                   <div class='card-body'>
                   <p class='card-text'>The 2013 ICC Champions Trophy was the seventh ICC Champions Trophy, a One Day International cricket tournament held in England and Wales between 6 and 23 June 2013.
                       Three cities hosted the tournament's matches: London at The Oval, Birmingham at Edgbaston and Cardiff at Sophia Gardens, known as Cardiff Wales Stadium for the tournament.
                       <br></br>
                       India won the competition, beating England by five runs in the final after overcoming South Africa, the West Indies and Pakistan in the group stage, followed by a semi-final victory over Sri Lanka.
                       As winners, India earned $2 million in prize money, the largest amount since the tournament's inception.</p>
                   </div>
                   </div>
                   </div>
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
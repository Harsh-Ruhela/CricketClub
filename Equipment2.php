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
    <link rel="stylesheet" href="Equipment.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>    

    <div class="Header">
    <div>
        <?php 
              if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
              {
                echo"<a class='btn btn-outline-danger data-toggle='tooltip' data-placement='bottom' title='Logout'' style='color: white; text-decoration: none; height:2.5rem; margin-left: 2rem' href='Logout.php'>
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
</head>
<body>
  
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
      <div class="card">
        <img  class="card-img-top" src="./images/Rball.jpg" alt="Card image cap">
        <div class="card-body" style="text-align: center">
          <h5 class="card-title">Red Ball</h5>
          <p class="card-text">Price: Rs 400</p>
          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Red Ball">
          <input type="hidden" name="Price" value="400">
        </div>
      </div>
      </form>
      </div>
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img  class="card-img-top" src="./images/Wball.jpg" alt="Card image cap">
          <div class="card-body" style="text-align: center">
            <h5 class="card-title">White Ball</h5>
            <p class="card-text">Price: Rs 400</p>
            <button  type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="White Ball">
            <input type="hidden" name="Price" value="400">
          </div>
        </div>
      </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/Pball.png" alt="Card image cap">
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">Pink Ball</h5>
              <p class="card-text">Price: Rs 400</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="Pink Ball">
              <input type="hidden" name="Price" value="400">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/Yball3.jpg" alt="Card image cap">
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">Yellow Ball</h5>
              <p class="card-text">Price: Rs 400</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="Yellow Ball">
              <input type="hidden" name="Price" value="400">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
      <div class="card">
        <img  class="card-img-top" src="./images/Bat_NB.webp" alt="Card image cap">
        <div class="card-body" style="text-align: center">
          <h5 class="card-title">New Ballance Bat</h5>
          <p class="card-text">Price: Rs 2500</p>
          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Bat_NB">
          <input type="hidden" name="Price" value="2500">
        </div>
      </div>
      </form>
      </div>
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img  class="card-img-top" src="./images/Bat_Kokaburra2.jpg" alt="Card image cap">
          <div class="card-body" style="text-align: center">
            <h5 class="card-title">Kokaburra Bat</h5>
            <p class="card-text">Price: Rs 2800</p>
            <button  type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Bat_K">
            <input type="hidden" name="Price" value="2800">
          </div>
        </div>
      </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/Bat_SG.jpg" alt="Card image cap">
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">SG Bat</h5>
              <p class="card-text">Price: Rs 2700</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="Bat_SG">
              <input type="hidden" name="Price" value="2700">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/Bat_TON.jpg" alt="Card image cap">
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">TON Bat</h5>
              <p class="card-text">Price: Rs 2500</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="Bat_TON">
              <input type="hidden" name="Price" value="2500">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
      <div class="card">
        <img  class="card-img-top" src="./images/Bat_MRF.jpeg" alt="Card image cap" style="height: 16.5rem">
        <div class="card-body" style="text-align: center">
          <h5 class="card-title">MRF Bat</h5>
          <p class="card-text">Price: Rs 3000</p>
          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Bat_MRF">
          <input type="hidden" name="Price" value="3000">
        </div>
      </div>
      </form>
      </div>
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img  class="card-img-top" src="./images/Bat_CEAT.jpeg" alt="Card image cap" style="height: 16.5rem">
          <div class="card-body" style="text-align: center">
            <h5 class="card-title">CEAT Bat</h5>
            <p class="card-text">Price: Rs 2850</p>
            <button  type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Bat_CEAT">
            <input type="hidden" name="Price" value="2850">
          </div>
        </div>
      </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/Bat_Nike.jpg" alt="Card image cap" >
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">Nike Bat</h5>
              <p class="card-text">Price: Rs 2850</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="Bat_Nike">
              <input type="hidden" name="Price" value="2850">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/Bat_Adidas.webp" alt="Card image cap">
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">Adidas Bat</h5>
              <p class="card-text">Price: Rs 2750</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="Bat_Adidas">
              <input type="hidden" name="Price" value="2750">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
      <div class="card">
        <img  class="card-img-top" src="./images/Glove.jpg" alt="Card image cap">
        <div class="card-body" style="text-align: center">
          <h5 class="card-title">Batting Gloves</h5>
          <p class="card-text">Price: Rs 600</p>
          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Glove">
          <input type="hidden" name="Price" value="600">
        </div>
      </div>
      </form>
      </div>
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img  class="card-img-top" src="./images/Glove_WK.jpg" alt="Card image cap">
          <div class="card-body" style="text-align: center">
            <h5 class="card-title">WK Glove</h5>
            <p class="card-text">Price: Rs 550</p>
            <button  type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Glove_WK">
            <input type="hidden" name="Price" value="550">
          </div>
        </div>
      </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/pad2.jpg" alt="Card image cap">
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">Pads</h5>
              <p class="card-text">Price: Rs 650</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="Pad">
              <input type="hidden" name="Price" value="650">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/pad_white.jpg" alt="Card image cap">
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">White Pads</h5>
              <p class="card-text">Price: Rs 650</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="Pad_White">
              <input type="hidden" name="Price" value="650">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
      <div class="card">
        <img  class="card-img-top" src="./images/Helmet.jpg" alt="Card image cap">
        <div class="card-body" style="text-align: center">
          <h5 class="card-title">Helmet</h5>
          <p class="card-text">Price: Rs 1000</p>
          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Helmet">
          <input type="hidden" name="Price" value="1000">
        </div>
      </div>
      </form>
      </div>
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img  class="card-img-top" src="./images/Stumps_Led.jpg" alt="Card image cap" style="height: 16rem">
          <div class="card-body" style="text-align: center">
            <h5 class="card-title">LED Stumps</h5>
            <p class="card-text">Price: Rs 5000</p>
            <button  type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Stumps_LED">
            <input type="hidden" name="Price" value="5000">
          </div>
        </div>
      </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/Stumps.jpg" alt="Card image cap">
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">Wooden Stumps</h5>
              <p class="card-text">Price: Rs 2000</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="Stumps">
              <input type="hidden" name="Price" value="2000">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/Bails.webp" alt="Card image cap">
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">Bails</h5>
              <p class="card-text">Price: Rs 300</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="Bails">
              <input type="hidden" name="Price" value="300">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
      <div class="card">
        <img  class="card-img-top" src="./images/Shoes.jpg" alt="Card image cap">
        <div class="card-body" style="text-align: center">
          <h5 class="card-title">GM</h5>
          <p class="card-text">Price: Rs 2500</p>
          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Shoes">
          <input type="hidden" name="Price" value="2500">
        </div>
      </div>
      </form>
      </div>
      <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img  class="card-img-top" src="./images/Shoes_Adidas.jpg" alt="Card image cap" style="height: 16rem">
          <div class="card-body" style="text-align: center">
            <h5 class="card-title">Adidas</h5>
            <p class="card-text">Price: Rs 2650</p>
            <button  type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Shoes_Adidas">
            <input type="hidden" name="Price" value="2650">
          </div>
        </div>
      </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/Shoes_Puma.webp" alt="Card image cap" style="height: 16rem">
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">Puma</h5>
              <p class="card-text">Price: Rs 3000</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="Shoes_Puma">
              <input type="hidden" name="Price" value="3000">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img  class="card-img-top" src="./images/Shoes2.jpg" alt="Card image cap">
            <div class="card-body" style="text-align: center">
              <h5 class="card-title">Asice</h5>
              <p class="card-text">Price: Rs 2800</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
              <input type="hidden" name="Item_Name" value="shoes2">
              <input type="hidden" name="Price" value="2800">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="footer" style="background-color: black;
    color: aliceblue;
    height: 27rem;
    width: 80.7rem;
    padding-top: 5rem;
    padding-bottom: 2rem;
    margin-left: -0rem;
    margin-top: 2rem">
        
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
</body>
</html>
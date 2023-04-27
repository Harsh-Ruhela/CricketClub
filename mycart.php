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
    <link rel="stylesheet" href="mycart.css">
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

    <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light mt-5">
            <h1>My Cart</h1>
        </div>

        <div class="col-lg-9">
            <br>
            <table class="table ">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr=$key+1;
                                echo"
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                            <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                        </td>
                                    <td class='itotal'></td>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </td>
                                </tr>
                                ";
                            }
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>

        <div class="col-lg-3">
            <br>
            <div class="border bg-light rounded p-4">
                <h4>Grand Total:</h4>
                <h5 class="text-right" id="gtotal"></h5>
                <br>
                <?php
                    if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0)
                    {

                                
                ?>
                <form action="purchase.php" method="POST">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <label>Number</label>
                        <input type="num" class="form-control" name="phone_no" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">Cash on Delivery
                    </div>
                    <br>
                    <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
                </form>
                <?php
                }
                ?>
            </div>
        </div>

    </div>
    </div>
<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);

            /*price 650 quantity 1 gt=0+(650*1)
              price 750 quantity 2 gt=gt+(750*2)
              price 850 quantity 1
            */
        }
        gtotal.innerText=gt;
    }
    subTotal();
</script>
</body>
</html>
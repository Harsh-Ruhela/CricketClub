<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Cart.css">
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
    <div >
        <div class="Header">
        <div class="user">
                <i class="fa-solid fa-user"></i>
            </div>
            <h3>Welcome User</h3>
            <ul style="margin-Right: 4rem">
                <li ><a href='Home.php' class='navb'>Home</a></li>
              <li ><a href='About.php' class='navb'>About</a></li>
              <li ><a href='Glory.php' class='navb'>Glory</a></li>
              <li ><a href='Equipment.php' class='navb'>Equipments</a></li>
              <li ><a href='Contact.php' class='navb'>Contact</a></li>
              <li ><a href='Cart.php' class='navb'>Cart</a></li>
            </ul>
            
        </div>
        <div class='container'>
            <div class='row'>
                 <img src='./images/INDJersyNew1.jpg' style="width: 50rem; height: 35rem; margin-Left: 8.5rem; margin-Top: 2rem"></img><br></br>
                 <img src='./images/Size.jpg' style="width: 50rem; height: 8rem; margin-Left: 8.5rem; margin-Top: 2rem"></img>
            </div>
            <div class='row' id='ship'>
                <h3 style="text-align: center;">Enter Shipping Details</h3>
                <form action='https://formspree.io/f/xlevngyv' method='post'>
                    <input type="text" name="Name" placeholder="Enter Name" style="width: 15rem; height: 2.5rem"></input><br></br>
                    <input type="email" name="Email" placeholder="Enter Email ID" style="width: 15rem; height: 2.5rem"></input><br></br>
                    <input type="tel" name="Mobile No." placeholder="Enter Mobile Number" style="width: 15rem ;height: 2.5rem"></input><br></br>
                    <label for="size">Select size: </label><br>
                    <select name="size" id="TShirt" placeholder='Select size' style="width: 15rem; height: 2.5rem">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select><br></br>
                    <input type="text" name="State" placeholder="Enter State" style="width: 15rem; height: 2.5rem"></input><br></br>
                    <input type="text" name="City" placeholder="Enter City" style="width: 15rem; height: 2.5rem"></input><br></br>
                    <textarea name="Address" cols="29.5" rows="2" placeholder="Enter Address" ></textarea><br></br>
                    <button type='submit' class='btn btn-danger'  style="width: 15rem ;height: 2.5rem">Place Order</button>
                </form>
            </div>
        </div>
        <div class='footer'>
            <h6>All rights reserved</h6><hr></hr>
            <h6>@Harsh Ruhela Moradabad 2022</h6>
        </div>
    </div>
</body>
</html>
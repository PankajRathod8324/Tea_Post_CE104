<?php
// session_start();
$pname=$_SESSION['name'];
$con=mysqli_connect("localhost","root","","user1");
if($con){
    echo "";
}else{
    echo "not connected";
}
$qry="SELECT *FROM cart WHERE 'name'='$pname'";






?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tea Post</title>
  <link rel="stylesheet" href = "style.css">
  <link rel="icon" href="img1.jpg">
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <header>
  <ul class="list1">
  <img src="img\finallogo.png" class="nav" height="40px" width="40px">
    <li><a>Home</a></li>
    <li><a>About Us</a></li>
    <li><a href="">Products</a></li>
    <li><a href="#ftr">Contact Us</a></li>
     <?php
    session_start();
    if(isset($_SESSION['main'])){
      echo "<li><a>Welcome ".$_SESSION['main']."</a></li>";
      echo "<li><a href='distroy.php'>Logout</a></li>";
    }else{
      echo '
    <li><a href="registration.php">Sign Up</a></li>
    <li><a href="login.php">Log In   </a>   </li>';
   }
   ?>
   <li><button style="margin-left:10px;margin-top:15px;background-color:lightblue;">Check Out</button></li>
  </ul>
 </header>





 <footer>
  <div class="third" id="ftr" >
    <div class="footer">
      <h2 class="h2">QUICK LINES</h2>
      <h4>Shop</h4>
      <h4>Career</h4>
      <h4>Apni Chai Ki Dukaan</h4>
      <h4>A Place to Talk</h4>
      <h4>Blog</h4>
      <h4>Contact us</h4>
    </div>
    <div class="footer1">
      <h2 class="h2">OUR POLICIES</h2>
      <h4>Privacy Policy</h4>
      <h4>Shipping Policy</h4>
      <h4>Terms & Conditions</h4>
      <h4>Refund & Cancellation Policy</h4>

    </div>
    <div class="footer3">
      <h2 class="con">CONTACT US</h2>
      <h4>Address:123,V3-Corner,<br>Adajan</h4>
      <h4>Contact:+91 98653274123</h4>
      <h4>Privacy Policy</h4>
      <h4>Shipping Policy</h4>
    </div>
    <div class="form-container">
      <form action="" method="post">
        <h2 class="contact-container">Contact Us</h2>
        Name :
      <input type="text" name="name"><br>
        Email :
      <input type="text" name="email"><br>
       Contact No :
      <input type="text" name="contactno"><br>
       Date :
      <input type="date" name="date"><br>
      <input type="submit" name="login"><br>
      </form>

    </div>
  </div>
  </footer>
</body>

</html>
 

<?php
include ('conn.php');
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
    <li><a href="#cen">About Us</a></li>
    <li><a href="#prdct">Products</a></li>
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
  </ul>
</header>

<div class="img1"></div>
  <div class="main">
    <div class="cen" id="cen"> <h1>Who We Are</h1></div>
   
    <p>The deeply rooted love for India’s favourite beverage paved the way for the inception of Tea<br> Post- a place
      dedicated to chai lovers! The fastest-growing tea chain in India, Tea Post is responsible <br>for serving more
      than 2 million cups of happiness every month in the form of an aromatic cup of tea.<br> Even though it is a
      popular beverage across the country, chai lovers could not find a café that served<br> an array of teas at an
      affordable price.</p>
  </div><br>
  
  <div class="text-container">
  <h1 >Tea Post Moments</h1>
  <div class="cente"></div>
  <p>Visit our gallery to witness the special moments shared at Tea Post.</p>
  </div>
  <div class="img">
    <img src="3.jpg">
    <img src="4.jpg">
    <img src="5.jpg">
  </div>
  <p>Stay updated with the shenanigans of Tea Post through our social media.<br> Follow us on Instagram for
    regular updates, stories, events, and much more!<p>
<main>
 
<?php
   $qry="SELECT *FROM categories";
   $res1=mysqli_query($con,$qry);
   if($res1){
     echo "";
   }else{
     echo "not";
   }
   while($row = mysqli_fetch_assoc($res1)){
    $id = $row['id'];
    $name= $row['name'];
    $image=$row['img'];

  echo '
  <div class="product" id="prdct">
  
  <img class="image-container1" src='.$image.'  height="" width="">
  

  <div class="text-container1">
  <h1>'.$row['name'].'</h1>
  </div>
     </div>
  
   <div class="hsd">
    <ul class="try">

  <li class="udo"><a href="product.php?cid=' .$row['id'].'" class="udoo">See more</a></li>
</ul>
</div>';
} 
?>
</main>

<!-- <div class="hsd">
<ul class="try">
  <li class="udo"><a href='product.php?c_id=".$row[id]."' class="udoo">See more</a></li>
  <li class="udo"><a href="product.php?c_id=".$row[id] class="udoo">See more</a></li>
  <li class="udo"><a href="product.php?c_id=".$row[id] class="udoo">See more</a></li>
  <li class="udo"><a href="product.php?c_id=".$row[id] class="udoo">See more</a></li>
</ul>
</div> -->

<div class="footer-container">

<footer>
  <div class="third" id="ftr">
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
</div>
</body>
</html>

<?php

if(isset($_POST['login'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contactno=$_POST['contactno'];
  $date=$_POST['date'];

$qry1="INSERT INTO `contact`(`name`, `email`, `contactno`, `date`) VALUES ('$name','$email','$contactno','$date')";
$req=mysqli_query($con,$qry1);

if($req){
  echo "";
}else{
  echo "not insert!";
 
}
}
?>
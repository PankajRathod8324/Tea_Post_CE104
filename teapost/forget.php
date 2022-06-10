<?php
session_start();
$con=mysqli_connect("localhost","root","","user_info");
$showalert=false;
$showerror=false;
if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $qry4="SELECT * FROM `login form` where email='$email'"; 
    $result=mysqli_query($con,$qry4);
    $resul1 = mysqli_num_rows($result);
  
    if($resul1){
     
      echo "yesssss";
      $_SESSION['main'] = $email;
      header("location:update.php");
    }
    else{
      echo "invalid";
    }
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h1 class="active"> Email</h1>
    <!-- Login Form -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
<?php
if($showalert){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>success!</strong> you can login
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($showerror){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>erroe!</strong> '.$showerror.'
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
      <input type="text" class="fadeIn second" name="email" placeholder="email">
      <input type="submit" class="fadeIn fourth" value="Submit" name="submit">
     
    </form>
    <!-- Remind Passowrd -->
   
  </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>
</html>
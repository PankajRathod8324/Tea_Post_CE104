<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "user_info");
$email = $_SESSION['main'];
if (isset($_POST['submit'])) {

  if (!empty($_POST['password'])) {
    $pass = $_POST['password'];
    $cpass = $_POST['conformpassword'];
    if ($pass == $cpass) {
      $qry3 = "UPDATE `login form` SET `password`='$pass',`cpassword`='$cpass' WHERE `email`='$email'";
      $result1 = mysqli_query($con, $qry3);
      if ($result1) {
        $_SESSION['main'] = $email;
        header("location:dashboard.php");
      } else {
        echo "not Success!";
      }
    }
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
      <h1 class="active"> Sign Up </h1>
      <!-- Login Form -->
      <form action="" method="post">
        <?php
        // if($showalert){
        //   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        //         <strong>success!</strong> you can login
        //         <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        // </div>';
        // }
        // if($showerror){
        //   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //         <strong>erroe!</strong> '.$showerror.'
        //         <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        // </div>';
        // }
        ?>

        <input type="text" class="fadeIn third" name="password" placeholder="password">
        <input type="text" class="fadeIn th" name="conformpassword" placeholder="confirm password">
        <input type="submit" class="fadeIn fourth" value="Sign up" name="submit">
      </form>
      <!-- Remind Passowrd -->
      <!-- <div id="formFooter">
      <a class="underlineHover" href="website.html">Log Out</a>
    </div> -->
    </div>
  </div>
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>

</html>
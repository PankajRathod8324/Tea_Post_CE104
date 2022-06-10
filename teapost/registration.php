<?php
session_start();

$con=mysqli_connect("localhost","root","","user_info");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['submit'])&& !empty($_POST['email'])){

		    if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$pattern="/[A-Za-z]/";
			if(preg_match($pattern,$name)){
				$_SESSION['main']=$name;
				header("location:dashboard.php");
				echo "Success";
			}else{
				echo "not success"; 
			}
		
		
			$name1=$_POST['email'];
			$pattern1="/[A-Za-z][0-9]+[@][gmail]+[.com||.in]/";
			if(preg_match($pattern1,$name1)){
				echo "Success";
			}else{
				echo "not success"; 
			}
		
			$name2=$_POST['password'];
			$pattern2="/[A-Za-z][0-9]+\W/";
			if(preg_match($pattern,$name)){
				echo "Success";
			}else{
				echo "not success"; 
			}
		
		
			$name3=$_POST['conformpassword'];
			$pattern3="/[A-Za-z][0-9]+\W/";
			if(preg_match($pattern3,$name3)){
				echo "Success";
			}else{
				echo "not success"; 
			}
		}


		$name=$_POST['name'];
		$email=$_POST['email'];
		$psd=$_POST['password'];
		$pwd=$_POST['conformpassword'];
		
		if($pwd==$psd){
		$qry="INSERT INTO `login form`(`name`, `email`, `password`, `cpassword`) VALUES ('$name','$email','$psd','$pwd')";
		$req=mysqli_query($con,$qry);
		if($req){
			header("location:dashboard.php");
		}
		}else{
			echo "Your password are diffrent";
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
    <form action=""  method="post" >
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
      <input type="text" class="fadeIn first" name="name" placeholder="Username">
      <input type="text" class="fadeIn second" name="email" placeholder="Email">
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
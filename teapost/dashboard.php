<?php
session_start();

if(isset($_SESSION['main'])){
	echo "welcome".$_SESSION['main'];
}else{
	header("location:registration.php");
}
?>
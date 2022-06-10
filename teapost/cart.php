<?php
session_start();

include "conn.php";
$c_id=$_GET['id'];

$qry="SELECT * FROM `product` WHERE categories_id=$c_id";
$res=mysqli_query($con,$qry);
if($res){
	echo "success";
}else{
	echo "not success";
}
$row=mysqli_fetch_assoc($res);

while($row=mysqli_fetch_assoc($res)){
$pid=$row['id'];
$pname=$row['name'];
$image=$row['img'];
$price=$row['price'];


$sql="INSERT INTO `carts`(`product_name`, `product_price`, `image`, `product_id`, `categories_id`) VALUES 
('$pname','$price','$image','$pid','$c_id')";
$res=mysqli_query($con,$sql);
if($res){
	echo "success";
	header("location:website.php");
}else{
	echo "Product not added";
}
}
?>
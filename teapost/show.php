<?php
session_start();

include "conn.php";

$c_id=$_GET['id'];
$qry="SELECT *FROM `carts` WHERE categories_id=$c_id";
$res=mysqli_query($con,$qry);
if($res){
    $_SESSION['main']=$c_id;
    echo "success";
}else{
    echo "not success";
}
while($row=mysqli_fetch_assoc($res)){
    $id = $row['id'];
    $name= $row['name'];
    $price= $row['price']; 
    $image=$row['img'];


  echo '<div class="product" id="prdct">
  <img class="image-container1" src='.$image.'  height="200px" width="200px">

  <div class="text-container1">
  <h1>'.$row['name'].'</h1>
 
 
    </div>
    </div>';
} 
?>
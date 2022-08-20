<?php

$name=$_POST['productname'];
$price=$_POST['productprice'];
$des=$_POST['description'];
$file=$_FILES['file'];
$uniq=date("Y_M_D_h_i");
$target="../images/$uniq.JPG";
move_uploaded_file($file['tmp_name'],$target);
$conn=new mysqli('localhost','root','','amaresh');
$query="insert into admin(Name,ProductPrice,Details,Image) values('$name',$price,'$des','$target')";
$insert=mysqli_query($conn,$query);

?>

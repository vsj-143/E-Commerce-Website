<?php
$pid=$_GET['pid'];
$conn=new mysqli('localhost','root','','amaresh');
$query="delete from admin where Id=$pid";
$del=mysqli_query($conn,$query);
if($del){
    header('location:addproduct.php');
}
?>
<?php
$email=$_POST['emailid'];
$password=$_POST['passwordid'];
$conn=new mysqli('localhost','root','','amaresh');
$query="select * from reg where E_Mail='$email' and Password='$password' limit 1";
$a=mysqli_query($conn,$query);
$rows=mysqli_num_rows($a);
if($rows==0){
echo "invalid details</br>";
echo "<a href='login.html'>Try Again</a>";
die;
}
if(!$rows==0){}
header('location:view.php');
?>
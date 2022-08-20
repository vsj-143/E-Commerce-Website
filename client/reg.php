
<?php
$name=$_POST['name'];
$last=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];
$conn= new mysqli('localhost','root','','amaresh');
$insert1="insert into reg(Name,LastName,E_Mail,Password,PhoneNumber) values('$name','$last','$email','$password',$number)";
$succ=mysqli_query($conn,$insert1);
if(isset($succ)){
    echo "execellent";
}





?>
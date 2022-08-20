<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .img1{
            width: 330px;
            heigth:450px;
            border-radius:20px;

        }
        div.parent{
            background: whitesmoke;
            width:330px;
            height:450px;
            margin-left:30px;
            border-color: red;
            border-radius: 100px;
            
          
             }
             
      div.p2{
        display:inline-block;
        justify-content:space-around;
      }
        
         .but{
            background-color:red;
            margin-left:125px;
            border-radius:2px;
            padding:6px;
            font-style:italic;
            font-family:Arial;
            border:none;
            cursor:pointer;
        
            
         }   
            
        
        
        
        </style>
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
$conn=new mysqli('localhost','root','','amaresh');
$query="select * from admin";
$obj=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($obj)){
    $name=$row['Name'];
    $file=$row['Image'];
    $price=$row['ProductPrice'];
    $des=$row['Details'];
    $id=$row['Id'];

    
echo "
<div class='p2'>
<div class='parent'>
<img  class='img1' src='$file'>  
<div class='infor'>

                      <h1 class='name'>Name: $name</h1>
                      <h3 class='price'>Price: $$price</h3>
                      <h4 class='des'>Details:$des</div></h4>
                      <a href='delete.php?pid=$id'><button class='but'>delete</button></a>
</div>
</div>
</div>

";
}
?>
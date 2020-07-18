<?php
require 'connect.php';
$email=$_POST['email'];
    $psw=$_POST['psw'];
  

$query = mysqli_query($con, "SELECT * FROM login WHERE email='".$email."'");

    if (!$query)
    {
        die('Error: ' . mysqli_error($con));
    }

if(mysqli_num_rows($query) > 0){

    echo "email already exists";
    include 'products.html';


}else{
    echo "email doesnot exists";
    include 'signup.html';


}


    
    
   /* $sql="INSERT INTO login VALUES('{$email}','{$psw}')";
        if(mysqli_query($con,$sql))
        {
            echo("success");
            
        }
        else{
            http_response_code(422);
        }*/









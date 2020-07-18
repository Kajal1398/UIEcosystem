<?php
require 'connect.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$psw=$_POST['psw'];


    $sql="INSERT INTO login VALUES('{$fname}','{$lname}','{$phone}','{$email}','{$psw}')";
        if(mysqli_query($con,$sql))
        {
            echo("success");
            include 'products.html';
            

            
        }
        else{
            echo("failed");

            http_response_code(422);
        }

        ?>
<?php

$con=mysqli_connect("localhost","root","","ecommerce");

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    mysqli_query($con,"SELECT * FROM `user` WHERE email='$email' and password='$password'");
}



?>
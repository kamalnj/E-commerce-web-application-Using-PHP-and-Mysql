<?php

session_start(); 

    $email = $_POST['email1'];
    $password = $_POST['password1'];

    $con=mysqli_connect("localhost","root","","ecommerce");

   $result = mysqli_query($con,"SELECT * FROM `user` WHERE email='$email' and password='$password'");
   $id_u = mysqli_fetch_assoc($result);  
   if(mysqli_num_rows($result)){
     $_SESSION['user']=$id_u['id'];
    echo"
    <script>
    alert('Connexion réussie');
    window.location.href='../index.php';
    </script>";
}else{
    echo"
    <script>
    alert('Connexion échouée');
    window.location.href='logina.php';
    </script>";
}




?>
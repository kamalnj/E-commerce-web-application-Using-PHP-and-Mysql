<?php


    $email = $_POST['email1'];
    $password = $_POST['password1'];

    $con=mysqli_connect("localhost","root","","ecommerce");

   $result = mysqli_query($con,"SELECT * FROM `user` WHERE email='$email' and password='$password'");
   session_start(); 
   if(mysqli_num_rows($result)){
    $_SESSION['user']=$email;
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
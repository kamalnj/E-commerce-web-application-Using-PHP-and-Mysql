<?php
$con =  mysqli_connect("localhost","root","","ecommerce");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];



  $re_email = mysqli_query($con,"SELECT * FROM `user` WHERE email='$email'");
  $re_name = mysqli_query($con,"SELECT * FROM `user` WHERE username='$name'");

  if(mysqli_num_rows($re_email)){
    echo"
    <script>
    alert('email is already taken');
    window.location.href = '../form/register.php';
    </script>
    ";
}elseif(mysqli_num_rows($re_name)){
    echo"
    <script>
    alert('username is already taken');
    window.location.href = '../form/register.php';
    </script>
    ";
}else{
    mysqli_query($con,"INSERT INTO `user`( `username`, `email`, `password`)
    VALUES ('$name','$email','$pwd')");
    echo "    <script>
    alert('Compte créer avec succés');
    window.location.href = '../form/logina.php';
    </script>";
}
}


?>
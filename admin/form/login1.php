<?php 

$con =  mysqli_connect("localhost","root","","ecommerce");

$nameA = $_POST['username'];
$pwdA = $_POST['userpassword'];

$result = mysqli_query($con,"SELECT * FROM `admin` WHERE nomA = '$nameA' AND pwdA = '$pwdA' ");
 session_start();

 if (mysqli_num_rows($result)) {
 $_SESSION['admin'] = $nameA;
echo"
<script>
alert('Login Successfully');
window.location.href = '../admin.php';
</script>

";

} else {
    echo"
<script>
alert('Invalid USERNAME/PASSWORD');
window.location.href = 'login.php';
</script>
";
}
?>
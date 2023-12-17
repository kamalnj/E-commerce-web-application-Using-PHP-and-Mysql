<?php 
 $id = $_GET['ID'];
 include('product/confi.php');
$reus= mysqli_query($con,"DELETE FROM `user` WHERE id='$id'");
if ($reus) {
    echo "
    <script>
alert ('Utilisateur supprimé');
window.location.href ='usert.php'

    </script>
    ";
}

?>
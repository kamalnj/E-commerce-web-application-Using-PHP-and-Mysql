<?php 
 $id = $_GET['ID'];
 include('confi.php');
$reus= mysqli_query($con,"DELETE FROM `tblproduct` WHERE id='$id'");
if ($reus) {
    echo "
    <script>
alert ('Produit supprimé');
window.location.href ='tablep.php'

    </script>
    ";
}

?>
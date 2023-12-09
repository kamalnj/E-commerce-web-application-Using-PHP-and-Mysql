<?php
if(isset($_POST['submit'])){
    include 'confi.php';
    $pname = $_POST['nom'];
    $pdescription = $_POST['description'];
    $pprix = $_POST['prix'];
    $pimage = $_FILES['image'];
    $image_loc = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_des="uploaded images/".$image_name;  
 move_uploaded_file($image_loc,$image_des);
 $pstock = $_POST['stock'];
 $pcategorie = $_POST['categorie'];
 $ptype = $_POST['type'];



 mysqli_query($con,"INSERT INTO `tblproduct`( `name`, `description`, `prix`, `image`, `categorie`,`stock`,`type`)
  VALUES ('$pname','$pdescription','$pprix','$image_des','$pcategorie','$pstock','$ptype')");
}
header("location:index.php");






?>
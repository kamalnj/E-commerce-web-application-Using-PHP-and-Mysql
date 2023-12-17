
            <?php
            include("confi.php");
            session_start();
            if (isset($_POST['add_cart'])) {
            $user_id = (isset($_SESSION['user']));

            $product_name = $_POST['namep'];
            $quantity = $_POST['quantity'];
            $prix = $_POST['prix'];
            $taillep = $_POST['sizep']   ;
            $select_cart = mysqli_query($con,"SELECT * FROM `cart` WHERE name='$product_name' AND user_id='$user_id' ");
            if(mysqli_num_rows($select_cart)>0) {
            echo"
                    <script>
                    alert('Produit déjà ajouter')
                    window.location.href= 'index.php';
                    </script>
                    ";
            
            }else{
        mysqli_query($con,"INSERT INTO `cart`(user_id,name,price,quantity,size) VALUES('$user_id','$product_name','$prix','$quantity','$taillep')  ");
        echo"
        <script>
        alert('Produit ajouter')
        window.location.href= 'viewcart.php';
        </script>
        ";
            }

            }
            if(isset($_POST['remove'])){
                $remove_id = $_POST['pn'];
                mysqli_query($con, "DELETE FROM `cart` WHERE name = '$remove_id'");
                header('location:viewcart.php');
             }
            ?>


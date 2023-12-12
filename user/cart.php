
            <?php
            session_start(); 
            $product_name = $_POST['namep'];
            $quantity = $_POST['quantity'];
            $prix = $_POST['prix'];   
            
            if (isset($_POST['submit'])) {
                $check_product = array_column($_SESSION['cart'],'namep');
                if (in_array($product_name,$check_product)) {
                    echo"
                    <script>
                    alert('Produit déjà ajouter')
                    window.location.href= 'cadeau.php';
                    </script>
                    ";
                }else{

                $_SESSION['cart'][] = array(
                    'namep' => $product_name,
                    'quantityp' => $quantity,
                    'prixp' => $prix
                );   
                header("location:viewcart.php")  ;}
            
            }

            
            ?>


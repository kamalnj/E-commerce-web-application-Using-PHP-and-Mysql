
            <?php
            session_start(); 
            if (isset($_POST['submit'])) {

            $product_name = $_POST['namep'];
            $quantity = $_POST['quantity'];
            $prix = $_POST['prix'];
            $taillep = $_POST['sizep']   ;
            
                $check_product = array_column($_SESSION['cart'],'namep');
                if (in_array($product_name,$check_product)) {
                    echo"
                    <script>
                    alert('Produit déjà ajouter')
                    window.location.href= 'cadeau.php';
                    </script>
                    ";
                    exit();
                }else{

                $_SESSION['cart'][] = array(
                    'namep' => $product_name,
                    'sizep' => $taillep,
                    'quantityp' => $quantity,
                    'prixp' => $prix
                );   
                header("location:viewcart.php")  ;
            exit();}
            
            }
        if (isset($_POST['remove'])) {
            foreach ($_SESSION['cart'] as $key => $value) {
                if ((isset($value['namep']) ? $value['namep'] : '') === $_POST['pn']) {
                  unset($_SESSION['cart'][$key]);
                  $_SESSION['cart']=array_values($_SESSION['cart']);
                  header('location:viewcart.php') ;
        }
    }
}      
            ?>


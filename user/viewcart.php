<html lang="en">
     <head>
         <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
          <title>Document</title> 
          <?php 
            session_start();   
                include'nav.php'; include'solde.php';
           ?>
         </head> 
         <body>
             <div class=" container" >
                 <div class=" text-center py-9">
                    <h1 class=" text-4xl font-bold">YOUR CART</h1>
                </div>
                 <form action="cart.php" method="POST"> 
                    <table class=" border-collapse w-full text-xl text-center rtl:text-right text-black font-semibold dark:text-gray-400">
                         <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"> 
                            <tr>
                                 <th scope="col" class=" px-6 py-3"> Produit </th> 
                                 <th scope="col" class="px-6 py-3"> Quantité </th>
                                  <th scope="col" class="px-6 py-3"> prix </th> 
                                  <th scope="col" class="px-6 py-3"> Taille </th> 
                                  <th scope="col" class="px-6 py-3"> Total </th> 
                                </tr> 
                            </thead> 
                            <tbody>
                                <?php 
                                if (isset($_SESSION['cart'])){
                                    foreach ($_SESSION['cart'] as $key => $value){
                                        echo"
                                        <form action='cart.php' method='POST'>

                                         <tr> 
                                        <td class='px-7'>" . (isset($value['namep']) ? $value['namep'] : '') . "</td>
                                        <td class='px-7'>" . (isset($value['quantityp']) ? $value['quantityp'] : '') . "</td>
                                        <td class='px-7'>" . (isset($value['prixp']) ? $value['prixp'] : '') . "</td>

                                        <td class='px-7'>" . (isset($value['sizep']) ? $value['sizep'] : '') . "</td>

                                        <td class='px-7'>" . (isset($value['quantityp']) ? (int)$value['quantityp'] : 0) * (isset($value['prixp']) ? (float)$value['prixp'] : 0) . "</td>
                                        <td class='px-7'><button type='submit' name='remove' class='bg-red-500  font-medium text-lg hover:bg-red-700 text-white  py-2 px-4 rounded' > Supprimer</button></td>
                                        <input type='hidden' name='pn' value='" . (isset($value['namep']) ? $value['namep'] : '') . "'>


                                
                                
                                
                                        </tr>
                                        </form>
                                        ";
                                        }
                                       
                                }
                                
                                
    
                                ?>
                            </tbody>
                    </table>
                 </form>
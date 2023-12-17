<html lang="en">
     <head>
         <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
          <title>Document</title> 
          <?php 
                include'nav.php'; include'solde.php';
           ?>
         </head> 
         <body>
            
             <div class=" container" >
                 <div class=" text-center py-9">
                    <h1 class=" text-4xl font-bold">VOTRE PANIER</h1>
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
                                $totalt = 0;
                                include 'confi.php';
                                $user_id = (isset($_SESSION['user']));
                              $cart_query = mysqli_query($con,"SELECT * FROM `cart` WHERE user_id='$user_id'");
                                if (mysqli_num_rows( $cart_query ) > 0) {

                                    while($cart = mysqli_fetch_array( $cart_query )){
                                        $quantity = $cart['quantity'];
                                        $price = $cart['price']  ;
                                        $totalt += $quantity * $price;
                                        echo"
                                        <form action='cart.php' method='POST'>

                                         <tr> 
                                        <td class='px-7'> $cart[name] </td>
                                        <td class='px-7'>$cart[quantity]</td>
                                        <td class='px-7'> $cart[price] DH</td>

                                        <td class='px-7'>$cart[size]</td>

                                        <td class='px-7'>".($sub_total=$cart['price']* $cart['quantity'])." DH</td>
                                        <td class='px-7'><button type='submit' name='remove' class='bg-red-500  font-medium text-lg hover:bg-red-700 text-white  py-2 px-4 rounded' > Supprimer</button></td>
                                        <input type='hidden' name='pn' value='$cart[name]'>


                                
                                
                                
                                        </tr>
                                        ";}}
                                        
                                       
                                
                                
                                
    
                                ?>
                            </tbody>
                    </table>
                 </form>
                <?php
                

echo"

                 <div class=' px-4 py-40 mb-4  '>
                        <div class='p-6 border border-blue-100 dark:bg-gray-900 dark:border-gray-900 bg-gray-50 md:p-8'>
                            <h2 class='mb-8 text-3xl font-bold text-gray-700 dark:text-gray-400'>Votre commande</h2>
                            <div
                                class='flex items-center justify-between pb-4 mb-4 border-b border-gray-300 dark:border-gray-700 '>
                                <span class='text-gray-700 dark:text-gray-400'>total</span>
                                <span class='text-xl font-bold text-gray-700 dark:text-gray-400'> $totalt  DH</span>
                            </div>
                            <div class='flex items-center justify-between pb-4 mb-4 '>
                                <span class='text-gray-700 dark:text-gray-400 '>La livraison</span>
                                <span class='text-xl font-bold text-gray-700 dark:text-gray-400 '>Gratuit</span>
                            </div>

                           
                            <div class='flex items-center justify-between '>
                                <button
                                    class='block w-full py-4 font-bold text-center  hover:border hover:border-slate-950 text-gray-100 uppercase bg-black rounded-md hover:text-black hover:bg-gray-100'>Checkout</button>
                            </div>
                        </div>
                    </div>
             </div>
             ";?></body>
             
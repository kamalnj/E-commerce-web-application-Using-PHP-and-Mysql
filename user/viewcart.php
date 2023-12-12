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
                 <form action="" method="POST"> 
                    <table class=" border-collapse w-full text-xl text-center rtl:text-right text-black font-semibold dark:text-gray-400">
                         <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"> 
                            <tr>
                                 <th scope="col" class=" px-6 py-3"> Produit </th> 
                                 <th scope="col" class="px-6 py-3"> Quantité </th>
                                  <th scope="col" class="px-6 py-3"> prix </th> 
                                  <th scope="col" class="px-6 py-3"> Total </th> 
                                </tr> 
                            </thead> 
                            <tbody>
                                <?php 
                                if (isset($_SESSION['cart'])){
                                    foreach ($_SESSION['cart'] as $key => $value){
                                        echo" <tr> 
                                        <td class='px-7'>" . (isset($value['namep']) ? $value['namep'] : '') . "</td>
                                        <td class='px-7'>" . (isset($value['quantityp']) ? $value['quantityp'] : '') . "</td>
                                        <td class='px-7'>" . (isset($value['prixp']) ? $value['prixp'] : '') . "</td>
                                
                                
                                
                                
                                        </tr>";
                                       
                                }
                                
                                
                            }
                                ?>
                            </tbody>
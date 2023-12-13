<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("nav.php");
    include("solde.php");?>
</head>
<body>
    <?php 
    include("confi.php");
    $id = $_GET["id"];
    $requete = mysqli_query($con,"SELECT * FROM `tblproduct` where id='$id'"); 
        while($row = mysqli_fetch_assoc($requete)){
            if($row["type"] == "vetements"){
echo "
<section class='overflow-hidden bg-white py-11 font-poppins dark:bg-gray-800'>
    <div class='max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6'>
        <div class='flex flex-wrap -mx-4'>
            <div class='w-full h-full px-4 md:w-1/2 '>
                <div class='sticky top-0 z-50 overflow-hidden '>
                    <div class='relative mb-6 lg:mb-10 lg:h-2/4 '>
                        <img src='../admin/product/$row[image]' alt=''
                            class=' w-full h-full '>
                    </div>
                    
                </div>
            </div>
            <div class='w-full px-4 md:w-1/2 '>
                <div class='lg:pl-20'>
                    <div class='mb-8 '>
                    <form action='cart.php' method='POST' >
                        <span class='text-lg font-medium text-rose-500 dark:text-rose-200'>New</span>
                        <input type='text' name='namep' class='max-w-xl mt-2 mb-6 text-2xl font-bold dark:text-gray-400 md:text-4xl'
                            value='$row[name]'
                        <p class='max-w-md mb-8 text-gray-700 dark:text-gray-400'>
                          $row[description]
                        </p>
                        <p class='inline-block mb-8 text-4xl font-bold text-gray-700 dark:text-gray-400 '>
                            <span>$row[prix] DH</span>
                        </p>
                        <p class='text-green-600 dark:text-green-300 '>$row[stock] in stock</p>
                    </div>
                    <div class='flex items-center mb-8'>
                    <span class='mr-3'>Size</span>
                    <div class='relative'>
                      <select name='sizep' class='rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10'>
                        <option value='SM'>SM</option>
                        <option value='M'>M</option>
                        <option value='L'>L</option>
                        <option value='XL'>XL</option>
                      </select>
                            </div>
                        </div>
                        <div class='w-32 mb-8 '>
                            <label for=''
                                class='w-full text-xl font-semibold text-gray-700 dark:text-gray-400'>Quantity</label>
                            <div class='relative flex flex-row w-full h-10 mt-4 bg-transparent rounded-lg'>
                            <input type='number' name='quantity' value=' min='1' max='$row[stock]''
                                    class='flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-300 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black'
                                    placeholder='1'>
                            </div>
                        </div>
                        <div class='flex flex-wrap items-center -mx-4'>
                            <div class='w-full px-4 mb-4 lg:w-1/2 lg:mb-0'>
                            <input type='hidden' name='product_id' value='$row[id]'>
                            <input type='hidden' name='prix' value='$row[prix]'>
                            <button type='submit' name='submit' class='flex items-center justify-center w-full p-4 text-white bg-black border border-white rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-stone-700 hover:border-white hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300'>
                                    Add to Cart
                                </button>
                              </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";}elseif($row["type"] == "Chaussures"){echo "
    <section class='overflow-hidden bg-white py-11 font-poppins dark:bg-gray-800'>
    <div class='max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6'>
        <div class='flex flex-wrap -mx-4'>
            <div class='w-full h-full  px-4 md:w-1/2 '>
                <div class='sticky top-0 z-50 overflow-hidden '>
                    <div class='relative mb-6 lg:mb-10 lg:h-2/4 '>
                        <img src='../admin/product/$row[image]' alt=''
                            class=' w-full h-full '>
                    </div>
                    
                </div>
            </div>
            <div class='w-full px-4 md:w-1/2 '>
                <div class='lg:pl-20'>
                    <div class='mb-8 '>
                    <form action='cart.php' method='POST' >
                        <span class='text-lg font-medium text-rose-500 dark:text-rose-200'>New</span>
                        <input type='text' name='namep' class='max-w-xl mt-2 mb-6 text-2xl font-bold dark:text-gray-400 md:text-4xl'
                            value='$row[name]'
                        <p class='max-w-md mb-8 text-gray-700 dark:text-gray-400'>
                          $row[description]
                        </p>
                        <p class='inline-block mb-8 text-4xl font-bold text-gray-700 dark:text-gray-400 '>
                            <span>$row[prix] DH</span>
                        </p>
                        <p class='text-green-600 dark:text-green-300 '>$row[stock] in stock</p>
                    </div>
                    <div class='flex items-center mb-8'>
                    <span class='mr-3'>Size</span>
                    <div class='relative'>
                      <select name='sizep' class='rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10'>
                        <option value='40'>40</option>
                        <option value='41'>41</option>
                        <option value='42'>42</option>
                        <option value='43'>43</option>
                      </select>
                            </div>
                        </div>
                        <div class='w-32 mb-8 '>
                            <label for=''
                                class='w-full text-xl font-semibold text-gray-700 dark:text-gray-400'>Quantity</label>
                            <div class='relative flex flex-row w-full h-10 mt-4 bg-transparent rounded-lg'>
                            <input type='number' name='quantity' value=' min='1' max='$row[stock]''
                                    class='flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-300 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black'
                                    placeholder='1'>
                            </div>
                        </div>
                        <div class='flex flex-wrap items-center -mx-4'>
                            <div class='w-full px-4 mb-4 lg:w-1/2 lg:mb-0'>
                            <input type='hidden' name='product_id' value='$row[id]'>
                            <input type='hidden' name='prix' value='$row[prix]'>
                            <button type='submit' name='submit' class='flex items-center justify-center w-full p-4 text-white bg-black border border-white rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-stone-700 hover:border-white hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300'>
                                    Add to Cart
                                </button>
                              </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>";
}else {
    echo "
    <section class='overflow-hidden bg-white py-11 font-poppins dark:bg-gray-800'>
    <div class='max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6'>
        <div class='flex flex-wrap -mx-4'>
            <div class='w-full h-full px-4 md:w-1/2 '>
                <div class='sticky top-0 z-50 overflow-hidden '>
                    <div class='relative mb-6 lg:mb-10 lg:h-2/4 '>
                        <img src='../admin/product/$row[image]' alt=''
                            class='  h-full w-full '>
                    </div>
                    
                </div>
            </div>
            <div class='w-full px-4 md:w-1/2 '>
                <div class='lg:pl-20'>
                    <div class='mb-8 '>
                    <form action='cart.php' method='POST' >
                        <span class='text-lg font-medium text-rose-500 dark:text-rose-200'>New</span>
                        <input type='text' name='namep' class='max-w-xl mt-2 mb-6 text-2xl font-bold dark:text-gray-400 md:text-4xl'
                            value='$row[name]'
                        <p class='max-w-md mb-8 text-gray-700 dark:text-gray-400'>
                          $row[description]
                        </p>
                        <p class='inline-block mb-8 text-4xl font-bold text-gray-700 dark:text-gray-400 '>
                            <span>$row[prix] DH</span>
                        </p>
                        <p class='text-green-600 dark:text-green-300 '>$row[stock] in stock</p>
                    </div>
                        <div class='w-32 mb-8 '>
                            <label for=''
                                class='w-full text-xl font-semibold text-gray-700 dark:text-gray-400'>Quantity</label>
                            <div class='relative flex flex-row w-full h-10 mt-4 bg-transparent rounded-lg'>
                            <input type='number' name='quantity' value=' min='1' max='$row[stock]''
                                    class='flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-300 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black'
                                    placeholder='1'>
                            </div>
                        </div>
                        <div class='flex flex-wrap items-center -mx-4'>
                            <div class='w-full px-4 mb-4 lg:w-1/2 lg:mb-0'>
                            <input type='hidden' name='product_id' value='$row[id]'>
                            <input type='hidden' name='prix' value='$row[prix]'>
                            <button type='submit' name='submit' class='flex items-center justify-center w-full p-4 text-white bg-black border border-white rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-stone-700 hover:border-white hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300'>
                                    Add to Cart
                                </button>
                              </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>";
}
}?>

    
</body>
</html>
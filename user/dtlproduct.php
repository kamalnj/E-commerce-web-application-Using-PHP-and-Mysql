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
            <div class='w-full px-4 md:w-1/2 '>
                <div class='sticky top-0 z-50 overflow-hidden '>
                    <div class='relative mb-6 lg:mb-10 lg:h-2/4 '>
                        <img src='../admin/product/$row[image]' alt=''
                            class='object-cover w-full h-full '>
                    </div>
                    
                </div>
            </div>
            <div class='w-full px-4 md:w-1/2 '>
                <div class='lg:pl-20'>
                    <div class='mb-8 '>
                        <span class='text-lg font-medium text-rose-500 dark:text-rose-200'>New</span>
                        <h2 class='max-w-xl mt-2 mb-6 text-2xl font-bold dark:text-gray-400 md:text-4xl'>
                            $row[name]</h2>
                        <p class='max-w-md mb-8 text-gray-700 dark:text-gray-400'>
                          $row[description]
                        </p>
                        <p class='inline-block mb-8 text-4xl font-bold text-gray-700 dark:text-gray-400 '>
                            <span>$row[prix]</span>
                        </p>
                        <p class='text-green-600 dark:text-green-300 '>$row[stock] in stock</p>
                    </div>
                    <div class='flex items-center mb-8'>
                    <span class='mr-3'>Size</span>
                    <div class='relative'>
                      <select class='rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10'>
                        <option>SM</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                      </select>
                            </div>
                        </div>
                        <div class='w-32 mb-8 '>
                            <label for=''
                                class='w-full text-xl font-semibold text-gray-700 dark:text-gray-400'>Quantity</label>
                            <div class='relative flex flex-row w-full h-10 mt-4 bg-transparent rounded-lg'>
                                <input type='number'
                                    class='flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-300 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black'
                                    placeholder='1'>
                            </div>
                        </div>
                        <div class='flex flex-wrap items-center -mx-4'>
                            <div class='w-full px-4 mb-4 lg:w-1/2 lg:mb-0'>
                                <button
                                    class='flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300'>
                                    Add to Cart
                                </button>
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
                <div class='w-full px-4 md:w-1/2 '>
                    <div class='sticky top-0 z-50 overflow-hidden '>
                        <div class='relative mb-6 lg:mb-10 lg:h-2/4 '>
                            <img src='../admin/product/$row[image]' alt=''
                                class='object-cover w-full lg:h-full '>
                        </div>
                        
                    </div>
                </div>
                <div class='w-full px-4 md:w-1/2 '>
                    <div class='lg:pl-20'>
                        <div class='mb-8 '>
                            <span class='text-lg font-medium text-rose-500 dark:text-rose-200'>New</span>
                            <h2 class='max-w-xl mt-2 mb-6 text-2xl font-bold dark:text-gray-400 md:text-4xl'>
                                $row[name]</h2>
    
                            <p class='max-w-md mb-8 text-gray-700 dark:text-gray-400'>
                                Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet
                                Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet
                            </p>
                            <p class='inline-block mb-8 text-4xl font-bold text-gray-700 dark:text-gray-400 '>
                                <span>$row[prix]</span>
                            </p>
                            <p class='text-green-600 dark:text-green-300 '>$row[stock] in stock</p>
                        </div>
                        <div class='flex items-center mb-8'>
                        <span class='mr-3'>Size</span>
                        <div class='relative'>
                          <select class='rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10'>
                            <option>38</option>
                            <option>39</option>
                            <option>40</option>
                            <option>41</option>
                            <option>42</option>
                            <option>43</option>
                            <option>44</option>
                          </select>
                                </div>
                            </div>
                            <div class='w-32 mb-8 '>
                                <label for=''
                                    class='w-full text-xl font-semibold text-gray-700 dark:text-gray-400'>Quantity</label>
                                <div class='relative flex flex-row w-full h-10 mt-4 bg-transparent rounded-lg'>
                                    <button
                                        class='w-20 h-full text-gray-600 bg-gray-300 rounded-l outline-none cursor-pointer dark:hover:bg-gray-700 dark:text-gray-400 hover:text-gray-700 dark:bg-gray-900 hover:bg-gray-400'>
                                        <span class='m-auto text-2xl font-thin'>-</span>
                                    </button>
                                    <input type='number'
                                        class='flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-300 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black'
                                        placeholder='1'>
                                    <button
                                        class='w-20 h-full text-gray-600 bg-gray-300 rounded-r outline-none cursor-pointer dark:hover:bg-gray-700 dark:text-gray-400 dark:bg-gray-900 hover:text-gray-700 hover:bg-gray-400'>
                                        <span class='m-auto text-2xl font-thin'>+</span>
                                    </button>
                                </div>
                            </div>
                            <div class='flex flex-wrap items-center -mx-4'>
                                <div class='w-full px-4 mb-4 lg:w-1/2 lg:mb-0'>
                                    <button
                                        class='flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300'>
                                        Add to Cart
                                    </button>
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
            <div class='w-full px-4 md:w-1/2 '>
                <div class='sticky top-0 z-50 overflow-hidden '>
                    <div class='relative mb-6 lg:mb-10 lg:h-2/4 '>
                        <img src='../admin/product/$row[image]' alt=''
                            class='object-cover w-full lg:h-full '>
                    </div>
                    
                </div>
            </div>
            <div class='w-full px-4 md:w-1/2 '>
                <div class='lg:pl-20'>
                    <div class='mb-8 '>
                        <span class='text-lg font-medium text-rose-500 dark:text-rose-200'>New</span>
                        <h2 class='max-w-xl mt-2 mb-6 text-2xl font-bold dark:text-gray-400 md:text-4xl'>
                            $row[name]</h2>

                        <p class='max-w-md mb-8 text-gray-700 dark:text-gray-400'>
                            Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet
                            Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet
                        </p>
                        <p class='inline-block mb-8 text-4xl font-bold text-gray-700 dark:text-gray-400 '>
                            <span>$row[prix]</span>
                        </p>
                        <p class='text-green-600 dark:text-green-300 '>$row[stock] in stock</p>
                    </div>
                        <div class='w-32 mb-8 '>
                            <label for=''
                                class='w-full text-xl font-semibold text-gray-700 dark:text-gray-400'>Quantity</label>
                            <div class='relative flex flex-row w-full h-10 mt-4 bg-transparent rounded-lg'>
                                <button
                                    class='w-20 h-full text-gray-600 bg-gray-300 rounded-l outline-none cursor-pointer dark:hover:bg-gray-700 dark:text-gray-400 hover:text-gray-700 dark:bg-gray-900 hover:bg-gray-400'>
                                    <span class='m-auto text-2xl font-thin'>-</span>
                                </button>
                                <input type='number'
                                    class='flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-300 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black'
                                    placeholder='1'>
                                <button
                                    class='w-20 h-full text-gray-600 bg-gray-300 rounded-r outline-none cursor-pointer dark:hover:bg-gray-700 dark:text-gray-400 dark:bg-gray-900 hover:text-gray-700 hover:bg-gray-400'>
                                    <span class='m-auto text-2xl font-thin'>+</span>
                                </button>
                            </div>
                        </div>
                        <div class='flex flex-wrap items-center -mx-4'>
                            <div class='w-full px-4 mb-4 lg:w-1/2 lg:mb-0'>
                                <button
                                    class='flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300'>
                                    Add to Cart
                                </button>
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
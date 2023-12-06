<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <?php 
    include'nav.php'; ?>
</head>
<body class=" bg-slate-50">
<div class=" inset-x-0 top-0 z-50">
    <div class="bg-teal-600">
        <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-between lg:flex-row lg:justify-center">
                <div class="flex flex-1 items-center lg:mr-3 lg:flex-none">
                    <p class="ml-3 text-center font-medium text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true" class="mr-2 hidden h-6 w-6 lg:inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z">
                            </path>
                        </svg>Pour célébrer l'ouverture de notre boutique
                        <span class="font-black">CITY SPORTS</span> une promotion jusqu'a <span class="font-black">50% </span>
                    </p>
                </div>
                <div class="mt-2 w-full flex-shrink-0 lg:mt-0 lg:w-auto"><a
                        class="flex items-center justify-center rounded-md border border-transparent bg-white px-4 py-2 text-sm font-medium text-teal-600 shadow-sm hover:bg-teal-50"
                        href="#pricing">Buy now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="relative">
    <img src="https://api.lcs.spreadsuite.io/medias/655dded6ccd92014546839.jpg" alt="Cafe Joyeux Image" class="w-full" />
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
        <h2 class="text-5xl font-bold">CAFE JOYEUX</h2>
        <h2 class="text-3xl font-bold">NOUVELLE COLLECTION</h2>
        <button class=" bg-transparent border-2 hover:bg-gray-200 hover:text-black text-white px-4 py-2 mt-4">ACHETER MAINTENANT</button>
    </div>
</div>
>
    <section class="">
  <div class="mx-auto max-w-md sm:max-w-lg md:max-w-screen-xl">
    <div class="px-4 py-8 md:px-6 md:py-12 lg:px-20">
<h2 class=" text-center text-black text-5xl font-sans font-semibold">FAVORIS DE CITY SPORTS</h2>
      <div class="mt-8 grid grid-cols-1 gap-6 md:mt-10 md:grid-cols-3 lg:gap-8">
    <?php 
    include 'confi.php';
    $requete = mysqli_query($con,"SELECT * FROM `tblproduct`");
    while($row = mysqli_fetch_array($requete)){

  
echo"
        
        <article class='bg-slate-50 p-9'>
          <div class=''>
            <h2 class='text-xl font-semibold text-center text-black'>$row[name]</h2>
          </div>
          <div class='flex items-center justify-center'>
            <img class=' mt-8' src='../admin/product/$row[image]' alt='' />
          </div>
        </article>
        ";
    }
    
    ?>
        
 
      </div>

     
    </div>
  </div>
</section>


    
</body>
</html>
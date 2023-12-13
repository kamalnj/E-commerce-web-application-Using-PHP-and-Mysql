<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    include 'nav.php';
    include'solde.php';
?>
</head>
<body>
<div class="text-center p-10">
    <h1 class="font-bold text-black text-4xl mb-4">Chaussures Homme</h1>
</div>

<section id="Projects"
    class="w-fit mx-auto grid grid-cols-3 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
    <?php 
    include 'confi.php';
    $requete = mysqli_query($con,"SELECT * FROM `tblproduct` where categorie ='homme' and type ='Chaussures'");
    while($row = mysqli_fetch_array($requete)){
        echo"
        <div class='w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl'>
        <a href='dtlproduct.php?id=$row[id] '>
            <img src='../admin/product/$row[image]'
                    alt='Product' class='h-80 w-72  rounded-t-xl'/>
            <div class='px-4 py-3 w-72'>
                <p class='text-lg font-bold text-black truncate block capitalize'>$row[name]</p>
                <div class='flex items-center'>
                    <p class='text-lg font-semibold text-black cursor-auto my-3'>$row[prix] DH</p>
                </div>
            </div>
        </a>
    </div>";}?>
</section>




    

</body>
</html>;
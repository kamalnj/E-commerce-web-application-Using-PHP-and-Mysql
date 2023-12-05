<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    

    <table class=" border-collapse w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class=" px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Stock
                </th>
            </tr>
        </thead>
        <tbody class=" ">
            <?php 
            include("confi.php");
            $exporti = mysqli_query($con,"SELECT * FROM `tblproduct`");
           while ($do = mysqli_fetch_array($exporti))
           echo"
        <tr> 
        <td class=' px-7 ' >$do[id]</td>
        <td class=' px-7'>$do[name]</td>
        <td class=' px-7'>$do[description]</td>
        <td class=' px-7'>$do[prix]</td>
        <td><img class='py-4' src='$do[image]' height='90px' width='100px' ></td>
        <td class=' px-7'>$do[categorie]</td>
        <td class=' px-7'>$do[stock]</td>




        </tr>";



             ?>
        </tbody>
    </table>

    
</body>
</html>
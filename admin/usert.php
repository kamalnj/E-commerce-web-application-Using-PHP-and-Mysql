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
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
            </tr>
        </thead>
        <tbody class=" ">
            <?php 
            include("product/confi.php");
            $exporti = mysqli_query($con,"SELECT * FROM `user`");
           while ($do = mysqli_fetch_array($exporti))
           echo"
        <tr> 
        <td class=' px-7 ' >$do[id]</td>
        <td class=' px-7'>$do[username]</td>
        <td class=' px-7'>$do[email]</td>
        <td class='px-7'><a href='deleteu.php? ID=$do[id]'><button type='submit' name='remove' class='bg-red-500  font-medium text-base hover:bg-red-700 text-white  py-2 px-4 rounded' > Supprimer</button></a></td>




        </tr>";



             ?>
        </tbody>
    </table>

    
</body>
</html>
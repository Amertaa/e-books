<?php
require "./function/config.php";
require "./function/cek.php";
?>


<!DOCTYPE html>
<html data-theme="cupcake" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Admin </title>
    <link href="../dist/style.css" rel="stylesheet">
</head>

<body>


    <?php
    require_once "./view/sidebar.php";
    ?>


    <main class="p-16 ml-52">
        <section class="font-bold font-Nunito text-4xl">
            Overview
            <div class="grid grid-cols-3 gap-8">
                <div class=" bg-orange-400 rounded-md text-xl p-6 mt-10 font-Quicksand">
                    Total Sales
                    <p class="font-normal text-base"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum?</p>
                </div>
                <div class=" bg-orange-400 rounded-md text-xl p-6 mt-10 font-Quicksand">
                    Total Sales
                </div>
                <div class=" bg-orange-400 rounded-md text-xl p-6 mt-10 font-Quicksand">
                    Total Sales
                </div>
            </div>
        </section>

    </main>


    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
</body>

</html>
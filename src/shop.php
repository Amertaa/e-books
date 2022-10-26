    <?php
    require "./function/config.php";
    require "./function/cek.php";
    require "./function/component.php";
    require "./function/add.php"
    ?>
    <!DOCTYPE html>
    <html data-theme="cupcake" lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        <link href="../dist/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    </head>

    <body>

        <!-- Navbar -->
        <?php require_once("./view/navbar.php") ?>
        <!-- End of navbar -->

        <!-- Hero -->
        <main class="flex justify-center items-center gap-5 min-h-screen">

            <!-- Fetching the data from the database -->
            <?php
            $result = getData();
            while ($row = mysqli_fetch_assoc($result)) {
                component($row['name'], $row['price'], $row['description'], $row['image'], $row['id_product']);
            }
            ?>

        </main>

        <!-- End of hero -->



        <!-- Icon -->
        <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

        <!-- Swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

        <!-- Custom JS -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>
            const swiper = new Swiper('.swiper-container', {
                direction: "horizontal",

            })
        </script>
    </body>

    </html>
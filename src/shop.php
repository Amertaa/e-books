    <?php
    require "./function/config.php";
    require "./function/cek.php";

    // $database = new CreateDb;
    ?>
    <!DOCTYPE html>
    <html data-theme="light" lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="../dist/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" rel="stylesheet">
    </head>

    <body>

        <!-- Navbar -->
        <?php require_once("./view/navbar.php") ?>
        <!-- End of navbar -->

        <!-- Hero -->
        <main class="min-h-screen max-w-7xl mx-auto">
            <!-- Title -->
            <div class="mt-10 text-center text-5xl font-bold font-Cormorant">Latest Products</div>
            <!-- Box -->
            <div class="flex justify-center items-center swiper-container">
                <div class="grid gap-5 grid-cols-4 mt-5 swiper-wrapper">

                    <div class="outline outline-offset-2 outline-1 rounded-md swiper-slide w-80 ">
                        <div class="mx-14 my-3 w-52"><img src="./img/laut.jpg" alt=""></div>
                        <div class="text-center font-Quicksand mx-4 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, dolor!</div>
                        <div class=" text-xl font-bold font-Nunito">Laut Bercerita </div>
                        <div action="submit" class="btn btn-primary">
                            <iconify-icon icon="bx:cart-add" style="color:white;" width="29"></iconify-icon> Add to cart
                        </div>
                    </div>
                    <div class="outline-none outline-offset-2 outline-1 rounded-md swiper-slide">
                        <div class="mx-14 my-3 w-52"><img src="./img/laut.jpg" alt=""></div>
                        <div class="text-center font-Quicksand mx-4 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, dolor!</div>
                        <div class="text-center text-xl font-bold font-Nunito">Laut Bercerita </div>
                        <!-- <div action="submit" class="btn btn-primary">
                            <iconify-icon icon="bx:cart-add" style="color:white;" width="29"></iconify-icon> Add to cart
                        </div> -->
                    </div>
                    <div class="outline-none outline-offset-2 outline-1 rounded-md swiper-slide">
                        <div class="mx-14 my-3 w-52"><img src="./img/laut.jpg" alt=""></div>
                        <div class="text-center font-Quicksand mx-4 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, dolor!</div>
                        <div class="text-center text-xl font-bold font-Nunito">Laut Bercerita </div>
                        <!-- <div action="submit" class="btn btn-primary">
                            <iconify-icon icon="bx:cart-add" style="color:white;" width="29"></iconify-icon> Add to cart
                        </div> -->
                    </div>
                    <div class="outline-none outline-offset-2 outline-1 rounded-md swiper-slide">
                        <div class="mx-14 my-3 w-52"><img src="./img/laut.jpg" alt=""></div>
                        <div class="text-center font-Quicksand mx-4 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, dolor!</div>
                        <div class="text-center text-xl font-bold font-Nunito">Laut Bercerita </div>
                        <!-- <div action="submit" class="btn btn-primary">
                            <iconify-icon icon="bx:cart-add" style="color:white;" width="29"></iconify-icon> Add to cart
                        </div> -->
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </main>
        <!-- End of hero -->



        <!-- Icon -->
        <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

        <!-- Swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

        <script>
            const swiper = new Swiper(".swiper-container", {
                loop: true,

            })
        </script>
    </body>

    </html>
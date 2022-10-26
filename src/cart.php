    <?php
    require "./function/config.php";
    require "./function/cek.php";
    require "./function/component.php";
    require "./function/add.php";
    require "./function/remove.php"
   
    ?>

    <!DOCTYPE html>
    <html data-theme="cupcake" lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart</title>
        <link href="../dist/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Navbar -->
        <?php
        require_once "./view/navbar.php";
        ?>
        <!-- End of navbar -->

        <!-- Hero -->

        <main class="w-full flex justify-between p-14">
            <div class="w-full">
                <div class="pb-4 font-Nunito text-lg border-b-4 border-slate-600 w-full self-start">My Cart</div>

                <!-- Box -->
               
                    <?php
                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        $product_id = array_column($_SESSION['cart'], 'id_product');
                        $result = getData();
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($product_id as $id) {
                                if ($row['id_product'] == $id) {
                                    cartElement($row['name'], $row['price'], $row['image'], $row['id_product']);
                                    $total = $total + (int)$row['price'];
                                }
                            }
                        }
                    } else {
                        echo "<h5>Cart is Empty</h5>";
                    }
                    ?>
                    
                <!-- End of box -->

            </div>

            <div class="bg-[#65c3c8] w-1/4 p-5 ml-5 mt-14 font-Cormorant rounded-md grid grid-cols-1 h-56 shadow-xl">
                <span class="font-Nunito text-md border-b-2 font-bold text-2xl">Price Details</span>
                <div class="flex justify-between my-4 font-Nunito">
                    <span class="text-xl font-Nunito">
                        Price (<?php
                                if (isset($_SESSION['cart'])) {
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\">$count</span>";
                                } else {
                                    echo "<span id=\"cart_count\">0</span>";
                                }


                                ?> Items)</span>
                    Rp. <?php echo  $total;?>.000
                </div>
                <span class="font-Nunito text-xl">
                Delivery Charges
                <div class="border-b-2 mt-3 w-40"></div>
                </span>
                <span class="font-Nunito text-xl mt-2">Amount Payable</span>
            </div>

        </main>



    </body>

    <!-- Icon -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

    </html>
    </body>

    </html>
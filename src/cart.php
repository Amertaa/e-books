    <?php
    require "./function/config.php";
    require "./function/cek.php";
    require "./function/component.php";
    require "./function/add.php";
    // require "./function/remove.php";


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
                <div class="pb-2 font-Nunito text-xl border-b-4 border-slate-600 w-full self-start">My Cart</div>

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
                <span class="font-Nunito border-b-2 font-bold text-2xl">Price Details</span>
                <div class="flex justify-between my-2 font-Nunito text-xl">
                    <span>
                        Price (
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\">$count</span>";
                        } else {
                            echo "<span id=\"cart_count\">0</span>";
                        }


                        ?> Items)
                    </span>
                    <span class="text-lg">Rp. <?php echo  $total; ?>.000</span>
                </div>
                <span class="font-Nunito text-xl">
                    Delivery Charges
                    <div class="border-b-2 mt-3 w-40"></div>
                </span>

                <div class="flex justify-between font-Nunito text-xl ">
                    <span>Amount Payable</span>
                    <span class="text-lg">Rp. <?php echo $total; ?>.000</span>
                </div>
            </div>

        </main>

        <!-- SweetAlert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>
            const tombol = document.querySelector('#tombol');

            function remove(ev) {
                const form = new FormData(ev.target.closest('.cart-items'));

                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then(async (willDelete) => {
                    
                        const submit = await fetch(
                            `http://${location.host}/e-books/src/function/remove.php`, {
                                method: "POST",
                                body: JSON.stringify({
                                    id_product: form.get('id_product')
                                }),
                                headers: {
                                    'Content-Type': 'application/json',
                                    'Accept': 'application/json'
                                },
                                credentials: 'same-origin',
                                mode: 'same-origin'
                            }
                        );

                        const data = await submit.json();

                        console.log(data)

                        if (data.success) {
                            swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                            }).then(() => {
                                window.location.reload()
                            })
                        } else {
                            swal("Your imaginary file is safe!");
                        }

                    });

            }
        </script>

        <!-- Icon -->
        <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    </body>

    </html>
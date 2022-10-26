<?php
if (isset($_POST['add'])) {
    /// print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {

        $item_array_id = array_column($_SESSION['cart'], "id_product");

        if (in_array($_POST['id_product'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = './shop.php'</script>";
        } else {

            $count = count($_SESSION['cart']);
            $item_array = array(
                'id_product' => $_POST['id_product']
            );

            $_SESSION['cart'][$count] = $item_array;
        }
    } else {

        $item_array = array(
            'id_product' => $_POST['id_product']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
    }
}
?>
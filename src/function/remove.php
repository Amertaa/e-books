 <?php 
 if(isset($_POST['Remove'])){
        if($_GET['action']=='remove'){
            foreach($_SESSION['cart']as $key => $value){
                if($value['id_product']== $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script>alert('Product has been removed..!')</script>";
                    echo "<script>window.location = './cart'</script>";
                }
            }
        }
    }

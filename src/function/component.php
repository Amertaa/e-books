<?php
function component($productname, $productprice, $productdesc, $productimg, $id_product)
{
    $element = "
        <form action=\"./shop.php\" method=\"POST\">
        <div class=\"card w-72 bg-base-100 shadow-xl\">
                   <figure><img src=\"$productimg\"/></figure>
                   <div class=\"card-body\">
                       <h2 class=\"card-title font-Nunito\">$productname</h2>
                       <p class=\"font-Nunito text-sm\">$productdesc</p>
                       <div class=\"font-bold font-Nunito\">Rp. $productprice.000</div>
                       <div class=\"card-actions justify-end\">
                       
                       <input type=\"submit\" name=\"add\" class=\"btn btn-primary font-Quicksand\" value=\"Add to cart\">
                        <input type=\"hidden\" name=\"id_product\" value=\"$id_product\">
                       
                       </div>
                   </div>
               </div>
        </div>
    </form>

        ";
        echo $element;
       
    }

function cartElement($productname, $productprice, $productimg, $id_product){
    $element = "
    <form action=\"./cart.php?action=remove&id=$id_product\" method=\"GET\" class=\"cart-items\">
    <div class=\"border rounded my-4 shadow-lg\">
                    <div class=\"flex h-52\">
                        <img src=\"$productimg\" alt=\"\" class=\"w-44\">
                        <div class=\"p-7 font-Nunito\">
                            <div class=\"text-xl\">$productname</div>
                            <div class=\"text-sm text-slate-400\">Seller : Marsa Naufal</div>
                            <div class=\"text-xl\">Rp. $productprice.000</div>
                            <input class=\"btn btn-warning mt-10 rounded-md w-40\" value=\"Save For Later\">
                            <input class=\"btn btn-danger mt-10 rounded-md w-40\" name=\"Remove\" value=\"Remove\">
                        </div>
                    </div>
                </div>
    </form>
    ";
    echo $element;
}

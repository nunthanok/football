$(document).ready(function(){

    LoadTableProduct();

});


function LoadTableProduct(){
    $("#tabel_product").load("table_product.php");
}
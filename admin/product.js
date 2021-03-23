$(document).ready(function(){

    LoadTableProduct();


    $("#add_product").on('submit',function(event){

        event.preventDefault();
        $.ajax({

            url: "insert_product.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(data){
                console.log(data);
                $("#modalAddProduct").modal("hide");
                LoadTableProduct();
            }
        });

    });



});


function LoadTableProduct(){
    $("#tabel_product").load("table_product.php");
}
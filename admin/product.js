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


    $(document).on('click', '.edit_data', function(event){
        event.preventDefault();
        var proId = $(this).data("id");
        // console.log(proId);

        $("#modalEditProduct").modal("show");

        $.ajax({

            url: 'edit_product.php',
            method: 'POST',
            data: {proId: proId},
            dataType: "json",
            success: function(data){
                // console.log(data);
                $("#edit_product_id").val(data.pro_id);
                $("#edit_pro_code").val(data.pro_code);
                $("#edit_pro_name").val(data.pro_name);
                $("#edit_pro_price").val(data.pro_price);
            }

        });

    });



    //Edit Product Save
    $("#edit_product").submit(function(event){
        event.preventDefault();
        $.ajax({
            url:'edit_product_save.php',
            method:'POST',
            data: $(this).serialize(),
            success: function(data){
                // console.log(data);
                $("#modalEditProduct").modal("hide");

                if(data === "OK"){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Edit Successfully',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Edit Fail',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }

                LoadTableProduct();
            }
        });
    });


    //Delete Product
    $(document).on('click', '.delete_data', function(event){
        var proId = $(this).data("id");
        // console.log(proId);

        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete this Product",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
             
                $.ajax({
                    method: "POST",
                    url: "delete_product.php",
                    data:{'delete': true, 'proId' : proId },
                    success: function(response){
                        // console.log(response);

                        if(response ==="OK"){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Delete Successfully',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }else{
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Delete Fail',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }
                        LoadTableProduct();
                    }

                });

            }
        });


    });



});


function LoadTableProduct(){
    $("#tabel_product").html("<img src=\"loader/ajax-loader.gif\" style=\"display: block; margin-left: auto; margin-right: auto;\">").load("table_product.php");
}

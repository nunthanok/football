

$(document).ready(function(){

    laodTableOrderType();

    // Add Order Type
    $("#add_orderType").submit(function(event){
        event.preventDefault();

        var name = $('#order_type_name').val();

        if (name.length < 1) {
            // alert('Text-field is empty.');
            $("#validate").addClass('validateOrderTypename').html("Please input order type name");
            return false;

        }else{

            $.ajax({
                url: "insert_order_type.php",
                method: "POST",
                data: $(this).serialize(),
                success: function(data){
                    console.log(data);
    
                    if(data === "OK"){
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Insert Order Type Successfully',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }else{
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Insert Order Type Fail',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }
    
                    laodTableOrderType();
                    $("#add_orderType")[0].reset();
                    $("#validate").removeClass('validateOrderTypename').html("");
                }
            });

        }



    });
    // End Script



    // Get id to Edit
    $(document).on('click','.edit_order_type', function(event){
        event.preventDefault();

        var orId = $(this).data("id");
        console.log(orId);
        $("#modalEditOrderType").modal("show");

        $.ajax({

            url: "edit_order_type.php",
            method: "POST",
            data: {orId:orId},
            dataType: "json",
            success: function(data){
                console.log(data);
                $("#edit_orderType_name").val(data.or_type_name);
                $("#edit_order_type_id").val(data.or_type_id);
            }

        });


    });
    // End Edit


    // Edit Order Type save
    $("#edit_OrderType_data").submit(function(e){
        e.preventDefault();

        $.ajax({

            url: "edit_order_type_save.php",
            method: "POST",
            data: $(this).serialize(),
            success:function(data){
                console.log(data);
                $("#modalEditOrderType").modal("hide");

                if(data === "OK"){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Edit Order Type Successfully',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Edit Order Type Fail',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }

                laodTableOrderType();

            }

        });

    });
    // End script


    $(document).on('click', '.delete_order_type', function(){

        var orId = $(this).data("id");

        // console.log(unitId);

        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete this Unit",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
             
                $.ajax({
                    method: "POST",
                    url: "delete_order_type.php",
                    data:{'delete': true, 'orId' : orId },
                    success: function(response){
                        console.log(response);

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
                        laodTableOrderType();
                    }

                });

            }
        });

    });



});



function laodTableOrderType(){
    $("#table_orderType").load("table_order_type.php");
}
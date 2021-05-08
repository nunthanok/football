

$(document).ready(function(){

    laodTableOrderType();

    // Add Order Type
    $("#add_orderType").submit(function(event){
        event.preventDefault();

        var name = $('#order_type_name').val();

        if (name.length < 1) {
            // alert('Text-field is empty.');
            $("#validate").addClass('validateOrderTypename').html("ກະລຸນາປ້ອນ ຊື່ ຫລື ຫມາກເລກໂຕະ");
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
                            title: 'ເພີ່ມຂໍ້ມູນໂຕະສຳເລັດ',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }else{
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'ເພີ່ມຂໍ້ມູນໂຕະບໍ່ສຳເລັດ',
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
                        title: 'ແກ້ໄຂຂໍ້ມູນໂຕະສຳເລັດ',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'ແກ້ໄຂຂໍ້ມູນໂຕະບໍ່ສຳເລັດ',
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
            title: 'ລົບຂໍ້ມູນແທ້ ຫລື ບໍ່ ?',
            text: "ຕ້ອງການລົບຂໍ້ມູນໂຕະແທ້ ຫລື ບໍ່",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'ຍົກເລີກ',
            confirmButtonText: 'ລົບຂໍ້ມູນ'
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
                                title: 'ລົບຂໍ້ມູນໂຕະສຳເລັດ',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }else{
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'ລົບຂໍ້ມູນໂຕະບໍ່ສຳເລັດ',
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
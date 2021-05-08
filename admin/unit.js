

$(document).ready(function(){

    laodTableUnit();

    // Add Unit
    $("#add_unit").submit(function(event){
        event.preventDefault();

        var name = $('#unit_name').val();

        if (name.length < 1) {
            // alert('Text-field is empty.');
            $("#validate").addClass('validateUnitname').html("ກະລຸນາປ້ອນ ຫນ່ວຍສິນຄ້າ");
            return false;

        }else{

            $.ajax({
                url: "insert_unit.php",
                method: "POST",
                data: $(this).serialize(),
                success: function(data){
                    console.log(data);
    
                    if(data === "OK"){
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'ເພີ່ມຫນ່ວຍສິນຄ້າສຳເລັດ',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }else{
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'ເພີ່ມຫນ່ວຍສິນຄ້າບໍ່ສຳເລັດ',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }
    
                    laodTableUnit();
                    $("#add_unit")[0].reset();
                    $("#validate").removeClass('validateUnitname').html("");
                }
            });

        }



    });
    // End Script



    // Get id to Edit
    $(document).on('click','.edit_unit', function(event){
        event.preventDefault();

        var unitId = $(this).data("id");
        console.log(unitId);
        $("#modalEditUnit").modal("show");

        $.ajax({

            url: "edit_unit.php",
            method: "POST",
            data: {u_id:unitId},
            dataType: "json",
            success: function(data){
                console.log(data);
                $("#edit_u_name").val(data.u_name);
                $("#u_id").val(data.u_id);
            }

        });


    });
    // End Edit


    // Edit Unit save
    $("#edit_unit_data").submit(function(e){
        e.preventDefault();

        $.ajax({

            url: "edit_unit_save.php",
            method: "POST",
            data: $(this).serialize(),
            success:function(data){
                console.log(data);
                $("#modalEditUnit").modal("hide");

                if(data === "OK"){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'ແກ້ໄຂຫນ່ວຍສິນຄ້າສຳເລັດ',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'ແກ້ໄຂຫນ່ວຍສິນຄ້າບໍ່ສຳເລັດ',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }

                laodTableUnit();

            }

        });

    });
    // End script


    $(document).on('click', '.delete_unit', function(){

        var unitId = $(this).data("id");

        // console.log(unitId);

        Swal.fire({
            title: 'ຕ້ອງການລົບແທ້ ຫລື ບໍ່?',
            text: "ຕ້ອງການລົບຫນ່ວຍສິນຄ້າແທ້ ຫລື ບໍ່",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'ຍົກເລີກ',
            confirmButtonText: 'ຕົກລົງ'
          }).then((result) => {
            if (result.isConfirmed) {
             
                $.ajax({
                    method: "POST",
                    url: "delete_unit.php",
                    data:{'delete': true, 'unitId' : unitId },
                    success: function(response){
                        console.log(response);

                        if(response ==="OK"){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'ລົບຫນ່ວຍສິນຄ້າສຳເລັດ',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }else{
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'ລົບຫນ່ວຍສິນຄ້າບໍ່ສຳເລັດ',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }
                        laodTableUnit();
                    }

                });

            }
        });

    });



});



function laodTableUnit(){
    $("#table_unit").load("table_unit.php");
}
$(document).ready(function(){

    laodTableCategory();

    // Add Cat
    $("#add_cat").submit(function(event){
        event.preventDefault();

        var name = $('#cat_name').val();

        if(name.length < 1){
            $("#validate").addClass('validateCatename').html("ກະລຸນາປ້ອນຊື່ປະເພດສິນຄ້າກ່ອນ");
            return false;

        }else{

            $.ajax({

                url: "insert_category.php",
                method: "POST",
                data: $(this).serialize(),
                success: function(data){
                    console.log(data);

                    if(data === "OK"){
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'ເພີ່ມປະເພດສິນຄ້າສຳເລັດ',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }else{
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'ເພີ່ມປະເພດສິນຄ້າບໍ່ສຳເລັດ',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }

                    laodTableCategory();
                    $("#add_cat")[0].reset();
                    $("#validate").removeClass('validateUnitname').html("");
                }
            });

        }
    });
    // End script


    // Get ID to Edit
    $(document).on('click','.edit_cat', function(event){
        event.preventDefault();
        var catId = $(this).data("id");
        console.log(catId);
        $("#modalEditCategory").modal("show");

        $.ajax({

            url: "edit_category.php",
            method: "POST",
            data: {cat_id:catId},
            dataType: "json",
            success: function(data){
                console.log(data);
                $("#edit_cat_name").val(data.cat_name);
                $("#cat_id").val(data.cat_id);
            }

        });

    });
    // End Script


    // Edit Data 
    $("#edit_cat_data").submit(function(e){
        e.preventDefault();

        $.ajax({

            url: "edit_category_save.php",
            method: "POST",
            data: $(this).serialize(),
            success:function(data){
                console.log(data);
                $("#modalEditCategory").modal("hide");

                if(data === "OK"){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'ແກ້ໄຂປະເພດສິນຄ້າສຳເລັດ',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'ແກ້ໄຂປະເພດສິນຄ້າສຳເລັດ',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }
                laodTableCategory();
            }
        });
    });
    // End Script

    $(document).on('click', '.delete_cat', function(){

        var catId = $(this).data("id");
        // console.log(catId);

        Swal.fire({
            title: 'ຕ້ອງການລົບແທ້ ຫລື ບໍ່?',
            text: "ຕ້ອງການລົບປະເພດສິນຄ້າແທ້ບໍ່",
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
                    url: "delete_category.php",
                    data:{'delete': true, 'catId' : catId },
                    success: function(response){
                        console.log(response);

                        if(response ==="OK"){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'ລົບປະເພດສິນຄ້າສຳເລັດ',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }else{
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'ລົບປະເພດສິນຄ້າບໍ່ສຳເລັດ',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }
                        laodTableCategory();
                    }

                });

            }
        });
    });



});



function laodTableCategory(){
    $("#table_category").load("table_category.php");
}
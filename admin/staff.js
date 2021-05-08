$(document).ready(function(){
    loadTableStaff();
    

    // Add Staff
    $("#add_staff").submit(function(event){
        event.preventDefault();
            $.ajax({
                type: "POST",
                url: "insert_staff.php",
                data: $(this).serialize(),
                success: function(data){
                    // console.log(data);
                    // $("#feedback").html(message)

                    if(data === "OK"){
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'ເພີ່ມຂໍ້ມູນພະນັກງານສຳເລັດ',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }else{
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'ເພີ່ມຂໍ້ມູນພະນັກງານບໍ່ສຳເລັດ',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }

                    $("#myModal").modal('hide'); 
                    $("#add_staff")[0].reset();
                    loadTableStaff();
                },
                error: function(){
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'ລະບົບຜິດພາດ',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }
            });
    });
    // End Script

    // Get id and fetch staff data where id
    $(document).on('click', '.edit_data', function(){
         $("#editStaff").modal("show");
        var staff_id = $(this).data("id");
        // console.log(staff_id);

        $.ajax({
            url: "edit_staff.php",
            method: "POST",
            data:{staff_id:staff_id},
            dataType: "json",
            success:function(data){
                // console.log(data);
                $('#edit_name').val(data.staff_name);
                $('#edit_username').val(data.staff_username);
                $('#edit_password').val(data.staff_password);
                $('#edit_phone').val(data.staff_phone);
                $('#staff_id').val(data.staff_id);
                // console.log(data.staff_id);
            }
        });  
    });
    //End Script

    // Update staff data where id
    $("#edit_staff").submit( function(event){
        event.preventDefault();
        $.ajax({
            url: "edit_staff_save.php",
            method: "POST",
            data: $(this).serialize(),
            success:function(data){
                // console.log(data);
                if(data === "OK"){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'ແກ້ໄຂຂໍ້ມູນພະນັກງານສຳເລັດ',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'ແກ້ໄຂຂໍ້ມູນພະນັກງານບໍ່ສຳເລັດ',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }

                $("#editStaff").modal("hide");  
                loadTableStaff();
            },
            error:function(){
                alert("Error");
            }
        });
    });
    //End script


    //Delete Staff
    $(document).on('click', '.delete_data', function(){

        var staffId = $(this).data("id");
        // console.log(id);

        Swal.fire({
            title: 'ຕ້ອງການລົບແທ້ ຫລື ບໍ່ ?',
            text: "ຕ້ອງການລົບຂໍ້ມູນພະນັກງານແທ້ ຫລື ບໍ່",
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
                    url: "delete_staff.php",
                    data:{'delete': true, 'staffId' : staffId },
                    success: function(response){
                        console.log(response);

                        if(response ==="OK"){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'ລົບຂໍ້ມູນພະນັກງານສຳເລັດ',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }else{
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'ລົບຂໍ້ມູນພະນັກງານບໍ່ສຳເລັດ',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }
                        loadTableStaff();
                    }

                });

            }else{

                console.log("Cancel");

            }
          });
        

    });
    // End script



});

// function Load table staff
function loadTableStaff(){
    $("#tabel_staff").load("table_staff.php");
}


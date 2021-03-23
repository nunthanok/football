$(document).ready(function(){
    loadTableMember();

    // Add Member
    $("#add_member").on('submit', function(event){
        event.preventDefault();
        
        $.ajax({
            url: "insert_member.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(data){
                console.log(data);
                $("#modalAddMember").modal("hide");
                $("#add_member")[0].reset();
                if(data === "OK"){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Insert Member Successfully',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Insert Member Fail',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }
                loadTableMember();

            },
            error: function(){
                alert("Error");
            }

        });
    });
    // End Script

    // Get id and fetch member data where id
    $(document).on('click','.edit_data', function(){
        var memberId = $(this).data("id");
        $("#modalEditMember").modal("show");
        // console.log(memberId);

        $.ajax({
            url: "edit_member.php",
            method: "POST",
            data: {memberId:memberId},
            dataType: "json",
            success:function(data){
                // console.log(data);
                $('#edit_m_name').val(data.mem_name);
                $('#edit_m_phone').val(data.mem_phone);
                $('#mem_id').val(data.mem_id);
                
            }

        });

    });
    // End script

    // Edit Member 
    $("#edit_member").submit(function(event){
        event.preventDefault();
        $.ajax({
            url: "edit_member_save.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(data){
                // console.log(data);
                $("#modalEditMember").modal("hide");
                if(data === "OK"){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Edit Staff Successfully',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Edit Staff Fail',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }
                loadTableMember();
            },
            error:function(){
                alert("Error");
            }
        });
    });
    // End Script

    // Delete Member
    $(document).on('click','.delete_data',function(event){
        event.preventDefault();
        var memberId = $(this).data("id");
        // console.log(memberId);

        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete this member",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
             

                $.ajax({
                    method: "POST",
                    url: "delete_member.php",
                    data:{'delete': true, 'memberId' : memberId },
                    success: function(response){
                        console.log(response);

                        if(response ==="OK"){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Delete Member Successfully',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }else{
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Delete Member Fail',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }
                        loadTableMember();
                    }

                });
               

            }
        });
        

    });




});

// Function Load Table Member Data
function loadTableMember(){
    $("#table_member").load("table_member.php");
}


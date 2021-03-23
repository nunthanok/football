

$(document).ready(function(){

    laodTableUnit();

    // Add Unit
    $("#add_unit").submit(function(event){
        event.preventDefault();

        var name = $('#unit_name').val();

        if (name.length < 1) {
            // alert('Text-field is empty.');
            $("#validate").addClass('validateUnitname').html("Please input unit name");
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
                            title: 'Insert Unit Successfully',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }else{
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Insert Unit Fail',
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
                        title: 'Edit Unit Successfully',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Edit Unit Fail',
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
                    url: "delete_unit.php",
                    data:{'delete': true, 'unitId' : unitId },
                    success: function(response){
                        console.log(response);

                        if(response ==="OK"){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Delete Unit Successfully',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }else{
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Delete Unit Fail',
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
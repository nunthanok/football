$(document).ready(function(){
    loadTableStaff();


    $("#add_staff").submit(function(event){
        event.preventDefault();
            $.ajax({
                type: "POST",
                url: "insert_staff.php",
                data: $(this).serialize(),
                success: function(data){
                    console.log(data);
                    // $("#feedback").html(message)
                    $("#myModal").modal('hide'); 
                    $("#add_staff")[0].reset();
                    loadTableStaff();
                },
                error: function(){
                    alert("Error");
                }
            });
    });

    // Get id and fetch data where id
    $(document).on('click', '.edit_data', function(){
         $("#editStaff").modal("show");
        var staff_id = $(this).data("id");
        console.log(staff_id);

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

    // Update data where id
    $("#edit_staff").submit( function(event){
        event.preventDefault();
        $.ajax({
            url: "edit_staff_save.php",
            method: "POST",
            data: $(this).serialize(),
            success:function(data){
                console.log(data);
                $("#editStaff").modal("hide");  
                loadTableStaff();
            },
            error:function(){
                alert("Error");
            }
        });
    });





});

// function Load table staff
function loadTableStaff(){
    $("#tabel_staff").load("table_staff.php");
}


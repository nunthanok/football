

$(document).ready(function(){

    laodTableUnit();


    $("#add_unit").submit(function(event){
        event.preventDefault();
        $.ajax({

            url: "insert_unit.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(data){
                console.log(data);
                laodTableUnit();
                $("#add_unit")[0].reset();
            }
        });

    });




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


    $("#edit_unit_data").submit(function(e){
        e.preventDefault();

        $.ajax({

            url: "edit_unit_save.php",
            method: "POST",
            data: $(this).serialize(),
            success:function(data){
                console.log(data);
                $("#modalEditUnit").modal("hide");
                laodTableUnit();

            }

        });

    });



});



function laodTableUnit(){
    $("#table_unit").load("table_unit.php");
}
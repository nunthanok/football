$(document).ready(function(){

    laodTableCategory();

    $("#add_cat").submit(function(event){
        event.preventDefault();
        $.ajax({

            url: "insert_category.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(data){
                console.log(data);
                laodTableCategory();
                $("#add_cat")[0].reset();
            }
        });

    });


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


    $("#edit_cat_data").submit(function(e){
        e.preventDefault();

        $.ajax({

            url: "edit_category_save.php",
            method: "POST",
            data: $(this).serialize(),
            success:function(data){
                console.log(data);
                $("#modalEditCategory").modal("hide");
                laodTableCategory();

            }

        });

    });



});


function laodTableCategory(){
    $("#table_category").load("table_category.php");
}
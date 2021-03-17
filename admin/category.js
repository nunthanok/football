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



});


function laodTableCategory(){
    $("#table_category").load("table_category.php");
}
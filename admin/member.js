$(document).ready(function(){
    loadTableMember();


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
                loadTableMember();

            },
            error: function(){
                alert("Error");
            }

        });
    });

    // Get id and fetch data where id
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


    $("#edit_member").submit(function(event){
        event.preventDefault();
        $.ajax({
            url: "edit_member_save.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(data){
                // console.log(data);
                $("#modalEditMember").modal("hide");
                loadTableMember();
            },
            error:function(){
                lalert("Error");
            }
        });
    });




});


function loadTableMember(){
    $("#table_member").load("table_member.php");
}
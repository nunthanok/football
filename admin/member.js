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
                        title: 'ເພີ່ມສະມາຊິກສຳເລັດ',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'ເພີ່ມສະມາຊິກສຳບໍ່ເລັດ',
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
                        title: 'ແກ້ໄຂສະມາຊິກສຳເລັດ',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'ແກ້ໄຂສະມາຊິກບໍ່ສຳເລັດ',
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
            title: 'ຕ້ອງການລົບແທ້ ຫລື ບໍ່ ?',
            text: "ຕ້ອງການລົບສະມາຊິກແທ້ ຫລື ບໍ່ ",
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
                    url: "delete_member.php",
                    data:{'delete': true, 'memberId' : memberId },
                    success: function(response){
                        console.log(response);

                        if(response ==="OK"){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'ລົບຂໍ້ມູນສະມາຊິກສຳເລັດ',
                                showConfirmButton: false,
                                timer: 1500
                              });
                        }else{
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'ລົບຂໍ້ມູນສະມາຊິກບໍ່ສຳເລັດ',
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

function checkPhone(){
    var mPhone = $("#m_phone").val();
    // console.log(mPhone);
    $.ajax({
        method: "POST",
        url: "checkphone.php",
        data: {mPhone:mPhone},
        success: function(data){
            if(data == "have"){
                $("div.validateInput").addClass("has-error");
                $("#warningPhone").text("ເບີນີ້ໄດ້ລົງທະບຽນແລ້ວ ກະລຸນາໃຊ້ເບີອື່ນ");
                $(':input[type="submit"]').prop('disabled', true);
                
            }else{
                $("#vadilationPhone").empty();
                $(':input[type="submit"]').prop('disabled', false);
                $("div.validateInput").removeClass("has-error");
            }
            

        }
    });
}


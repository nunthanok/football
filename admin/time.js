$(function(){
    laodTableTime();

    $("#add_time").submit(function(e){
        e.preventDefault();
        var timeStart = $('#time_start').val();
        var timeEnd = $('#time_end').val();

        if(timeStart < 1){

            
            $("#validate1").addClass("validateUnitname").html("ກະລຸນາປອນເວລາເລີ່ມ");
            $("#validate2").empty().html("");  

        }else if(timeEnd < 1){

            $("#validate2").addClass("validateUnitname").html("ກະລຸນາປອນເວລາເວລາຊິ້ນສຸດ");  
            $("#validate1").empty().html("");          
            

        }else{
          
            
            $("#validate1").empty().html(""); 
            $("#validate2").empty().html(""); 
            $("#add_time")[0].reset();

            $.ajax({
                url: 'insert_time.php',
                method: 'POST',
                data: {time_start:timeStart,time_end:timeEnd},
                success: function(data){
                    if(data === "OK"){
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'ເພີ່ມຂໍ້ມູນເວລາສຳເລັດ',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }else{
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'ເພີ່ມຂໍ້ມູນເວລາບໍ່ສຳເລັດ',
                            showConfirmButton: false,
                            timer: 1500
                          });
                        }
                    laodTableTime();
                },
                error: function(){
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'ລະບົບເກີດຂໍ້ຜິດພາດ',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }
            });
            
        }

    });


    


    // Get id to Edit
    $(document).on('click','.edit_time', function(event){
        event.preventDefault();

        var timeId = $(this).data("id");
        $("#modalEditTime").modal("show");

        $.ajax({

            url: "edit_time.php",
            method: "POST",
            data: {time_id:timeId},
            dataType: "json",
            success: function(data){
                $("#edit_time_start").val(data.time_start);
                $("#edit_time_end").val(data.time_end);
                $("#time_id").val(data.time_id);
            }

        });


    });
    // End Edit

        // Edit Unit save
        $("#edit_time_data").submit(function(e){
            e.preventDefault();
    
            $.ajax({
    
                url: "edit_time_save.php",
                method: "POST",
                data: $(this).serialize(),
                success:function(data){
                    $("#modalEditTime").modal("hide");
    
                    if(data === "OK"){
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'ແກ້ໄຂຂໍ້ມູນເວລາສຳເລັດ',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }else{
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'ແກ້ໄຂຂໍ້ມູນເວລາບໍ່ສຳເລັດ',
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }
    
                    laodTableTime();
    
                }
    
            });
    
        });
        // End script


        $(document).on('click', '.delete_time', function(){

            var timeId = $(this).data("id");
    
            Swal.fire({
                title: 'ຕ້ອງການລົບແທ້ ຫລື ບໍ່?',
                text: "ຕ້ອງການລົບຂໍ້ມູນເວລາແທ້ ຫລື ບໍ່",
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
                        url: "delete_time.php",
                        data:{'delete': true, 'time_id' : timeId },
                        success: function(response){
                            console.log(response);
    
                            if(response ==="OK"){
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'ລົບຂໍ້ມູນເວລາສຳເລັດ',
                                    showConfirmButton: false,
                                    timer: 1500
                                  });
                            }else{
                                Swal.fire({
                                    position: 'center',
                                    icon: 'error',
                                    title: 'ລົບຂໍ້ມູນເວລາບໍ່ສຳເລັດ',
                                    showConfirmButton: false,
                                    timer: 1500
                                  });
                            }
                            laodTableTime();
                        }
    
                    });
    
                }
            });
    
        });
    
    
    



});


function laodTableTime(){
    $("#table_time").load("table_time.php");
}
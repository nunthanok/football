
$(document).ready(function(){

    loadTime();
    //loadStadium();
    
     $( "#datepicker" ).datepicker({
        dateFormat: 'dd-mm-yy',
        minDate:0,
        maxDate: 3
     }).datepicker("setDate", new Date());
   

});

function loadTime(){
    // $("select#booking_time_select").empty();
    $.ajax({
        url: 'admin/booking_time.php',
        method: 'POST',
        dataType: 'json',
        
        success: function(data){
            
            $.each(data, function(k,v){

                 $("div#index_time").append("<div class=\"col-3\">"+
                 "<div class=\"btn-group  mb-3\">"+
                     "<input type=\"radio\" class=\"btn-check\" onclick=\" loadStadium(this)\" id=\""+k+"\" name=\"options\" value=\""+ v.time_id+"\" autocomplete=\"off\" >"+
                     "<label class=\"btn btn-outline-success\" for=\""+k+"\">"+ v.time_start+ "-" +v.time_end+ "</label>"+   
                 "</div>"+
                 "</div>");
            });

        },error: function(data){

            console.log(data);
        }
    });

}


function loadStadium(target){
    $("div#index_stadium").empty();
    var dateText = $("#datepicker").val();
    var time = $(target).val();

    $.ajax({
        url: 'admin/booking_stadium.php',
        method: 'POST',
        dataType: 'json',
        data:{
            dateText:dateText,
            time:time
        },
        success: function(data){
            if(data.length > 0){
                $.each(data, function(k,v){
                    $("div#index_stadium").append(" <div class=\"col-4\">"+
                        "<div class=\"btn-group  mb-3\">"+
                            "<input type=\"radio\" class=\"btn-check\" name=\"options-outlined\" value=\""+ v.pro_id +"\" id=\""+v.pro_id+"\" autocomplete=\"off\" >"+
                            "<label class=\"btn btn-outline-success\" for=\""+v.pro_id+"\">"+v.pro_name+"</label>"+   
                        "</div>"+
                        "</div>");
                });
            }else{
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'ເດີ່ນບໍ່ວ່າງ',
                    showConfirmButton: true,
                    //timer: 1500
                    });
            }
           
        },error: function(data){

            console.log(data);
        }
    });

}


function booking_save(){
    var dateText = $("#datepicker").val();
    var name = $("#bname").val();
    var phone = $("#bphone").val();
    var time = $("input[name='options']:checked").val();
    var stadium = $("input[name='options-outlined']:checked").val();
    
    if(stadium == ""  || stadium == null 
        || name == "" || name == null
        || phone == "" || phone == null 
        || time == "" || time == null 
        || dateText == "" || dateText == null){

        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ກະລຸນາປ້ອນຂໍ້ມູນໃຫ້ຄົບຖ້ວນ ',
            showConfirmButton: false,
            timer: 1500
            });

    }else{
        $.ajax({
            url: 'admin/insert_booking.php',
            method: 'POST',
            data:{
                dateText:dateText,
                desc:name + ": " + phone,
                time:time,
                stadium:stadium
            },
            success: function(data){
                if(data === "OK"){
                    $("#bookingIndexForm")[0].reset();
                    Swal.fire({
                        position: 'center',
                        title: 'ການຈອງສຳເລັດ',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        allowOutsideClick:false
                      }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                      })
                }else{

                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'ການຈອງບໍ່ສຳເລັດ: '+data,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        showConfirmButton: true
                        });
                        
                }
                
               
            },error: function(data){
    
                console.log(data);
            }
        });
    }
    
}



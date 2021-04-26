

$(function(){
    loadTableBooking();

    $("#date").datepicker({
        dateFormat: 'dd-mm-yy',
        onSelect: function (dateText, inst) {
            loadStadium();
        }
    }).datepicker("setDate", new Date());;

});



function loadTableBooking(){
    
        $.ajax({
            url: 'booking_detail.php',
            method: 'POST',
            dataType: 'json',
            success: function(data){
                $("#booking_detail").empty();

                if(data.length == 0 ){
                    $("#bill_detail_list_item").append("<tr colspan=\"5\">"
                    +"<td>No Booking Data</td>"
                +"</tr>");
                }else{
                    $.each(data, function(key,value){
                        $("#booking_detail").append("<tr></tr>"
                        +"<td>"+ ++key +"</td>"
                        +"<td>"+ value.order_id +"</td>"
                        +"<td>"+ value.order_date +"</td>"
                        +"<td>"+ value.mem_name +"</td>"
                        +"<td>"+ value.mem_phone +"</td>"
                        +"<td>"+ value.pro_name +"</td>"
                        +"<td>"+ value.order_price +"</td>"
                        +"<td> <span class=\"label label-warning\">"+value.order_status +"</span></td>"
                        
                        +"<td>"
                        +" <button type=\"button\" class=\"btn btn-primary btn-xs payment_booking \" onclick=\"payBooking()\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i> Payment</button>"
                        +" <button type=\"button\" class=\"btn btn-danger btn-xs delete_booking\" onclick=\"rejectBooking()\"><i class=\"fa fa-repeat\" aria-hidden=\"true\"></i> Reject</button>"
                        +"</td>");
                    });
                }


            },error: function(data){

                console.log(data);
            }
        });

}

function loadTime(){
    $("select#booking_time_select").empty();
    $.ajax({
        url: 'booking_time.php',
        method: 'POST',
        dataType: 'json',
        data:{
            dateText:$("#booking_stadium_select").val()
        },
        success: function(data){
            
            $.each(data, function(k,v){
                $("select#booking_time_select").append("<option value="+v.time_id+">"+ v.time_start + " - " + v.time_end +"</option>")
            });
        },error: function(data){

            console.log(data);
        }
    });

}

function loadStadium(){
    $("select#booking_stadium_select").empty();
    var dateText = $("#date").val();
    var time = $("select#booking_time_select").val();
    $.ajax({
        url: 'booking_stadium.php',
        method: 'POST',
        dataType: 'json',
        data:{
            dateText:dateText,
            time:time
        },
        success: function(data){
            if(data.length > 0){
                $.each(data, function(k,v){
                    $("select#booking_stadium_select").append("<option value="+v.pro_id+">"+ v.pro_name +"</option>")
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

function booking(){
    $("#modalAddBooking").modal("show");
    loadTime();
    //loadStadium();
}

function booking_save(){
    var dateText = $("#date").val();
    var time = $("select#booking_time_select").val();
    var stadium = $("select#booking_stadium_select").val();
    $.ajax({
        url: 'insert_booking.php',
        method: 'POST',
        data:{
            dateText:dateText,
            time:time,
            stadium:stadium
        },
        success: function(data){
            $("#modalAddBooking").modal("hide");
            if(data === "OK"){
                Swal.fire({
                    position: 'center',
                    title: 'Booking success',
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
                    title: 'Booking Fail',
                    showConfirmButton: false,
                    timer: 1500
                    });
            }
            loadTableBooking();
           
        },error: function(data){

            console.log(data);
        }
    });
}


function payBooking(){
    $("#modalPayBooking").modal({backdrop: 'static', keyboard: false, show: true});
}

function rejectBooking(){
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to reject this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, reject it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Rejected!',
            'Your booking has been rejected.',
            'success'
          )
        }
      })
}


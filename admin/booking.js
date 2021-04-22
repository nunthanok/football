

$(function(){
    loadTableBooking();
});



function loadTableBooking(){
    
        $.ajax({
            url: 'booking_detail.php',
            method: 'POST',
            dataType: 'json',
            success: function(data){

                console.log(data);
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
                        +"<td>"+ value.order_price +"</td>"
                        +"<td> <span class=\"label label-warning\">"+value.order_status +"</span></td>"
                        
                        +"<td>"
                        +" <button type=\"button\" class=\"btn btn-primary btn-xs payment_booking \"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i> Payment</button>"
                        +" <button type=\"button\" class=\"btn btn-danger btn-xs delete_booking\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i> Delete</button>"
                        +"</td>");
                    });
                }


            },error: function(data){

                console.log(data);
            }
        });

}
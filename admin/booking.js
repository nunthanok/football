

$(function(){
    loadTableBooking();
    

    $("#date").datepicker({
        minDate:0,
        maxDate: 3,
        dateFormat: 'dd-mm-yy',
        onSelect: function (dateText, inst) {
            loadStadium();
        }
    }).datepicker("setDate", new Date());
    
    $( "#cphone" ).autocomplete({
        source: "get_member_list.php",
        minLength: 2,
        select: function( event, ui ) {
          checkMember(ui.item.id);
        }
    });

    $( "#cphone2" ).autocomplete({
        source: "get_member_list.php",
        minLength: 2,
        select: function( event, ui ) {
          checkMember2(ui.item.id);
        }
    });
    
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
                        $("#booking_detail").append("<tr>"
                        +"<td>"+ ++key +"</td>"
                        +"<td class='t_order_id' data-order='"+value.order_id+"'>"+ value.order_id +"</td>"
                        +"<td>"+ value.book_date +"</td>"
                        +"<td>"+ value.time_start +"-"+ value.time_end +"</td>"
                        +"<td>"+ value.or_desc +"</td>"
                        +"<td>"+ value.pro_name +"</td>"
                        +"<td class='order_price'>"+ value.order_price +"</td>"
                        +"<td>"+ value.order_date +"</td>"
                        +"<td> <span class=\"label label-warning\">"+value.order_status +"</span></td>"
                        
                        +"<td>"
                        +" <button type=\"button\" class=\"btn btn-primary btn-xs payment_booking \" onclick=\"payBooking(this)\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i> ຈ່າຍເງິນ</button>"
                        +" <button type=\"button\" class=\"btn btn-danger btn-xs delete_booking\" onclick=\"rejectBooking(this)\"><i class=\"fa fa-repeat\" aria-hidden=\"true\"></i> ຍົກເລີກ</button>"
                        +"</td></tr>");
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
    var name = $("#bname").val();
    var phone = $("#bphone").val();
    var time = $("select#booking_time_select").val();
    var stadium = $("select#booking_stadium_select").val();
    if(stadium == ""  || stadium == null){
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ກະລຸນາເລືອກເວລາ',
            showConfirmButton: false,
            timer: 1500
            });
    }else{
        $.ajax({
            url: 'insert_booking.php',
            method: 'POST',
            data:{
                dateText:dateText,
                desc:name + ": " + phone,
                time:time,
                stadium:stadium
            },
            success: function(data){
                
                if(data === "OK"){
                    $("#modalAddBooking").modal("hide");
                    Swal.fire({
                        position: 'center',
                        title: 'ການຈອງສຳເລັດ',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'ຕົກລົງ',
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
                //loadTableBooking();
               
            },error: function(data){
    
                console.log(data);
            }
        });
    }
    
}


// ປ້ອນຈຳນວນເງິນທີ່ຕ້ອງຈ່າຍເພື່ອຄິດໄລ່ເງິນທອນ
function inputBookingPayment(){
    var grandTotal = $("#modal_booking_price").text();
    var payment = $("#priceTopay").val();
    if($.trim(payment) == ""){
        $("#modal_booking_price_thone").text(0);
    }else{
        var refund = payment - grandTotal;
        console.log(refund);
        $("#modal_booking_price_thone").text(refund).number(true, 2);
       
    }
}

function payBooking(target){
    $("#modalPayBooking").modal({backdrop: 'static', keyboard: false, show: true});
    var order_price=$(target).closest("tr").find("td.order_price").text();
    var order_id=$(target).closest("tr").find("td.t_order_id").data("order");
    $("#modal_booking_price").empty().text(order_price);
    $("#modal_booking_price_thone").empty().text(0);
    $("#modal_booking_id").empty().val(order_id);

    $("#cphone").val("");
    $("#cphone2").val("");
    $("#priceTopay").val("");
    $("#b_member_b").empty().append("<td id=\"b_name\">-</td><td id=\"b_number_match\">-</td>");
    $("#b_member_s").empty().append("<td id=\"s_name\">-</td><td id=\"s_number_match\">-</td>");
   
}

function checkMember(cphone){
    //var cphone = $("input#cphone").val();
    $.ajax({
        url: 'get_member.php',
        method: 'POST',
        dataType: 'json',
        data:{
            cphone:cphone
        },
        success: function(data){
           
            if(data.length > 0){

                $("#hidden_member_ids").empty().val(data[0].mem_id);
                $("#b_name").empty().text(data[0].mem_name);
                $("#b_number_match").empty().text(data[0].mem_match);
                $("#match_free").empty();
                if(data[0].mem_match == 6){
                    $("#match_free").text("Free");
                }
            }else{
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'ບໍ່ມີລະຫັດສະມາຊິກນີ້ໃນລະບົບ',
                    showConfirmButton: true,
                    //timer: 1500
                    });
            }
           
        },error: function(data){

            console.log(data);
        }
    });
}

function checkMember2(cphone){
    //var cphone = $("input#cphone2").val();
    $.ajax({
        url: 'get_member.php',
        method: 'POST',
        dataType: 'json',
        data:{
            cphone:cphone
        },
        success: function(data){
            if(data.length > 0){
                $("#hidden_member_ids2").empty().val(data[0].mem_id);
                $("#s_name").empty().text(data[0].mem_name);
                $("#s_number_match").empty().text(data[0].mem_match);
                // $("#match_free").empty();
                // if(data[0].mem_match == 6){
                //     $("#match_free").text("Free");
                // }
            }else{
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'ບໍ່ມີລະຫັດສະມາຊິກນີ້ໃນລະບົບ',
                    showConfirmButton: true,
                    //timer: 1500
                    });
            }
           
        },error: function(data){

            console.log(data);
        }
    });
}

function bookPayment(){
    var refund = $("#modal_booking_price_thone").text();
    var mem_id = $( "#hidden_member_ids" ).val();
    var order_id = $("#modal_booking_id").val();
    var mem_id2 = $( "#hidden_member_ids2" ).val();
    if($.trim(mem_id) != "" && $.trim(order_id) != ""){
        $.ajax({
            url: "booking_payment.php",
            method: "POST",
            data: {
                mem_id:mem_id,
                order_id:order_id,
                mem_id2:mem_id2
            },
            success:function(data){
                $("#modalPayBooking").modal("hide");
                if(data === "OK"){
                    Swal.fire({
                        position: 'center',
                        title: 'ເງິນທອນ: ' + refund + ' Kip',
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
                        title: 'ການຈ່າຍເງິນບໍ່ສຳເລັດ' + data,
                        showConfirmButton: false,
                        timer: 1500
                        });
                }
                loadTableBooking();
            },
            error:function(){
                alert("Error");
            }
        });
    }else{
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ກະລຸນາປ້ອນຂໍ້ມູນໃຫ້ຄົບຖ້ວນ',
            showConfirmButton: false,
            timer: 1500
        });  
    }
   
}

function rejectBooking(target){
    Swal.fire({
        title: 'ຍົກເລີກແທ້ ຫລື ບໍ່ ?',
        text: "ຕ້ອງການຍົກເລີກການຈອງແທ້ ຫລື ບໍ່",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'ຍົກເລີກ',
        confirmButtonText: 'ຕົກລົງ'
      }).then((result) => {
        if (result.isConfirmed) {
            var order_id=$(target).closest("tr").find("td.t_order_id").data("order");
            $.ajax({
                url: "booking_reject.php",
                method: "POST",
                data: {
                    order_id:order_id
                },
                success:function(data){
                    if(data === "OK"){
                        Swal.fire({
                            position: 'center',
                            title: 'ຍົກເລີກເດີ່ນສຳເລັດ' ,
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
                            title: 'ຍົກເລີກເດີ່ນບໍ່ສຳເລັດ ' + data,
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                    loadTableBooking();
                },
                error:function(){
                    alert("Error");
                }
            });        }});
}


$( "#btnRegisterMember" ).click(function() {
    $( ".regiterMember" ).toggle( "fast" );
});

function checkPhone(){
    var mPhone = $("#r_phone").val();
    console.log(mPhone);
    $.ajax({
        method: "POST",
        url: "checkphone.php",
        data: {mPhone:mPhone},
        success: function(data){
            if(data == "have"){
                $("div.warningInput").addClass("has-error");
                $("#warningPhone").text("ເບີໂທນີ້ໄດ້ລົງທະບຽນແລ້ວ ກະລຸນາປ້ອນເບີອື່ນ");
                $(".submit_regitOnpayment").prop('disabled', true);
                
            }else{
                $("#vadilationPhone").empty();
                $(".submit_regitOnpayment").prop('disabled', false);
                $("div.warningInput").removeClass("has-error");
                $("#warningPhone").text("");
            }
            

        }
    });
}

function registOnpayment(){
    var rName = $("#r_name").val();
    var rPhone = $("#r_phone").val();

    // console.log(rName);

    $.ajax({
        url: "insert_member.php",
        method: "POST",
        data: {m_name:rName,m_phone:rPhone},
        success: function(data){
            console.log(data);
            $("#r_name").val("");
            $("#r_phone").val("");
            $("#warningPhone").text("");
            $( ".regiterMember" ).toggle("fast");
        },
        error: function(){
            console.log("Error");
        }
    });
    
}







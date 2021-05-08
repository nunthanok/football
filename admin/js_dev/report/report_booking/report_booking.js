$(function(){
    var today = new Date();
    var dd = today.getDate();

    var mm = today.getMonth()+1; 
    var yyyy = today.getFullYear();
    if(dd<10) 
    {
        dd='0'+dd;
    } 

    if(mm<10) 
    {
        mm='0'+mm;
    } 
    today = dd+'-'+mm+'-'+yyyy;
    loadBooking(today,today);


    $(".date_picker").datepicker({
        dateFormat: 'dd-mm-yy'   
    }).datepicker('setDate', 'today');


/*
    $('#report_booking_table').DataTable( {
        "paging": false,
        "info": false,
        "createdRow": function ( row, data, index ) {
            switch (data['order_status']) {
                case "success":
                    $('td', row).eq(8).addClass('highlight_success');
                    break;
                case "pending":
                    $('td', row).eq(8).addClass('highlight_pending');
                    break;
                case "reject":
                    $('td', row).eq(8).addClass('highlight_reject');
                    break;    
                default:
                    break;
            }
        },
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 3 ).footer() ).html( total);
        },
        "ajax": {
            "url": "get_booking.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "order_id" },
            { "data": "order_date" },
            { "data": "book_date" },
            { "data": "mem_name" },
            { "data": "mem_phone" },
            { "data": "order_price" },
            { "data": "total_discount" },
            { "data": "or_desc" },
            { "data": "order_status" }

        ]
    } );
    */
});

function search_report_booking(e){
    e.preventDefault();
    var report_booking_date1 = $("#report_booking_date1").val();
    var report_booking_date2 = $("#report_booking_date2").val();
    if($.trim(report_booking_date1) == "" || $.trim(report_booking_date2) == ""){
        alert("Please input value")
    }else{
        var parts1 = report_booking_date1.split("-");
        var parts2 = report_booking_date2.split("-");
        var d1 = new Date(parts1[2]+"-"+parts1[1]+"-"+parts1[0]);
        var d2 = new Date(parts2[2]+"-"+parts2[1]+"-"+parts2[0]);
        if (d1 <= d2) {
            loadBooking(report_booking_date1,report_booking_date2); 
        }else{
            alert("date input invalid")
        }
    }
}
function loadBooking(from,to){
    
    $('#report_booking_table').DataTable().destroy();
    $.ajax({
        url:"get_booking.php",
        method: "POST",
        dataType: "json",
        data:{
            from:from,
            to:to
        },
        success: function(data){ 
            var color = "";
            var total = 0;
            var total_profit = 0;
            var v_success = 0;
            var v_pending = 0;
            var v_reject = 0;
            $("#booking_data").empty();
            $("#report_booking_total").empty();
            $("#report_booking_success").empty();
            $("#report_booking_pending").empty();
            $("#report_booking_reject").empty();
            $("#report_booking_profit").empty();
            $.each(data, function(k,v){
                total = total+parseInt(v.order_price);

                switch (v.order_status) {
                    case "success":
                        color = "green";
                        v_success = v_success + 1;
                        total_profit = total_profit+parseInt(v.order_price);
                        break;
                    case "reject":
                        v_reject = v_reject + 1;
                        color = "red";
                        break;
                    case "pending":
                        color = "#ffa500";
                        v_pending = v_pending + 1;
                        break;    
                    default:
                        break;
                }

                $("#booking_data").append(" <tr>"+
                    "<td>"+ ++k +"</td>"+
                    "<td>"+v.order_id+"</td>"+
                    "<td>"+v.order_date+"</td>"+
                    "<td>"+v.book_date+"</td>"+
                    "<td>"+v.mem_name+"</td>"+
                    "<td>"+v.mem_phone+"</td>"+
                    "<td>"+v.order_price+"</td>"+
                    "<td>"+v.total_discount+"</td>"+
                    "<td>"+v.or_desc+"</td>"+
                    "<td style=\" color:"+ color +"\">"+v.order_status+"</td>"+
                "</tr>");
            });
            $('#report_booking_table').DataTable({ 
                "paging": false
                ,"info": false
                ,dom: 'Bfrtip'
                ,buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
            $("#report_booking_total").text(total).number(true, 0);
            $("#report_booking_success").text(v_success);
            $("#report_booking_pending").text(v_pending);
            $("#report_booking_reject").text(v_reject);
            $("#report_booking_profit").text(total_profit).number(true, 0);
            
        },
        error: function(e){
            console.log(e);
        }

    });
}


    


   
    
    

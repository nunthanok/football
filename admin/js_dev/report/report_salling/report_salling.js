$(function(){


    $(".date_picker").datepicker({
        dateFormat: 'dd-mm-yy'   
    }).datepicker('setDate', 'today');


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
    loadSalling(today,today);

});

function search_report_salling(e){
    e.preventDefault();
    var report_salling_date1 = $("#report_salling_date1").val();
    var report_salling_date2 = $("#report_salling_date2").val();
    if($.trim(report_salling_date1) == "" || $.trim(report_salling_date2) == ""){
        alert("Please input value")
    }else{
        var parts1 = report_salling_date1.split("-");
        var parts2 = report_salling_date2.split("-");
        var d1 = new Date(parts1[2]+"-"+parts1[1]+"-"+parts1[0]);
        var d2 = new Date(parts2[2]+"-"+parts2[1]+"-"+parts2[0]);
        if (d1 <= d2) {
            loadSalling(report_salling_date1,report_salling_date2); 
        }else{
            alert("date input invalid")
        }
    }
}

function loadSalling(from,to){

    $('#salling_table').DataTable().destroy();
    $.ajax({
        url: 'get_salling.php',
        method: "POST",
        data:{
            from:from,
            to:to
        },
        dataType: 'json',
        success: function(data){   
                var no = 1;
                var total = 0;
                var total_distcount = 0;
                var total_profit = 0;

                $("#salling_data").empty();
                $.each(data, function(k,v){
                    total = total+parseInt(v.order_price);
                    total_distcount = total_distcount+parseInt(v.total_discount);
                    
                    $("#salling_data").append("<tr>"+
                        "<td>"+no+++"</td>"+
                        "<td>"+v.order_id+"</td>"+
                        "<td>"+v.order_date+"</td>"+
                        "<td>"+v.staff_name+"</td>"+
                        "<td>"+v.staff_phone+"</td>"+
                        "<td>"+v.total_discount+"</td>"+
                        "<td>"+v.order_price+"</td>"+
                    "</tr> ");

                });
               

                total_profit = total-total_distcount;

                $("#salling_table").DataTable({
                    "paging": false,
                    "info": false,
                    dom: 'Bfrtip',
                    // buttons: [
                    //     'excel', 'pdf', 'print'
                    // ]
                    buttons: [
                        { extend: 'excelHtml5', footer: true },
                        { extend: 'pdfHtml5', footer: true },
                        { extend: 'print', footer: true },
                    ]
                });
                $("#report_salling_total").text(total).number(true, 0);
                $("#report_salling_discount").text(total_distcount).number(true, 0);
                $("#report_salling_profit").text(total_profit).number(true, 0);
        },
        error: function(e){
            console.log(e);
        }
    });
}


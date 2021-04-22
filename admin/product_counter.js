$(document).ready(function(){
    LoadproductCounter();
    loadCategoryCounter();
    loadBill();

    $(document).on('click', '.addTobill', function(event){
        event.preventDefault();
        var pro_id = $(this).data("id");
        var od_qty = $(this).closest(".row").find(".od_qty").val();
        var order_id = $( "#bill_detail_item option:selected" ).val();
        if(order_id == undefined){
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'No Bill, Please Add Bill',
                showConfirmButton: false,
                timer: 1500
              });
        }else{
            $.ajax({
                url: "insert_bill_detail.php",
                method: "POST",
                data:{
                    pro_id:pro_id,
                    od_qty:od_qty,
                    order_id:order_id
                },
                // dataType:"json",
                success:function(data){
                    if(data === "OK"){
                        loadBillDetail();
                    }else{
                        alert(data);
                    }
                },
                error:function(){
                    alert("Error");
                }
            });
        }
    });

    $(document).on('click', '.removeFrombill', function(event){
        event.preventDefault();
        var od_id = $(this).data("id");
        $.ajax({
            url: "remove_bill_detail.php",
            method: "POST",
            data:{
                od_id:od_id
            },
            // dataType:"json",
            success:function(data){
                if(data === "1"){
                    loadBillDetail();
                }else{
                    alert(data);
                }
            },
            error:function(){
                alert("Error");
            }
        });
    });
    
});

function loadCategoryCounter(){
    $("#category_counter_content").load("category_counter.php");
}

function LoadproductCounter(){
    $("#product_counter").load("product_counter.php");
}

// ໂຫຼດ bill list(ໂຫລດລາຍຊື່ໂຕະເພື່ອສະແດງ)
function loadBill(){
    $.ajax({
        url: "bill_counter.php",
        method: "POST",
        dataType:"json",
        success:function(data){
            $("#bill_counter_content").empty();
            $("#bill_detail_item").empty();
            if(data.length == 0){
                $("#bill_counter_content").html("<div class=\" alert alert-warning\" role=\"alert\">No Bill !</div>");
                $("#bill_detail_item").html("<div class=\" alert alert-warning\" role=\"alert\">No Bill !</div>");
            }else{
                $.each(data,function(k,v){
                    $("#bill_counter_content").append("<div class=\"col-md-4\">"

                   
                        +"<div class=\"thumbnail\">"
                        +"<div class=\"caption\">"
                        +"<div class=\"row\">"

                        +"<div class=\"col-md-8\">"
                        +"<h4><i class=\"fa fa-th-large\" aria-hidden=\"true\"></i> "+v.or_type_name+"</h4>"
                        +"</div>"

                        +"<div class=\"col-md-4\">"
                        +"<button type=\"button\" onclick='delete_bill_list(event, "+v.order_id+")' class=\"btn btn-danger btn-xs btn-block\"><i class=\"fa fa-trash-o fa-lg\" aria-hidden=\"true\"></i></button>"
                        +"</div>"
                        +"<hr width=\"100%\">"

                        +"<div class=\"col-md-12\">"
                        +"<span><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> "+v.order_date+"</span>"
                        +"</div>"
                            
                            
                            
                        +"</div>"
                        +"</div>"
                        +"</div>"
                    

                        // +"<h6 class=\"card-title\" > Time: "+v.order_date+"</h6>"
                        // + "<button type='button' class='btn btn-primary btn-md btn-block'>Table: <span class=\"badge\">"+v.or_type_name+"</span></button>"
                    +"</div>");
                    $("#bill_detail_item").append("<option value=\""+v.order_id+"\">"+v.or_type_name+"</option>");
                });
                loadBillDetail();
            }
        },
        error:function(){
            alert("Error");
        }
    });
}

//ໂຫຼດຂໍ້ມູນບິນ (shopping cart)
function loadBillDetail(){
    var bill_id = $( "#bill_detail_item option:selected" ).val();
    $.ajax({
        url: "bill_detail_counter.php",
        method: "POST",
        data: {bill_id:bill_id},
        dataType:"json",
        success:function(data){
            $("#bill_detail_list_item").empty();
            $("#total").empty();
            var total = 0;
            if(data.length == 0){
                $("#bill_detail_list_item").append("<tr colspan=\"5\">"
                    +"<td>No Item</td>"
                +"</tr>");
            }else{
                $.each(data,function(k,v){
                    var total_item = 0;
                    total_item = v.pro_price * v.od_qty;
                    total = total + total_item;
                    $("#bill_detail_list_item").append("<tr class='haveValue'>"
                        +"<td>"+ ++k +"</td>"
                        +"<td>"+v.pro_name+"</td>"
                        +"<td>"+v.od_qty+"</td>"
                        +"<td>"+v.u_name+"</td>"
                        +"<td>"+v.pro_price+"</td>"
                        +"<td>"+total_item+"</td>"
                        +"<td><button type='button' class='btn btn-danger btn-sm removeFrombill' data-id='"+v.od_id+"'><i class=\"fa fa-trash-o fa-lg\" aria-hidden=\"true\"></i></button></td>"
                    +"</tr>");
                });
                $("#totalValue").val(total);
                $("#total").text("Total: " + total + " Kip");
            }
        },
        error: function (request, status, error) {
            alert(request.responseText);
        }
    });
}

// load product by category
function getCategory(){
    var cat_id = $("#category_counter").val();
    $.ajax({
        url: "product_by_cat.php",
        method: "POST",
        data: {cat_id:cat_id},
        dataType:"json",
        success:function(data){
            $("#product_counter").empty();
            if(data.length == 0){
                $("#product_counter").html("<div class=\" alert alert-warning\" role=\"alert\">No Product !</div>");
            }else{
                $.each(data,function(k,v){
                    $("#product_counter").append("<div class=\"col-sm-6 col-md-4\">"
                        +"<div class=\"thumbnail\">"
                            +"<div class=\"caption\">"
                            +"<h5>"+v.pro_name+"</h5>"
                            +"  <span>Code : "+v.pro_code+" ||</span>"
                            +"  <span class=\"label label-success\"> Unit: "+v.u_id+"</span>"
                            +"  <h4>"+v.pro_price+" KIP</h4>"
                            +"  <div class=\"row\">"
                            +"          <div  class=\"col-md-6\">"
                            +"              <button type=\"button\" class=\"btn btn-primary addTobill\" data-id=\""+v.pro_id+"\">Add to Bill</button>"
                            +"          </div>"
                            +"          <div  class=\"col-md-6\">"
                            +"              <input type=\"number\" class=\"form-control\" value=\"1\" style=\"height: 35px;\">"
                            +"          </div>   "   
                            +"   </div>"

                            +"</div>"
                            +"</div>"
                            +"</div>");
                });
            }
        },
        error:function(){
            alert("Error");
        }
    });
}

// ເພີ່ມບິນ (ເພີ່ມໂຕະ)
function addBill(){

    
    $("#add_bill").submit( function(e){
        e.preventDefault();
        
        $.ajax({
            url: "insert_bill.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(data){
                $("#modalAddbill").modal("hide");
                if(data === "OK"){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Insert Bill Successfully',
                        showConfirmButton: false,
                        timer: 1500
                      });
                      window.setTimeout(function(){
                          location.reload()
                        
                        },1000)
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Insert Bill Fail',
                        showConfirmButton: false,
                        timer: 1500
                      });
                }
                $("#add_bill")[0].reset();
                loadBill();

            },
            error: function(){
                alert("Error");
            }

        });
        
    });

}

// ກົດ checkout ແລ້ວເອົາຈຳນວນເງິນທີ່ຕ້ອງຈ່າຍໄປໃສ່ໃນ modal
function payment(){
    $(".divEmpty").empty();
    $(".valueEmpty").val("");
    var total = $("#totalValue").val();
    $("#modalTotal").text(total);
    $("#grandTotal").val(total);
    var rowCount = $('#bill_detail_list_item tr.haveValue').length;
    if(rowCount > 0){
        $("#modalCheckout").modal({
            show: true,
            backdrop: 'static',
            keyboard: false
        });
    }else{
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'No Product!!!',
            showConfirmButton: false,
            timer: 1500
            });
    }
}

// ປ້ອນຈຳນວນເງິນສ່ວນຫຼຸດແລ້ວເອົາໄປຄິດໄລ້່
function inputDiscount(){
    var discount = $("#discount").val();
    var modalTotal = $("#modalTotal").text();
    var grandTotal = modalTotal - discount;
    $("#grandTotal").val(grandTotal);
}

// ປ້ອນຈຳນວນເງິນທີ່ຕ້ອງຈ່າຍເພື່ອຄິດໄລ່ເງິນທອນ
function inputPayment(){
    var grandTotal = $("#grandTotal").val();
    var payment = $("#payment").val();
    if($.trim(payment) == ""){
        $("#refund").val(0);
    }else{
        var refund = payment - grandTotal;
        $("#refund").val(refund);
    }
}

// ບັນທຶກບິນ
function finalCheckOut(e){
    e.preventDefault();
    var refund = $("#refund").val();
    var payment = $("#payment").val();
    if($.trim(payment) == "" || refund <0){
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ຈຳນວນເງິນທີ່ໄດ້ຮັບບໍ່ຖືກຕ້ອງ',
            showConfirmButton: false,
            timer: 1500
            });
            $("#payment").focus();
    }else{
        var order_id = $( "#bill_detail_item option:selected" ).val();
        var total = $("#totalValue").val();
        var discount = $("#discount").val();
        $.ajax({
            url: "final_checkout.php",
            method: "POST",
            data: {
                total:total,
                order_id:order_id,
                discount:discount
            },
            success:function(data){
                $("#modalCheckout").modal("hide");
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
                        title: 'Checkout Bill Fail',
                        showConfirmButton: false,
                        timer: 1500
                        });
                }
                loadBill();
            },
            error:function(){
                alert("Error");
            }
        });
    }
}

// ລົບ bill list
function delete_bill_list(e, order_id){
    e.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this Bill",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "remove_bill.php",
                method: "POST",
                data: {
                    order_id:order_id
                },
                success:function(data){
                    if(data === "OK"){
                        Swal.fire({
                            position: 'center',
                            title: 'Delete success' ,
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
                            title: 'Delete Faile ' + data,
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                    loadBill();
                },
                error:function(){
                    alert("Error");
                }
            });        }});
}
<?php 
include("session.php");
include("../database/connect.php");
?>
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-toggle.min.css" rel="stylesheet">
<table class="table table-hover table-bordered" id="staff_table">
    <thead style="background-color: #30a5ff; color: white;">
        <tr>
            <th>ລຳດັບ</th>
            <th>ຊື ພະນັກງານ</th>
            <th>ເບີໂທ</th>
            <th>ຊື່ເຂົ້າໃຊ້ລະບົບ</th>
            <th>ສະຖານະ</th>
            <th>ສິດເຂົ້າໃຊ້</th>
            <th>ຈັດການພະນັກງານ</th>
        </tr>
    </thead>
    <tbody>

        <?php 

    if ($_SESSION["staff_role"] == '1') {

        $sql = "SELECT * FROM staffs ";
        
    }else{

        $sql = "SELECT * FROM staffs WHERE staff_role != '1' ";
    }
        // $sql = "SELECT * FROM staffs ";
        $result = $conn->query($sql);
        $no = 1;
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $check = $row["staff_status"] == "ON" ? "checked" : "";
        ?>

        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $row["staff_name"]?></td>
            <td><?php echo $row["staff_phone"]?></td>
            <td><?php echo $row["staff_username"]?></td>
            <td class="status">
            
            <input type="checkbox"  <?PHP echo $check; ?> data-toggle="toggle" class="staff_status" data-id="<?php echo $row["staff_id"]; ?>" data-onstyle="success" data-offstyle="danger">
    
            </td>
            <td>
            <?php  $role = $row["staff_role"]; 

                if($role == 1){
                    echo "<span class='label label-success'>Administrator</span>";
                }else{
                    echo "<span class='label label-warning'>Staff</span>";
                }
            ?>
            </td>
            <td>
            <button type="button" name="edit" class="btn btn-primary edit_data" data-id="<?php echo $row["staff_id"]; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> ແກ້ໄຂຂໍ້ມູນ</button>
            <button type="button" name="delete" class="btn btn-danger delete_data" data-id="<?php echo $row["staff_id"]; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> ລົບຂໍ້ມູນ</button>
            </td>
        </tr>

        <?php 
                }
    
            }else{
                echo "0 Result";
            } $conn->close(); 
        ?>

    </tbody>
</table>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/bootstrap-toggle.min.js"></script>


<script>

$(document).ready(function(){

    $(".staff_status").on('change',function(event){
        event.preventDefault();

         var status = this.checked ? 'ON' : 'OFF';
        // var status = $(this).closest("tr").find(".status").text();
        // var staff_id = $(this).closest("tr").find(".edit_data").data("id");
        var staff_id = $(this).data("id");
        console.log(staff_id);
        console.log(status);

        $.ajax({
            url: "change_status_staff.php",
            method: "POST",
            data:{status:status, staff_id:staff_id },
            dataType: "json",
            success: function(data){
                 console.log(data);
                 location.reload();

            },
            error: function(xhr,status,error){
                console.log(xhr);
            }
        });

    });

});


    $(document).ready(function() {
        $('#staff_table').DataTable();
    } );
    





</script>
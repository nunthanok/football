<?php 
include("../database/connect.php");
?>
<!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> -->
<link href="css/bootstrap-toggle.min.css" rel="stylesheet">
<table class="table table-hover table-bordered">
    <thead style="background-color: #30a5ff; color: white;">
        <tr>
            <th>No.</th>
            <th>Staff Name</th>
            <th>Staff Phone</th>
            <th>Staff Username</th>
            <th>Staff Status</th>
            <th>Staff Role</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>

        <?php 
        $sql = "SELECT * FROM staffs";
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
            <td><button type="button" name="edit" class="btn btn-primary edit_data" data-id="<?php echo $row["staff_id"]; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
        </tr>

        <?php 
                }
    
            }else{
                echo "0 Result";
            } $conn->close(); 
        ?>

    </tbody>
</table>

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




</script>
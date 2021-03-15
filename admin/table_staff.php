<?php 
include("../database/connect.php");
?>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
        ?>

        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $row["staff_name"]?></td>
            <td><?php echo $row["staff_phone"]?></td>
            <td><?php echo $row["staff_username"]?></td>
            <td>
            
            <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">

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

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
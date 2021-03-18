
<table class="table table-hover table-bordered">
    <thead style="background-color: #30a5ff; color: white;">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Unit Name</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>

    <?php 
    
    include("../database/connect.php") ;
    $sql = "SELECT * FROM units";
    $result = $conn->query($sql);
    $no = 1;

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){ 
    
    ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row["u_id"]?></td>
            <td><?php echo $row["u_name"]?></td>
            <td><button type="button" class="btn btn-warning edit_unit" data-id="<?php echo $row["u_id"]?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
        </tr>

        <?php }
        }else{

            echo "0 Record";
        }?>

    </tbody>
</table>
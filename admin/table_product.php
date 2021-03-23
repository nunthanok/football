<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<table class="table table-hover table-bordered" id="product_table">
    <thead style="background-color: #30a5ff; color: white;">
        <tr>
            <th>No.</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Unit</th>
            <th>Product Category</th>
            <th>Manage</th>
        </tr>
    </thead>
    <tbody>

    <?php 
    include("../database/connect.php");
    $sql = "SELECT * FROM products";
    $query = $conn->query($sql);
    $no = 1;

    if($query->num_rows > 0 ){

        while($row = $query->fetch_assoc()){

    
    ?>

        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $row["pro_code"]?></td>
            <td><?php echo $row["pro_name"]?></td>
            <td><?php echo $row["pro_price"]?></td>
            <td><?php echo $row["u_id"]?></td>
            <td><?php echo $row["cat_id"]?></td>
            <td>
            <button type="button" name="edit" class="btn btn-warning edit_data"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
            <button type="button" name="delete" class="btn btn-danger delete_data"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
            </td>
        </tr>

        <?php 
        
             }
            } 
    ?>

    </tbody>
</table>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#product_table').DataTable();
    } );
</script>




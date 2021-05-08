

<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<table class="table table-hover table-bordered" id="product_table">
    <thead style="background-color: #30a5ff; color: white;">
        <tr>
            <th>ລຳດັບ</th>
            <th>ລະຫັດ ສິນຄ້າ</th>
            <th>ຊື່ ສິນຄ້າ</th>
            <th>ລາຄາ ສິນຄ້າ</th>
            <th>ຫນ່ວ ຍສິນຄ້າ</th>
            <th>ປະເພດ ສິນຄ້າ</th>
            <th>ຈັດການສິນຄ້າ</th>
        </tr>
    </thead>
    <tbody>

    <?php 
    include("../database/connect.php");
    $sql = "SELECT * FROM products INNER JOIN category ON products.cat_id = category.cat_id INNER JOIN units ON products.u_id = units.u_id";
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
            <td><?php echo $row["u_name"]?></td>
            <td><?php echo $row["cat_name"]?></td>
            <td>
            <button type="button" name="edit" class="btn btn-warning edit_data" data-id="<?php echo $row["pro_id"]?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> ແກ້ໄຂສິນຄ້າ</button>
            <button type="button" name="delete" class="btn btn-danger delete_data" data-id="<?php echo $row["pro_id"]?>"><i class="fa fa-trash-o" aria-hidden="true"></i> ລົບສິນຄ້າ</button>
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




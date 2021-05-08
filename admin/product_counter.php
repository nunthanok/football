<?php 
include("../database/connect.php");

$sql = ("SELECT * FROM products INNER JOIN units ON products.u_id = units.u_id WHERE products.cat_id NOT IN('00000000018')");
$query = $conn->query($sql);

if($query->num_rows > 0){

    while($row = $query->fetch_assoc()){
        


?>


<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="caption">
            <h5><?php echo $row["pro_name"]?></h5>
            <span>ລະຫັດ : <?php echo $row["pro_code"]?> ||</span>
            <span class="label label-success"> ຫນ່ວຍ: <?php echo $row["u_name"]?></span>
            <h4><?php echo $row["pro_price"]?> ກີບ</h4>

            <div class="row">
                
                    <div  class="col-md-6">
                        <button type="button" class="btn btn-primary addTobill" data-id="<?php echo $row["pro_id"]?>"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> ເພີ່ມສິນຄ້າ</button>
                    </div>

                    <div  class="col-md-6">
                        <input type="number" class="form-control od_qty" value="1" style="height: 35px;">
                    </div>
                
            </div>

        </div>
    </div>
</div>

<?php 

    }
}
?>

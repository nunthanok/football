<select class="form-control" id="category_counter" onchange="getCategory()">
    <option value="">All Categories</option>
    <?php 
        include("../database/connect.php");

        $sql = ("SELECT * FROM category WHERE cat_id NOT IN( '00000000018') ");
        $query = $conn->query($sql);
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
        ?>
            <option value="<?PHP echo $row['cat_id']; ?>"><?PHP echo $row["cat_name"]; ?></option>
        <?php 
            }
        }
?>
</select>

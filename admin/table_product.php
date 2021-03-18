<?php 
include("../database/connect.php");
?>

<table class="table table-hover table-bordered">
    <thead style="background-color: #30a5ff; color: white;">
        <tr>
            <th>No.</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Unit</th>
            <th>Product Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button type="button" name="edit" class="btn btn-primary edit_data"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
            <td><button type="button" name="delete" class="btn btn-danger delete_data"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></td>
        </tr>
    </tbody>
</table>




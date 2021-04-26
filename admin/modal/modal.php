	
    
    <!-- Modal Add New Staff -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus fa-2x"></i> Add New Staff</h4>
		</div>
		<form id="add_staff" name="add staff" role="form"> <!--Form add new staff-->
		<div class="modal-body">
		
			<div class="form-group">
				<label for="name">Staff Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
			</div>
			<div class="form-group">
				<label for="username">Staff Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
			</div>
			<div class="form-group">
				<label for="password">Staff Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Username" required>
			</div>
			<div class="form-group">
				<label for="phone">Staff Phone</label>
				<input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone" required>
			</div>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary" id="submit">Submit</button>
		</div>
		</div>

		</form><!--End form-->

	</div>
	</div>




	<!-- Modal Edit Staff-->
<div class="modal fade" id="editStaff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Edit Staff Data</h3>
      </div>
	  <form id="edit_staff" name="edit_staff" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">Staff Name</label>
				<input type="hidden"  id="staff_id" name="staff_id">
				<input type="text" class="form-control" id="edit_name" name="edit_name" >
			</div>
			<div class="form-group">
				<label for="username">Staff Username</label>
				<input type="text" class="form-control" id="edit_username" name="edit_username" >
			</div>
			<div class="form-group">
				<label for="password">Staff Password</label>
				<input type="password" class="form-control" id="edit_password" name="edit_password" >
			</div>
			<div class="form-group">
				<label for="phone">Staff Phone</label>
				<input type="phone" class="form-control" id="edit_phone" name="edit_phone" >
			</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="update">Save changes</button>
      </div>
	  
    </div>

	</form><!--End form-->

  </div>
</div>





	<!-- Modal Add Member-->
	<div class="modal fade" id="modalAddMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Add New Member</h3>
      </div>
	  <form id="add_member" name="add_member" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">Member Name</label>
				<input type="text" class="form-control" id="m_name" name="m_name" placeholder="Member Name" required>
			</div>
			<div class="form-group">
				<label for="phone">Member Phone</label>
				<input type="text" class="form-control" id="m_phone" name="m_phone" placeholder="Member Phone" required>
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  
    </div>

	</form><!--End form-->

  </div>
</div>





	<!-- Modal Edit Member-->
	<div class="modal fade" id="modalEditMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Edit Member Data</h3>
      </div>
	  <form id="edit_member" name="edit_member" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">Member Name</label>
				<input type="hidden" id="mem_id" name="mem_id">
				<input type="text" class="form-control" id="edit_m_name" name="edit_m_name">
			</div>
			<div class="form-group">
				<label for="phone">Member Phone</label>
				<input type="text" class="form-control" id="edit_m_phone" name="edit_m_phone" >
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  
    </div>

	</form><!--End form-->

  </div>
</div>



<!-- Modal Edit Category-->
<div class="modal fade" id="modalEditCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Edit Category Data</h3>
      </div>
	  <form id="edit_cat_data" name="edit_member" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">Category Name</label>
				<input type="hidden" id="cat_id" name="cat_id">
				<input type="text" class="form-control" id="edit_cat_name" name="edit_cat_name">
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  
    </div>

	</form><!--End form-->

  </div>
</div>



<!-- Modal Edit Unit-->
<div class="modal fade" id="modalEditUnit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Edit Unit Data</h3>
      </div>
	  <form id="edit_unit_data" name="edit_unit_data" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">Category Name</label>
				<input type="hidden" id="u_id" name="u_id">
				<input type="text" class="form-control" id="edit_u_name" name="edit_u_name">
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  
    </div>

	</form><!--End form-->

  </div>
</div>





<!-- Modal Edit Order Type-->
<div class="modal fade" id="modalEditOrderType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Edit Order Type Data</h3>
      </div>
	  <form id="edit_OrderType_data" name="edit_OrderType_data" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">Category Name</label>
				<input type="hidden" id="edit_order_type_id" name="edit_order_type_id">
				<input type="text" class="form-control" id="edit_orderType_name" name="edit_orderType_name">
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  
    </div>

	</form><!--End form-->

  </div>
</div>




<!-- Modal Add Product-->
<div class="modal fade" id="modalAddProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Add Product Data</h3>
      </div>
	  <form id="add_product" name="add_product" role="form"> <!--Form Edit staff-->
      <div class="modal-body">

			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<label for="Product Code">Product Code</label>
						<input type="text" class="form-control" id="pro_code" name="pro_code" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="Product Name">Product Name</label>
						<input type="text" class="form-control" id="pro_name" name="pro_name" required>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label for="Product Name">Product Price</label>
						<input type="text" class="form-control" id="pro_price" name="pro_price" required>
					</div>
				</div>

				

				<div class="col-md-6">
					<div class="form-group">
						<label for="unit">Product Unit (select one):</label>

						

						<select class="form-control" name="unit" id="unit" required>

						<?php 
						include("../database/connect.php");

						$sql = "SELECT * FROM units";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()){
						?>
							<option value="<?php echo $row["u_id"]?>"><?php echo $row["u_name"]?></option>

							<?php } ?>

						</select>

						
					</div>
				</div>

				<div class="col-md-6">
				<div class="form-group">
						<label for="cat">Product Category (select one):</label>
						<select class="form-control" name="cat_name" id="cat_name" required>

						<?php 
						$sql = "SELECT * FROM category";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()){
						?>

						<option value="<?php echo $row["cat_id"]?>"><?php echo $row["cat_name"]?></option>

						<?php } ?>

						</select>
					</div>
				</div>

			</div>
	  		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  
    </div>

	</form><!--End form-->

  </div>
</div>





<!-- Modal Edit Product-->
<div class="modal fade" id="modalEditProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Edit Product Data</h3>
      </div>
	  <form id="edit_product" name="edit_product" role="form"> <!--Form Edit Product-->
      <div class="modal-body">

			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<label for="Product Code">Product Code</label>
						<input type="hidden" id="edit_product_id" name="edit_product_id">
						<input type="text" class="form-control" id="edit_pro_code" name="edit_pro_code" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="Product Name">Product Name</label>
						<input type="text" class="form-control" id="edit_pro_name" name="edit_pro_name" required>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label for="Product Name">Product Price</label>
						<input type="text" class="form-control" id="edit_pro_price" name="edit_pro_price" required>
					</div>
				</div>

				

				<div class="col-md-6">
					<div class="form-group">
						<label for="unit">Product Unit (select one):</label>

						

						<select class="form-control" name="edit_unit" id="edit_unit" required>

						<?php 
						include("../database/connect.php");

						$sql = "SELECT * FROM units";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()){
						?>
							<option value="<?php echo $row["u_id"]?>"><?php echo $row["u_name"]?></option>

							<?php } ?>

						</select>

						
					</div>
				</div>

				<div class="col-md-6">
				<div class="form-group">
						<label for="cat">Product Category (select one):</label>
						<select class="form-control" name="edit_cat_name2" id="edit_cat_name2" required>

						<?php 
						$sql = "SELECT * FROM category";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()){
						?>

						<option value="<?php echo $row["cat_id"]?>"><?php echo $row["cat_name"]?></option>

						<?php } ?>

						</select>
					</div>
				</div>

			</div>
	  		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  
    </div>

	</form><!--End form-->

  </div>
</div>









<!-- Modal Add Bill-->
<div class="modal fade" id="modalAddbill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Add Bill Data</h3>
      </div>
	  <form id="add_bill" name="add_bill" role="form"> <!--Form Edit staff-->
      <div class="modal-body">

			<div class="row">

				<div class="col-md-6">
				<div class="form-group">
						<label for="cat">Order Type (select one):</label>
						<select class="form-control" name="order_type_id" id="order_type_id" required>

						<?php 
						$sql = "SELECT or_type_id,or_type_name FROM order_type WHERE or_type_id NOT IN (SELECT or_type_id FROM orders WHERE order_status = 'pending')";
						$result = $conn->query($sql);
						if(mysqli_num_rows($result) > 0){
							while($row = $result->fetch_assoc()){
							?>
								<option value="<?php echo $row["or_type_id"]?>"><?php echo $row["or_type_name"]?></option>
							<?php } 
						}else{
							?>
								<option value="">Not Avaiable</option>
							<?PHP
						}
						?>

						</select>
					</div>
				</div>

			</div>
	  		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick = "addBill()">Save changes</button>
      </div>
	  
    </div>

	</form><!--End form-->

  </div>
</div>






<!-- Modal Check Out-->
<div class="modal fade" id="modalCheckout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">ຊຳລະເງິນທັງຫມົດ</h3>
      </div>
	  <form id="checkout" name="checkout" role="form"> <!--Form Edit staff-->
      <div class="modal-body">

			<div class="row">

				<div class="col-md-12">
				 <h1 style="text-align: center; font-weight: bold;" class="divValue" id="modalTotal"></h1><hr>

				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label for="Product Name">ສ່ວນຫລຸດ </label>
						<input type="number" class="form-control valueEmpty" value="0" onkeyup="inputDiscount()" id="discount" name="discount" >
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label for="Product Name">ຈຳນວນເງິນທີ່ຕ້ອງຈ່າຍ </label>
						<input class="form-control input-lg valueEmpty" type="text" id="grandTotal" name="grandTotal" placeholder="0" disabled>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="Product Name">ຮັບເງິນ </label>
						<input type="text" class="form-control input-lg valueEmpty" onkeyup="inputPayment()" id="payment" name="payment">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="Product Name">ເງິນທອນ </label>
						<input class="form-control input-lg valueEmpty" type="text" id="refund" name="refund" placeholder="0" disabled>
					</div>
				</div>

			</div>
	  		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ຍົກເລີກ</button>
        <button type="submit" class="btn btn-primary" onclick="finalCheckOut(event)">ຊຳລະເງິນ</button>
      </div>
	  
    </div>

	</form><!--End form-->

  </div>
</div>



<!-- Modal Add Booking -->
<div class="modal fade" id="modalAddBooking" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Booking</h4>
      </div>
      <div class="modal-body">
		<div class="row"><!--Open Row-->

		<div class="col-md-4">
			<div class="form-group">
				<label for="date" class="control-label">Date:</label>
				<input type="text" class="form-control" id="date" style="height:35px">
			</div>		
		</div>


		<div class="col-md-4">
			<div class="form-group">
				<label for="booking_time_select">Select Time:</label>
				<select class="form-control" id="booking_time_select" onchange="loadStadium()"></select>
			</div>
		</div>	


		<div class="col-md-4">

			<div class="form-group">
			<label for="booking_stadium_select">Select Staduim:</label>
			<select class="form-control col-lg-12" id="booking_stadium_select" ></select>
			</div>

		</div>

					
		

		

		</div><!--End Row-->
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="booking_save()">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!-- Modal Pay Booking -->
<div class="modal fade" id="modalPayBooking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Payment Stadium</h4>
      </div>
      <div class="modal-body">

        <div class="row">
			<div class="col-md-6">
				<span>ຈຳນວນເງິນ: <p style="font-weight: bold; font-size: 250%;">350.000 kip</p></span>

				<input type="text" class="form-control" name="priceTopay" id="priceTopay" placeholder="Enter the amount">
				<p style="font-weight: bold; font-size: 150%; color: green;"> Change : 350.000 kip</p>

			</div>
			<div class="col-md-6" style="border-left: thin solid #ff0000;">
				<h3 style="font-weight: bold;">Customer Data</h3> <hr>
				<input type="text" class="form-control" name="cphone" id="cphone" placeholder="59415161">
				<p class="help-block" style="font-size: 0.8em; color:green;">Please input customer phone to check number of match</p> <br/>

					<table class="table table-bordered">
						<thead style="font-size: 0.9em;">
							<tr>
								<th>Customer Name</th>
								<th>Number Of Match</th>
							</tr>
						</thead>
						
						<tr>
							<tbody style="text-align: center;">
								<td>-</td>
								<td>-</td>
							</tbody>
						</tr>
					</table>

			</div>
		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div><!--End Modal-->
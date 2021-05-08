	
    
    <!-- Modal Add New Staff -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus fa-2x"></i> ເພີ່ມພະນັກງານໃຫມ່</h4>
		</div>
		<form id="add_staff" name="add staff" role="form"> <!--Form add new staff-->
		<div class="modal-body">
		
			<div class="form-group">
				<label for="name">ຊື່</label>
				<input type="text" class="form-control" id="name" name="name"  required>
			</div>
			<div class="form-group">
				<label for="username">ຊື່ເຂົ້າໃຊ້ລະບົບ</label>
				<input type="text" class="form-control" id="username" name="username"  required>
			</div>
			<div class="form-group">
				<label for="password">ລະຫັດຜ່ານ</label>
				<input type="password" class="form-control" id="password" name="password"  required>
			</div>
			<div class="form-group">
				<label for="phone">ເບີໂທ</label>
				<input type="phone" class="form-control" id="phone" name="phone"  required>
			</div>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລີກ</button>
			<button type="submit" class="btn btn-primary" id="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> ບັນທຶກຂໍ້ມູນ</button>
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
        <h3 class="modal-title" id="myModalLabel">ແກ້ໄຂຂໍ້ມູນພະນັກງານ</h3>
      </div>
	  <form id="edit_staff" name="edit_staff" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">ຊື່ ພະນັກງານ</label>
				<input type="hidden"  id="staff_id" name="staff_id">
				<input type="text" class="form-control" id="edit_name" name="edit_name" >
			</div>
			<div class="form-group">
				<label for="username">ຊື່ ເຂົ້າໃຊ້ລະບົບ</label>
				<input type="text" class="form-control" id="edit_username" name="edit_username" >
			</div>
			<div class="form-group">
				<label for="password">ລະຫັດຜ່ານ</label>
				<input type="password" class="form-control" id="edit_password" name="edit_password" >
			</div>
			<div class="form-group">
				<label for="phone">ເບີໂທ</label>
				<input type="phone" class="form-control" id="edit_phone" name="edit_phone" >
			</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລີກ</button>
        <button type="submit" class="btn btn-primary" id="update"><i class="fa fa-floppy-o" aria-hidden="true"></i> ບັນທຶກຂໍ້ມູນ</button>
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
        <h3 class="modal-title" id="myModalLabel">ເພີ່ມສະມາຊິກ</h3>
      </div>
	  <form id="add_member" name="add_member" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">ຊື່</label>
				<input type="text" class="form-control" id="m_name" name="m_name" required>
			</div>
			<div class="form-group validateInput">
				<label for="phone">ເບີໂທ</label>
				<input type="text" class="form-control" id="m_phone" name="m_phone" onkeyup="checkPhone()"  required>
				<span id="vadilationPhone"></span>
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລີກ</button>
        <button type="submit" class="btn btn-primary btAddMember"><i class="fa fa-floppy-o" aria-hidden="true"></i> ບັນທຶກຂໍ້ມູນ</button>
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
        <h3 class="modal-title" id="myModalLabel">ແກ້ໄຂຂໍ້ມູນສະມາຊິກ</h3>
      </div>
	  <form id="edit_member" name="edit_member" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">ຊື່ ຫລື ຊື່ທີມ</label>
				<input type="hidden" id="mem_id" name="mem_id">
				<input type="text" class="form-control" id="edit_m_name" name="edit_m_name">
			</div>
			<div class="form-group">
				<label for="phone">ເບີໂທ</label>
				<input type="text" class="form-control" id="edit_m_phone" name="edit_m_phone" >
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລິກ</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> ບັນທຶກຂໍ້ມູນ</button>
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
        <h3 class="modal-title" id="myModalLabel">ແກ້ໄຂຂໍ້ມູນປະເພດສິນຄ້າ</h3>
      </div>
	  <form id="edit_cat_data" name="edit_member" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">ຊື່ ປະເພດສິນຄ້າ</label>
				<input type="hidden" id="cat_id" name="cat_id">
				<input type="text" class="form-control" id="edit_cat_name" name="edit_cat_name">
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລີກ</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> ບັນທິກຂໍ້ມູນ</button>
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
        <h3 class="modal-title" id="myModalLabel">ແກ້ໄຂຫົວຫນ່ວຍສິນຄ້າ</h3>
      </div>
	  <form id="edit_unit_data" name="edit_unit_data" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">ຊື່ຫົວຫນ່ວຍສິນຄ້າ</label>
				<input type="hidden" id="u_id" name="u_id">
				<input type="text" class="form-control" id="edit_u_name" name="edit_u_name">
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລີກ</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> ບັນທຶກຂໍ້ມູນ</button>
      </div>
	  
    </div>

	</form><!--End form-->

  </div>
</div>


<!-- Modal Edit Time-->
<div class="modal fade" id="modalEditTime" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">ແກ້ໄຂຂໍ້ມູນເວລາ</h3>
      </div>
	  <form id="edit_time_data" name="edit_time_data" role="form"> <!--Form Edit staff-->
      <div class="modal-body">

	  <div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="unit">ເວລາເລີ່ມ</label>
					<input type="hidden" id="time_id" name="time_id">
					<input type="text" class="form-control" id="edit_time_start" name="edit_time_start" autocomplete="off" >
				
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="unit">ເວລາຊິ້ນສຸດ</label>
					<input type="text" class="form-control" id="edit_time_end" name="edit_time_end" autocomplete="off">
					
				</div>
			</div>
	  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລີກ</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> ບັນທຶກຂໍ້ມູນ</button>
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
        <h3 class="modal-title" id="myModalLabel">ແກ້ໄຂຂໍ້ມູນໂຕະ</h3>
      </div>
	  <form id="edit_OrderType_data" name="edit_OrderType_data" role="form"> <!--Form Edit staff-->
      <div class="modal-body">
        
	  		<div class="form-group">
				<label for="name">ຊື່ ຫລື ຫມາຍເລກໂຕະ</label>
				<input type="hidden" id="edit_order_type_id" name="edit_order_type_id">
				<input type="text" class="form-control" id="edit_orderType_name" name="edit_orderType_name">
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ຍົກເລີກ</button>
        <button type="submit" class="btn btn-primary">ບັນທຶກຂໍ້ມູນ</button>
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
        <h3 class="modal-title" id="myModalLabel">ເພີ່ມສິນຄ້າໃຫມ່</h3>
      </div>
	  <form id="add_product" name="add_product" role="form"> <!--Form Edit staff-->
      <div class="modal-body">

			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<label for="Product Code">ລະຫັດສິນຄ້າ</label>
						<input type="text" class="form-control" id="pro_code" name="pro_code" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="Product Name">ຊື່ສິນຄ້າ</label>
						<input type="text" class="form-control" id="pro_name" name="pro_name" required>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label for="Product Name">ລາຄາສິນຄ້າ</label>
						<input type="text" class="form-control" id="pro_price" name="pro_price" required>
					</div>
				</div>

				

				<div class="col-md-6">
					<div class="form-group">
						<label for="unit">ຫົວຫນ່ວຍສິນຄ້າ:</label>

						

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
						<label for="cat">ປະເພດສິນຄ້າ:</label>
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
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລີກ</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> ບັນທຶກຂໍ້ມູນ</button>
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
        <h3 class="modal-title" id="myModalLabel">ແກ້ໄຂຂໍ້ມູນສິນຄ້າ</h3>
      </div>
	  <form id="edit_product" name="edit_product" role="form"> <!--Form Edit Product-->
      <div class="modal-body">

			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<label for="Product Code">ລະຫັດສິນຄ້າ</label>
						<input type="hidden" id="edit_product_id" name="edit_product_id">
						<input type="text" class="form-control" id="edit_pro_code" name="edit_pro_code" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="Product Name">ຊື່ສິນຄ້າ</label>
						<input type="text" class="form-control" id="edit_pro_name" name="edit_pro_name" required>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label for="Product Name">ລາຄາສິນຄ້າ</label>
						<input type="text" class="form-control" id="edit_pro_price" name="edit_pro_price" required>
					</div>
				</div>

				

				<div class="col-md-6">
					<div class="form-group">
						<label for="unit">ຫນ່ວຍສິນຄ້າ:</label>

						

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
						<label for="cat">ປະເພດສິນຄ້າ:</label>
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
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລີກ</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> ບັນທິນຂໍ້ມູນ</button>
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
        <h3 class="modal-title" id="myModalLabel">ເພີ່ມບິນ</h3>
      </div>
	  <form id="add_bill" name="add_bill" role="form"> <!--Form Edit staff-->
      <div class="modal-body">

			<div class="row">

				<div class="col-md-6">
				<div class="form-group">
						<label for="cat">ຫມາຍເລກໂຕະ :</label>
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
								<option value="">ບໍ່ມີໂຕະວ່າງ</option>
							<?PHP
						}
						?>

						</select>
					</div>
				</div>

			</div>
	  		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລີກ</button>
        <button type="submit" class="btn btn-primary" onclick = "addBill()"><i class="fa fa-floppy-o" aria-hidden="true"></i> ບັນທຶກຂໍ້ມູນ</button>
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
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລີກ</button>
        <button type="submit" class="btn btn-primary" onclick="finalCheckOut(event)"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> ຊຳລະເງິນ</button>
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
        <h4 class="modal-title" id="gridSystemModalLabel">ຈອງເດີ່ນບານ</h4>
      </div>
      <div class="modal-body">
		<div class="row"><!--Open Row-->

		<div class="col-md-4">
			<div class="form-group">
				<label for="date" class="control-label">ເລືອກວັນທີ:</label>
				<input type="text" class="form-control" id="date" style="height:35px" readonly>
			</div>		
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label for="booking_time_select">ເລືອກເວລາ:</label>
				<select class="form-control" id="booking_time_select" onchange="loadStadium()"></select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
			<label for="booking_stadium_select">ເລືອກເດີ່ນ:</label>
			<select class="form-control col-lg-12" id="booking_stadium_select" ></select>
			</div>
		</div>
		
		</div><!--End Row-->


		<div class="row"><!--Open Row-->
		<div class="col-md-6">
			<div class="form-group">
				<label for="name">ຊື່ ຜູ້ຈອງ:</label>
				<input type="text" class="form-control" name="bname" id="bname">
			</div>
		</div>	
		<div class="col-md-6">
			<div class="form-group">
				<label for="phone">ເບີໂທ:</label>
				<input type="text" class="form-control" name="bphone" id="bphone">
			</div>
		</div>	
		</div><!--End Row-->
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລິກ</button>
        <button type="button" class="btn btn-primary" onclick="booking_save()"><i class="fa fa-floppy-o" aria-hidden="true"></i> ບັນທຶກການຈອງ</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!-- Modal Pay Booking -->
<div class="modal fade" id="modalPayBooking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ຈ່າຍເງິນຄ່າເດີ່ນ</h4>
      </div>
      <div class="modal-body">


	  

        <div class="row">
			<div class="col-md-4">
				<span>ຈຳນວນເງິນ: <p style="font-weight: bold; font-size: 250%;" class="modal_booking_price" id="modal_booking_price"></p></span>

				<input type="text" class="form-control" name="priceTopay" id="priceTopay" onkeyup="inputBookingPayment()" placeholder="ປ້ອນຈຳນວນເງິນ">
				<br><span>ເງິນທອນ: </span>
				<p style="font-weight: bold; font-size: 150%; color: green;" class="modal_booking_price" id="modal_booking_price_thone"></p>
				<h4 id="match_free"></h4>
			</div>
			<h3 style="font-weight: bold;">Customer Data</h3><hr>
			<div class="col-md-4" style="border-left: thin solid #009e2f;">
				<p style="color:red;">***(ທີມທີ່ຈອງເດີ່ນ)***</p> <hr>
				<input type="text" class="form-control" name="cphone" id="cphone" placeholder="02059415161">
				<p class="help-block" style="font-size: 0.8em; color:green;">ປ້ອນເບີໂທເພື່ອກວດສອບຈຳນວນນັດທີ່ເຕະ</p> <br/>
					<input type="hidden" id="hidden_member_ids">
					<input type="hidden" id="modal_booking_id">
					<table class="table table-bordered">
						<thead style="font-size: 0.9em;">
							<tr>
								<th>ຊື່ ສະມາຊິກ</th>
								<th>ຈຳນວນນັດທີ່ເຕະ</th>
							</tr>
						</thead>
						
						<tr>
							<tbody style="text-align: center;" id="b_member_b">
								<td id="b_name">-</td>
								<td id="b_number_match">-</td>
							</tbody>
						</tr>
					</table>

			</div>
		
			<div class="col-md-4" style="border-left: thin solid #009e2f; height: 280px">
			<p>**ທີມທີສອງ</p> <hr>
			<input type="text" class="form-control" name="cphone2" id="cphone2"  placeholder="02059415161">
			<p class="help-block" style="font-size: 0.8em; color:green;">ປ້ອນເບີໂທເພື່ອບັນທຶກຈຳນວນນັດທີ່ເຕະ</p> <br/>
			<input type="hidden" id="hidden_member_ids2">
			<table class="table table-bordered">
						<thead style="font-size: 0.9em;">
							<tr>
								<th>ຊື່ ສະມາຊິກ</th>
								<th>ຈຳນວນນັດທີ່ເຕະ</th>
							</tr>
						</thead>
						
						<tr>
							<tbody style="text-align: center;" id="b_member_s">
								<td id="s_name">-</td>
								<td id="s_number_match">-</td>
							</tbody>
						</tr>
					</table>

			</div>

		</div>
		<hr>

		<button class="btn btn-success" id="btnRegisterMember"><i class="fa fa-user-plus" aria-hidden="true"></i> ສະຫມັກສະມາຊິກ</button>

		<div class="regiterMember" style="display: none;"><br>

			<form class="form-inline">
				<div class="form-group ">
					<label class="sr-only" for="name">ຊື່ ຫລື່ ຊື່ທີມ</label>
					<input type="text" class="form-control" id="r_name" name="r_name" placeholder="Name" required>
				</div>
				<div class="form-group warningInput">
					<label class="sr-only" for="r_phone">ເບີໂທ</label>
					<input type="text" class="form-control" id="r_phone" name="r_phone" onkeyup="checkPhone()" placeholder="Phone">
				</div>
				<button type="button" class="btn btn-default btn-lg submit_regitOnpayment" onclick="registOnpayment()"><i class="fa fa-plus-circle" aria-hidden="true"></i> ເພີ່ມ</button>
			</form>
			<div id="warningPhone"></div>
			
		</div>
		

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ຍົກເລິກ</button>
        <button type="button" class="btn btn-primary" onclick="bookPayment()"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> ບັນທຶກການຈ່າຍເງິນ</button>
      </div>
    </div>
  </div>
</div><!--End Modal-->
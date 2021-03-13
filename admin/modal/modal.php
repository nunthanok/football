	
    
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
				<input type="text" class="form-control" id="name" name="name" placeholder="Name">
			</div>
			<div class="form-group">
				<label for="username">Staff Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Username">
			</div>
			<div class="form-group">
				<label for="password">Staff Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Username">
			</div>
			<div class="form-group">
				<label for="phone">Staff Phone</label>
				<input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone">
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
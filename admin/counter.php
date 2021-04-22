<?php

include("session.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Charts</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/sweetalert2.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>

		th,tr{
			font-size: 10px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION["username"]?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li ><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Booking</a></li>
			<li class="active"><a href="counter.php"><em class="fa fa-television">&nbsp;</em>Counter</a></li>
			<li><a href="report.php"><em class="fa fa-bar-chart">&nbsp;</em> Report</a></li>
			<li><a href="member.php"><em class="fa fa-user-o">&nbsp;</em> Member</a></li>
			<li><a href="staff.php"><em class="fa fa-user-secret">&nbsp;</em> Staff</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Product Manager <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="product.php">
						<span class="fa fa-angle-right">&nbsp;</span> Products
					</a></li>
					<li><a class="" href="category.php">
						<span class="fa fa-angle-right">&nbsp;</span> Categories
					</a></li>
					<li><a class="" href="unit.php">
						<span class="fa fa-angle-right">&nbsp;</span> Units
					</a></li>
                    <li><a class="" href="order_type.php">
						<span class="fa fa-angle-right">&nbsp;</span> Order Type
					</a></li>
				</ul>
			</li>


			<!--<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> Members</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li> -->
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li> 
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Counter</li>
			</ol>
		</div><!--/.row-->
		
		
		
		
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="col-md-6">
							Product List
						</div>
						<div class="col-md-6" id="category_counter_content"></div>
						
					</div>
					<div class="panel-body">
						
					<!--Row-->
					<div class="row">

					<div id="product_counter"><!--Show Product On Counter Page--></div>

					</div>
					<!--End Row-->

					<!--Row-->
					<div class="row">
						<div class="col-md-12">

						<div class="panel panel-default">
							<div class="panel-heading">
								Bill List
								<button class="pull-right btn btn-success addBill" data-toggle="modal" data-target="#modalAddbill">Add Bill</button>
							</div>
							<div class="panel-body">
								<div class="row" id="bill_counter_content"></div>
							</div>
							</div>
						</div>

					</div>
					<!--End Row-->





					</div>
				</div>
			</div>
			
			<div class="col-md-4" id="bill_detail_content">
				<div class="panel panel-default">
					<div class="panel-heading">

						<div class="row">
						
							<div class="col-md-4"><span>Bill Detail</span></div>
							<div class="col-md-6">
							<select class="form-control" name="bill_detail_item" id="bill_detail_item" onchange="loadBillDetail()"></select>
							</div>

						</div>
						
					</div>
					<div class="panel-body">
						
						<table class="table table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Name</th>
									<th>QTY</th>
									<th>Unit</th>
									<th>Price</th>
									<th>Total</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody id="bill_detail_list_item"></tbody>
						</table>

						<div class="row">
							<div class="col-md-12">
								<input type="hidden" id="totalValue" />
								<h2 style="text-align:center;"><span class="label label-default" id="total"></span></h2><br>
								<p><button type="button" onclick="payment()" class="btn btn-primary btn-lg btn-block">Checkout</button></p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php include("modal/modal.php"); ?>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sweetalert2.all.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="product_counter.js"></script>
		
</body>
</html>

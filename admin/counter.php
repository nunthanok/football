<?php

include("session.php");
include_once("../variable.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Counter</title>
	<link href="<?php echo $project_path; ?>/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $project_path; ?>/admin/css/sweetalert2.min.css" rel="stylesheet">
	<link href="<?php echo $project_path; ?>/admin/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $project_path; ?>/admin/css/styles.css" rel="stylesheet">
	
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
				<a class="navbar-brand" href="#"><span>ລະບົບຈອງເດີ່ນບານອອນລາຍ</span> | Admin</a>
				
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


		<?php include("sidebar.php")?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ຂໍ້ມູນການຂາຍ</li>
			</ol>
		</div><!--/.row-->
		
		
		
		
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="col-md-6">
							ລາຍການສິນຄ້າ
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
								ລາຍການບິນ
								<button class="pull-right btn btn-success addBill" data-toggle="modal" data-target="#modalAddbill"><i class="fa fa-plus-circle" aria-hidden="true"></i> ເພີ່ມບິນ</button>
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
						
							<div class="col-md-4"><span>ລາຍລະອຽດບິນ</span></div>
							<div class="col-md-6">
							<select class="form-control" name="bill_detail_item" id="bill_detail_item" onchange="loadBillDetail()"></select>
							</div>

						</div>
						
					</div>
					<div class="panel-body">
						
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ລຳດັບ</th>
									<th>ຊື່</th>
									<th>ຈຳນວນ</th>
									<th>ຫນ່ວຍ</th>
									<th>ລາຄາ</th>
									<th>ລວມ</th>
									<th>ລົບ</th>
								</tr>
							</thead>
							<tbody id="bill_detail_list_item"></tbody>
						</table>

						<div class="row">
							<div class="col-md-12">
								<input type="hidden" id="totalValue" />
								<h2 style="text-align:center;"><span class="label label-default" id="total"></span></h2><br>
								<p><button type="button" onclick="payment()" class="btn btn-primary btn-lg btn-block"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> ຈ່າຍເງິນ</button></p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php include("modal/modal.php"); ?>
	<script src="<?php echo $project_path; ?>/admin/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/sweetalert2.all.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/jquery.mask.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/custom.js"></script>
	<script src="product_counter.js"></script>
		
</body>
</html>

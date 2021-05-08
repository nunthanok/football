<?php

include("../../session.php");
include_once("../../../variable.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Report Booking</title>
	<link href="<?php echo $project_path; ?>/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $project_path; ?>/admin/css/jquery-ui.min.css" rel="stylesheet">
	<link href="<?php echo $project_path; ?>/admin/css/font-awesome.min.css" rel="stylesheet">
	<!-- <link href="<?php echo $project_path; ?>/admin/css/datepicker3.css" rel="stylesheet"> -->
	<link href="<?php echo $project_path; ?>/admin/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $project_path; ?>/admin/css/styles.css" rel="stylesheet">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<style>
		td.highlight_success {
			font-weight: bold;
			color: green;
		}
		td.highlight_pending {
			font-weight: bold;
			color: #b5330e;
		}
		td.highlight_reject {
			font-weight: bold;
			color: red;
		}
		.buttons-excel{
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 13px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			border-radius: 5px;
		}
		.buttons-pdf{
			background-color: #f9243f; /* Green */
			border: none;
			color: white;
			padding: 13px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			border-radius: 5px;
		}
		.buttons-print{
			background-color: #30a5ff; /* Green */
			border: none;
			color: white;
			padding: 13px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			border-radius: 5px;
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
	
        <?php include("../../sidebar.php");?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ລາຍງານການຈອງ</li>
			</ol>
		</div><!--/.row-->
		
		
		
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						
						<div class="row">
							<div class="col-lg-12">
								<form class="form-inline pull-right">
								<div class="form-group">
										<label class="sr-only" for="exampleInputPassword3">Date</label>
										<input type="text" class="form-control date_picker" size="40" id="report_booking_date1" placeholder="Date">
									</div>
									<div class="form-group">
										<label class="sr-only" for="exampleInputPassword3">Date</label>
										<input type="text" class="form-control date_picker" size="40" id="report_booking_date2" placeholder="Date">
									</div>
									<button onclick="search_report_booking(event)" class="btn btn-primary btn-lg">ຄົ້ນຫາ</button>
								</form>
							</div>
						</div>
					</div>

					<div class="panel-body">
					<table class="table table-hover table-bordered" id="report_booking_table">
						<thead style="background-color: #30a5ff; color: white;">
							<tr>
								<th style="width:1px">ລຳດັບ</th>
								<th style="width:1px">ເລກທີຈອງ</th>
								<th>ມື້ຈອງ</th>
								<th>ມື້ເຕະ</th>
                                <th>ຊື່ຜຼ້ຈອງ</th>
                                <th>ເບີໂທຜູ້ຈອງ</th>
								<th>ລາຄາ</th>
								<th>ສ່ວນຫລຸດ</th>
                                <th>ລາຍລະອຽດ</th>
								<th>ສະຖານະ</th>
						</thead>
						<tbody id="booking_data"></tbody>
						
                        <footer>
                            <tr>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th>ລວມເງິນ : <span id="report_booking_total"></span></th>
								
							
								<th style="flex-wrap:nowrap; color: green;">ສຳເລັດ: <span id="report_booking_success"></span></th>
								
							
								<th style="flex-wrap:nowrap; color: #ffa500;">ຄ້າງຈ່າຍ: <span id="report_booking_pending"></span> </th>
								
							
								<th style="flex-wrap:nowrap; color: red;;">ຍົກເລີກ: <span id="report_booking_reject"></span> </th>
								
							
								<th style="flex-wrap:nowrap; color: green;">ກຳໄລ: <span id="report_booking_profit"></span> </th>
								
							</tr>
                        </footer>
					</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	  

	<script src="<?php echo $project_path; ?>/admin/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/jquery-ui.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/bootstrap.min.js"></script>
	<!-- <script src="<?php echo $project_path; ?>/admin/js/bootstrap-datepicker.js"></script> -->
	<script src="<?php echo $project_path; ?>/admin/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/dataTables.bootstrap.min.js"></script>

	<script src="<?php echo $project_path; ?>/admin/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/jszip.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/pdfmake.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/vfs_fonts.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/buttons.html5.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/buttons.print.min.js"></script>

	<script src="<?php echo $project_path; ?>/admin/js/jquery.number.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/custom.js"></script>
    <script src="<?php echo $project_path; ?>/admin/js_dev/report/report_booking/report_booking.js"></script>
	
</body>
</html>

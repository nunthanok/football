<?php

include("session.php");
include_once("../variable.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ຈັດການໂຕະ</title>
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
	
	.validateOrderTypename{
  		color: red;
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
				<a class="navbar-brand" href="#"><span>ລະບົບຈອງເດີ່ນບານອອນລາຍ | </span>Admin</a>
				
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

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ຈັດການໂຕະ</li>
			</ol>
		</div><!--/.row-->
		
		
		
		
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="col-md-12">
						<i class="fa fa-plus-circle" aria-hidden="true"></i> ເພີ່ມໂຕະໃຫມ່
						</div>
					</div>
					<div class="panel-body">
						
					<!--Row-->
					<div class="row">

                    <div class="col-md-12">
                    <form id="add_orderType">
                        <div class="form-group">
                            <label for="unit">ຊື່ ຫລື່ ຫມາຍເລກໂຕະ</label>
                            <input type="text" class="form-control" id="order_type_name" name="order_type_name">
							<small id="validate" class="form-text text-muted"></small>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">ເພີ່ມໂຕະ</button>
                    </form>
					</div>
                    

					</div>
					<!--End Row-->

				</div>
			</div>
		</div>


			
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
					<i class="fa fa-list" aria-hidden="true"></i> ລາຍລະອຽດຂໍ້ມູນໂຕະ
                    </div>
					<div class="panel-body">
						
                        <!--Row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div id="table_orderType"></div>
                            </div>
                        </div>
                        <!--End Row-->
						

					</div>
				</div>
			</div>

			

		</div><!--/.row-->

       
	</div>	<!--/.main-->
	  
	<?php include("modal/modal.php"); ?>
	<script src="<?php echo $project_path; ?>/admin/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/sweetalert2.all.min.js"></script>
	<script src="<?php echo $project_path; ?>/admin/js/custom.js"></script>
	<script src="order_type.js"></script>
	
</body>
</html>

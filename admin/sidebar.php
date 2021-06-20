<?PHP
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>
<ul class="nav menu">
			<li class=" <?php echo $project_path."/admin/index.php" == $actual_link ? "active" : ""; ?>">
				<a href="<?php echo $project_path; ?>/admin/index.php"><em class="fa fa-dashboard">&nbsp;</em> ຂໍ້ມູນການຈອງ</a>
			</li>

			<li class="<?php echo $project_path."/admin/counter.php" == $actual_link ? "active" : "" ; ?>">
				<a href="<?php echo $project_path; ?>/admin/counter.php"><em class="fa fa-television">&nbsp;</em> ຂໍ້ມູນການຂາຍ</a>
			</li>

			<li class="<?php echo $actual_link == $project_path."/admin/member.php" ? "active" : "" ?>">
				<a href="<?php echo $project_path; ?>/admin/member.php"><em class="fa fa-user-o">&nbsp;</em> ຂໍ້ມູນສະມາຊິກ</a>
			</li>

			<li class="<?php echo $actual_link == $project_path."/admin/staff.php" ? "active" : "" ?>">
				<a href="<?php echo $project_path; ?>/admin/staff.php"><em class="fa fa-user-secret">&nbsp;</em> ຂໍ້ມູນພະນັກງານ</a>
			</li>

			<li class="<?php echo $actual_link == $project_path."/admin/time.php" ? "active" : "" ?>">
				<a href="<?php echo $project_path; ?>/admin/time.php"><em class="fa fa-clock-o">&nbsp;</em> ຂໍ້ມູນເວລາ</a>
			</li>

			<?php 

				$show_pro_li = "hide";

				if ($actual_link == $project_path."/admin/product.php" ||
					$actual_link == $project_path."/admin/category.php" || 
					$actual_link == $project_path."/admin/unit.php" ||
					$actual_link == $project_path."/admin/order_type.php"
				) {
					$show_pro_li = "show";
				}

			?>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-1" class="<?PHP echo $show_pro_li == "show" ? "" : "collapsed" ?>" aria-expanded="<?PHP echo $show_pro_li == "show" ? "true" : "false" ?>">
				<em class="fa fa-navicon">&nbsp;</em> ຈັດການສິນຄ້າ <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse <?PHP echo $show_pro_li == "show" ? "in" : "" ?> " id="sub-item-1" aria-expanded="<?PHP echo $show_pro_li == "show" ? "true" : "false" ?>">
					<li class="<?php echo $actual_link == $project_path."/admin/product.php" ? "active" : "" ?>">
						<a class="" href="<?php echo $project_path; ?>/admin/product.php">
							<span class="fa fa-angle-right">&nbsp;</span> ສິນຄ້າທັງຫມົດ
						</a>
					</li>

					<li class="<?php echo $actual_link == $project_path."/admin/category.php" ? "active" : "" ?>">
						<a class="" href="<?php echo $project_path; ?>/admin/category.php">
							<span class="fa fa-angle-right">&nbsp;</span> ປະເພດສິນຄ້າ
						</a>
					</li>

					<li class="<?php echo $actual_link == $project_path."/admin/unit.php" ? "active" : "" ?>">
						<a class="" href="<?php echo $project_path; ?>/admin/unit.php">
							<span class="fa fa-angle-right">&nbsp;</span> ຫົວຫນ່ວຍສິນຄ້າ
						</a>
					</li>

                    <li class="<?php echo $actual_link == $project_path."/admin/order_type.php" ? "active" : "" ?>">
						<a class="" href="<?php echo $project_path; ?>/admin/order_type.php">
							<span class="fa fa-angle-right">&nbsp;</span> ຈັດການໂຕະ
						</a>
					</li>
				</ul>
			</li>

			<?php 

				$show = "hide";

				if ($actual_link == $project_path."/admin/report/report_booking/report_booking.php" ||
					$actual_link == $project_path."/admin/report/report_salling/report_salling.php"  
				) {
					$show = "show";
				}
			
			?>

			<li class="parent"><a data-toggle="collapse" href="#sub-item-2" class="<?PHP echo $show == "show" ? "" : "collapsed" ?>" aria-expanded="<?PHP echo $show == "show" ? "true" : "false" ?>">
				<em class="fa fa-pie-chart">&nbsp;</em> ລາຍງານ <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse <?PHP echo $show == "show" ? "in" : "" ?>" id="sub-item-2"aria-expanded="<?PHP echo $show == "show" ? "true" : "false" ?>">
					<li class="<?php echo $actual_link == $project_path."/admin/report/report_booking/report_booking.php" ? "active" : "" ?>">
						<a class="" href="<?php echo $project_path; ?>/admin/report/report_booking/report_booking.php">
							<span class="fa fa-angle-right">&nbsp;</span> ລາຍງານການຈອງ
						</a>
					</li>

					<li class="<?php echo $actual_link == $project_path."/admin/report/report_salling/report_salling.php" ? "active" : "" ?>">
						<a class="" href="<?php echo $project_path; ?>/admin/report/report_salling/report_salling.php">
							<span class="fa fa-angle-right">&nbsp;</span> ລາຍງານການຂາຍ
						</a>
					</li>
				</ul>
			</li>
			<li><a href="<?php echo $project_path; ?>/admin/logout.php"><em class="fa fa-power-off">&nbsp;</em> ອອກຈາກລະບົບ</a></li> 
		</ul>
	</div><!--/.sidebar-->
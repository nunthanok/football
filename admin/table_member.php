
<table class="table table-hover table-bordered" id="member_table">
						<thead style="background-color: #30a5ff; color: white;">
							<tr>
								<th>No.</th>
								<th>Member ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Match QTY</th>
								<th>Register Date</th>
                                <th>Edit</th>
                                <th>Detail</th>
							</tr>
						</thead>
						<tbody>

                        <?php include("../database/connect.php");
                        
                        $sql = "SELECT * FROM members";
                        $result = $conn->query($sql);
                        $no = 1;

                        if($result->num_rows> 0 ){

                            while($row = $result->fetch_assoc()){

                                $timestamp = strtotime($row["mem_date"]);
                        
                        ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $row["mem_id"]?></td>
								<td><?php echo $row["mem_name"]?></td>
                                <td><?php echo $row["mem_phone"]?></td>
                                <td><?php echo $row["mem_match"]?></td>
                                <td><?php echo date('d/m/Y', $timestamp)?></td>
                                <td><button class="btn btn-warning edit_data" data-id="<?php echo $row["mem_id"]?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
                                <td><button class="btn btn-primary"><i class="fa fa-address-card-o" aria-hidden="true"></i> Detail</button></td>
							</tr>

                            <?php } }?>
						</tbody>
					</table>

                 

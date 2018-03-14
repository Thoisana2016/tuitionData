<table id="student_data" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Sl No.</th>
								<th>Name</th>
								<th>Gender</th>
								<th>DOB</th>
								<th>Class</th>
								<th>School</th>
								<th>Father's Name</th>
								<th>Mother's Name</th>
								<th>Address</th>
								<th>Mobile</th>
								<th>Active</th>
								<th>Action</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
						<?php 
						$sql="SELECT `id`, `name`, `father`, `mother`, `address`, `mobile`, `class`,`date`,`gender`, `school`, `isActive`
							 FROM `student_details` WHERE isActive =1";
						$query=$this->db->query($sql);
						
						if($query){
							while ($result = mysql_fetch_array($query->result_id)){
								?>
								<tr>
									<td><?php echo $result['id'];?></td>
									<td><?php echo $result['name'];?></td>
									<td><?php if($result['gender']==1){echo 'Female';} else {echo 'Male';}?></td>
									<td><?php echo $result['date']?></td>
									<td><?php echo $result['class'];?></td>
									<td><?php echo $result['school'];?></td>
									<td><?php echo $result['father'];?></td>
									<td><?php echo $result['mother'];?></td>
									<td><?php echo $result['address'];?></td>
									<td><?php echo $result['mobile'];?></td>
									<td><?php if($result['isActive']== 1){echo "Yes";} else{ echo "no";}?></td>
								    <!--  <td><a href="<?php echo base_url();?>data/delete?value=<?php echo $result['id'];?>"><i style="cursor: pointer" onclick="remove('<?php echo $result['id'];?>')"  class="glyphicon glyphicon-remove"></i></a></td>-->
                   					<td><a href="<?php echo base_url();?>home/edit?v=<?php echo $result['id'];?>"><i style="cursor: pointer"  class="glyphicon glyphicon-pencil"></i></a></td>
                					<td><i style="cursor: pointer" onclick="remove('<?php echo $result['id'];?>')"  class="glyphicon glyphicon-remove"></i></td>
									
								</tr>
								<?php 
							}
						}
						?>
							
						</tbody>
					</table>
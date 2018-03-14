<?php $this->load->view('global/header.php')?>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<?php $this->load->view('global/main_menu.php');?>
		  </div>
		  <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12">
	  				<?php if($this->session->userdata('status')=="Successfully Added!"){
     		
     			$msg=$this->session->userdata('status');
     			?>
     			<div id="success-alert" class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Message: </strong> <?php echo $msg;?>
				</div>
     			<?php 
     			$this->session->set_userdata('status', null);
     		}
     		 if($this->session->userdata('mobile')!= null){
     			
     			$msg=$this->session->userdata('mobile');
     			?>
     			<div id="success-alert" class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Message: </strong> <?php echo $msg;?>
				</div>
     			<?php 
     			$this->session->set_userdata('mobile', null);
     		}
     		?>
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Student Details</div>
					          
					            
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" action="../data/addStudent" method="post" role="form">
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Name</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="fullname" id="fullname" required placeholder=" Full Name">
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">Father's Name </label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="father" name="father" required placeholder="Father's Name">
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">Mother's Name </label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="mother" name="mother" required placeholder="Mother's Name">
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">School </label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="school" name="school" required placeholder="School">
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">Address </label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="address" name="address" required placeholder="Address">
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">Mobile</label>
								    <div class="col-sm-10">
								      <input type="number" class="form-control" id="mobile" name="mobile" required placeholder="Mobile (10 digits only)">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Class</label>
								    <div class="col-sm-10">
								      <div class="bfh-selectbox" data-name=" class" id="class" data-value="1" data-filter="true">
										  <div data-value="1">Class 1</div>
										  <div data-value="2">Class 2</div>
										  <div data-value="3">Class 3</div>
										  <div data-value="4">Class 4</div>
										  <div data-value="5">Class 5</div>
										  <div data-value="6">Class 6</div>
										  <div data-value="7">Class 7</div>
										  <div data-value="8">Class 8</div>
										  <div data-value="9">Class 9</div>
										  <div data-value="10">Class 10</div>
										  <div data-value="11">Class 11</div>
										  <div data-value="12">Class 12</div>
										</div>
								    </div>
								  </div>
								 <div class="form-group">
								    <label class="col-sm-2 control-label">Gender</label>
								    <div class="col-sm-10">
								      <div class="bfh-selectbox" data-name=" gender" id="gender" data-value="3" data-filter="true">
										  <div data-value="1">Female</div>
										  <div data-value="2">Male</div>
										  <div data-value="3">Others</div>
										 
										</div>
								    </div>
								  </div>
								 <div class="form-group">
								 	<label class="col-sm-2 control-label">DOB</label>
								 	<div class="col-sm-10">
			  							<div class="bfh-datepicker" data-name="date" id="date" data-format="y-m-d" data-date="today"></div>
								 </div>
								 </div>
								  
								
								
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">Save</button>
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>	
	  		<!--  Page content -->
		  </div>
		</div>
    </div>

  <?php $this->load->view('global/footer.php');?>
<?php $this->load->view('global/header.php');?>
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <?php 
     		if($this->session->userdata('login')!=null){
     		
     			$msg=$this->session->userdata('login');
     			?>
     			<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Message: </strong> <?php echo $msg;?>
				</div>
     			<?php 
     			$this->session->set_userdata('login', null);
     		}
     		?>
			        <div class="box">
			        
			        <?php echo form_open('data/login')?>
			            <div class="content-wrap">
			                <h6>Sign In</h6>
			               
			                <input class="form-control" type="text" placeholder="Username" name="username" id="username">
			                <input class="form-control" type="password" placeholder="Password" name="password" id="password">
			                <div >
			                     <button type="submit" class="btn btn-primary">Login</button>
			                </div>    
			                         
			            </div>
			            <?php echo form_close();?>
			        </div>

			        
			    </div>
			</div>
		</div>
	</div>



  <?php $this->load->view('global/footer.php');?>
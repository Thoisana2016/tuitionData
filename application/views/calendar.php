<?php $this->load->view('global/header.php')?>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		 <?php $this->load->view('global/main_menu.php')?>
		  </div>
		  <div class="col-md-10">

		  			<div class="content-box-large">
		  				<div class="panel-body">
		  					<div class="row">
		  						
		  						<div class="col-md-12">
		  							<div id='calendar'></div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>


		  </div>
		</div>
    </div>

    <?php $this->load->view('global/footer.php');?>
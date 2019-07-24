<div class="contents">
	<!-- title area -->
	<div class="con-sub-head sp-btn">
      <h5>Leaves</h5>
      <a href="<?= site_url('admin/dashboard'); ?>" id="small-link"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> &nbsp;Go back to Dashboard</a>
  </div>

  <!-- View list div -->
  <div class="row"  >
  	<!-- left table area box-->
  	<div class="box col-md-7 mr-5">
  		<div class="box-head">
  			List
  		</div>
  		<div class="box-body" style="overflow-y: scroll;">
  		<table  id="leave" style="max-height: 400px; overflow-y: scroll;" class="table table-bordered hover table-responsive">
  			<thead class="thead-dark">
  				<tr>
  					<th>SN</th>
  					<th>Leave Name</th>
  					<th>Action</th>
  				</tr>
  			</thead>

  			<!-- table body -->
  			<tbody>
  				<?php $sn =1; ?>
  				<?php foreach ($posts as $value=>$post) { ?>
  					<tr id="<?php echo $post['leave_id']; ?>">
  						<td><?php echo $sn; $sn++ ?></td>
  						<td><?php echo $post['leave_name']; ?></td>
  						<td>
  						 <button class="btn-edit" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                 		 <button class="btn-archive tooltip1" title="Delete" id="<?php echo $post['leave_id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i>
                    		<div class="tooltiptext">
		                      <p>Are you sure?</p>
		                      <span class="tip-can">Cancel</span>
		                      <span class="tip-arch" id="<?php echo $post['leave_id']; ?>" onclick="archiveEmployee(<?php echo $post['leave_id']; ?>)" >Delete</span>
		                    </div>
                  </button></td>
  					</tr>
  				<?php } ?>
  			</tbody>
  		</table>
  		</div>
	</div>
	<!-- left box ends -->

	<!-- right form area -->
  	<div class="box col-md-4">
  		<div class="box-head">
  			Add new Leave Type
  		</div>

  		<div class="box-body">
        <div id="messagediv"> <div id="showmessage"> </div> </div>
  			<form class="form" method="POST" action="">
  				<input type="hidden" name="leave_id" id="leave_id" value="">
  				<div class="form-div">
  					<label>Title</label>
  					<input type="text" name="leave_name" id="leave_name" value="">
  				</div>

  				<div class="sub-can">
              	<input type="button" name="" class="sub" onclick="saveLeave()" value="Save">
	            </div>
  			</form>
  		</div>	
  	</div>
  	<!-- right box ends -->
  </div>
  <!-- upper div ends -->

<!-- for package div -->
  <div class="con-sub-head sp-btn">
      <h5>Packages</h5>
  </div>
  <!-- lower div for packages -->
   <div class="row">
  	<!-- left table area box-->
  	<div class="box col-md-7 mr-5">
  		<div class="box-head">
  			List
  		</div>
  		<div class="box-body">
  		<table id="package" style="max-height: 400px; overflow-y: scroll;"  class="table table-bordered hover table-responsive">
  			<thead class="thead-dark">
  				<tr>
  					<th>SN</th>
  					<th>Package Name</th>
  					<th>Action</th>
  				</tr>
  			</thead>

  			<!-- table body -->
  			<tbody>
  				<?php $sn =1; ?>
  				<?php foreach ($package as $value=>$pkg) { ?>
  					<tr id="<?php echo $pkg['package_id']; ?>">
  						<td><?php echo $sn; $sn++ ?></td>
  						<td><?php echo $pkg['package_name']; ?></td>
  						<td>
  						 <button class="btn-edit" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                 		 <button class="btn-archive tooltip1" title="Delete" id="<?php echo $pkg['package_id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i>
                    		<div class="tooltiptext">
		                      <p>Are you sure?</p>
		                      <span class="tip-can">Cancel</span>
		                      <span class="tip-arch" id="<?php echo $pkg['package_id']; ?>" onclick="archiveEmployee(<?php echo $pkg['package_id']; ?>)" >Delete</span>
		                    </div>
                  </button></td>
  					</tr>
  				<?php } ?>
  			</tbody>
  		</table>
  		</div>
	</div>
	<!-- left box ends -->

	<!-- right form area -->
  	<div class="box col-md-4">
  		<div class="box-head">
  			Create new Package
  		</div>

  		<div class="box-body">
        <div id="messagediv1"> <div id="showmessage1"> </div> </div>
  			<form class="form" method="POST" action="">
  				<input type="hidden" name="package_id" id="package_id">
  				<div class="form-div">
  					<label>Title</label>
  					<input type="text" name="package_name" id="package_name">
  				</div>

  				<div class="form-group row" style="max-height: 300px; overflow-y: scroll;">
  					<div class="col-sm-12" >
  						Select leave type:
  					</div>
  					<?php foreach ($posts as $key => $leave) {?>
  					<div class="col-sm-12 "  >
  					
  			
		  				<div class="custom-control custom-switch">
						  <input type="checkbox" name="leave-list" onchange="toggleLeave(this)" class="custom-control-input" id="<?php echo $leave['leave_name']; ?>">
						  <label class="custom-control-label col-md-8 mb-3" for="<?php echo $leave['leave_name']; ?>"><?php echo $leave['leave_name']; ?></label>
  							<input type="number" min="0"  max="365" disabled="true" style=" width: 5em; height: 2em;" name="days" id="days" >
  					
						</div>
							</div>
  				<?php } ?>
  				</div>
  				<div class="sub-can">
              	<input type="button" name="" class="sub" onclick="savePackage()" value="Save">
            </div>

  			</form>
  			</div>
  		</div>	
  	</div>
  	<!-- right box ends -->
  </div>
  <!-- lower div ends -->


</div>


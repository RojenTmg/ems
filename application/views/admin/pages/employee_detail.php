<div class="contents">
	<div class="emp-detail">
		<a class="float-right" href="http://localhost/ems/admin/employee_list" id="small-link"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> &nbsp;Go back to Employee list</a>
		<div class="detail-head">
			<div class="head-pic">
				<?= img(array('src'=>'assets/images/images.jpg', 'alt'=> 'employee image')); ?>
			</div>


			<div class="head-name">
				<div class="item-1 text-left" ><?php echo $post['first_name'] . ' ' .  $post['middle_name'] . ' ' .  $post['last_name'];  ?></div>
				<div class="item-2 text-left"><?php echo $post['department_name']; ?></div>
		</div>

		</div>
		<!-- profile pic ends here -->

		<!-- details starts here -->
<div class="row">
	<!-- basic info starts -->
	<div class="column col-md-4">
		<div class="column">

			<div class="card">
		<h5 class="card-header text-center alert alert-dark">Basic Info</h5>
		<div class="card-body">
			<div class="body-row ">

				<div class="item-1 text-left">Id</div>
				<div class="item-2 text-left"><?php echo $post['emp_id']; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1 text-left" >Title</div>
				<div class="item-2 text-left"><?php echo $post['title']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >First Name</div>
				<div class="item-2 text-left"><?php echo $post['first_name']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Middle Name</div>
				<div class="item-2 text-left"><?php echo $post['middle_name']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Surname</div>
				<div class="item-2 text-left"><?php echo $post['last_name']; ?></div>
			</div>

				<div class="body-row ">
				<div class="item-1 text-left" >Gender</div>
				<div class="item-2 text-left"><?php echo $post['gender']; ?></div>
			</div>

				<div class="body-row ">
				<div class="item-1 text-left" >Date of birth</div>
				<div class="item-2 text-left"><?php echo $post['dob']; ?></div>
			</div>



			<div class="body-row ">
				<div class="item-1 text-left" >Permanent Address</div>
				<div class="item-2 text-left"><?php if (!empty($post['p_street'])) echo $post['p_street'] . ', '; 
									      if (!empty($post['p_municipality'])) echo $post['p_municipality'] . ', ';
									      if (!empty($post['p_district'])) echo $post['p_district'] . ', ';
									      if (!empty($post['p_state'])) echo $post['p_state'] . ', ';
									      if (!empty($post['p_country'])) echo $post['p_country'] ; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1 text-left" >Temporary Address</div>
				<div class="item-2 text-left"><?php if (!empty($post['t_street'])) echo $post['t_street'] . ', '; 
									      if (!empty($post['t_municipality'])) echo $post['t_municipality'] . ', ';
									      if (!empty($post['t_district'])) echo $post['t_district'] . ', ';
									      if (!empty($post['t_state'])) echo $post['t_state'] . ', ';
									      if (!empty($post['t_country'])) echo $post['t_country']; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1 text-left" >Home Phone</div>
				<div class="item-2 text-left"><?php echo $post['home_phone']; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1 text-left" >Mobile Phone</div>
				<div class="item-2 text-left"><?php echo $post['mobile_phone']; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1 text-left" >Other Phones</div>
				<div class="item-2 text-left"><?php if (!empty($post['other_phone1'])) echo $post['other_phone1'] . ', '; 
									      if (!empty($post['other_phone2'])) echo $post['other_phone2'] . ', ';
									      if (!empty($post['other_phone3'])) echo $post['other_phone3'] ; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1 text-left" >Email Id</div>
				<!-- <div class="item-2 text-left"><?php echo $post['email']; ?></div> -->
				<div class="item-2 text-left"><?php echo $post['email']; ?></div>
			</div>

			</div>
		</div>
	</div>
	<!-- basic info ends -->	
	<!-- education -->
		<div class="column ">
			<div class="card">
			<h5 class="card-header text-center alert alert-dark">Education</h5>	
			<div class="card-body">
			<div class="body-row ">
				<div class="item-1 text-left" >Highest Degree</div>
				<div class="item-2 text-left"><?php echo $post['highest_degree']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Degree Title</div>
				<div class="item-2 text-left"><?php echo $post['degree_title']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >University</div>
				<div class="item-2 text-left"><?php echo $post['university']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Institute</div>
				<div class="item-2 text-left"><?php echo $post['institute']; ?></div>
			</div>
		</div>
		</div>
	</div>

<!-- col1 end -->
<!-- education ends here -->

</div> 


<div class="column col-md-4">
	
			<!-- Nationality -->
			<div class="column">
			<div class="card">
				<h5 class="card-header text-center alert alert-dark">Nationality</h5>
			<div class="card-body">
			<div class="body-row ">
				<div class="item-1 text-left" >Nationality</div>
				<div class="item-2 text-left"><?php echo $post['nationality']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Visa Permission</div>
				<div class="item-2 text-left"><?php echo $post['visa_permission']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Visa Type</div>
				<div class="item-2 text-left"><?php echo $post['visa_type']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Visa Expiry Date</div>
				<div class="item-2 text-left"><?php echo $post['visa_expiry_date']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Passport No.</div>
				<div class="item-2 text-left"><?php echo $post['passport_no']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Place of Issue</div>
				<div class="item-2 text-left"><?php echo $post['passport_issue_place']; ?></div>
			</div>
		</div>

		</div>
		</div>
<!-- nationality ends  -->



				<!-- Emergency contact -->

		<div class="column ">
				<div class="card">
			<h5 class="card-header text-center alert alert-dark">Emergency Contact</h5>
			<div class="card-body">
			<div class="body-row ">
				<div class="item-1 text-left">Name</div>
				<div class="item-2"><?php echo $post['e_name']; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1 text-left">Relation</div>
				<div class="item-2"><?php echo $post['e_relation']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left">Contact</div>
				<div class="item-2"><?php echo $post['e_phone']; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1 text-left">Address</div>
				<div class="item-2"><?php echo $post['e_address']; ?></div>
			</div>
		</div>
		</div>
</div>	

	<!-- emergency ends here -->
<!-- health starts here -->
<div class="column ">
				<div class="card">
	<h5 class="card-header text-center alert alert-dark">Health</h5>
	<div class="card-body">
			<div class="body-row ">
				<div class="item-1 text-left" >Blood Group</div>
				<div class="item-2 text-left"><?php echo $post['blood_group']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Medical Complications</div>
				<div class="item-2 text-left"><?php echo $post['medical_complications']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Regular Medication</div>
				<div class="item-2 text-left"><?php echo $post['regular_medication']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Allergies</div>
				<div class="item-2 text-left"><?php echo $post['allergies']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1 text-left" >Allergy Description</div>
				<div class="item-2 text-left"><?php echo $post['allergy_description']; ?></div>
			</div>
		</div>
		</div>
	</div>
		<!-- health ends here -->


		
</div>

<div class="column col-md-4">
	<!-- works -->
			<div class="column">
				<div class="card">
				<h5 class="card-header text-center alert alert-dark">Work Experience</h5>
				<div class="card-body">
				<div class="body-row ">
					<div class="item-1 text-left" >Organization</div>
					<div class="item-2 text-left"><?php echo $post['previous_employer']; ?></div>
				</div>
				<div class="body-row ">
					<div class="item-1 text-left" >Responsibility</div>
					<div class="item-2 text-left"><?php echo $post['previous_employer']; ?></div>
				</div>

				<div class="body-row ">
					<div class="item-1 text-left" >Contact Person</div>
					<div class="item-2 text-left"><?php echo $post['previous_employer']; ?></div>
				</div>

				<div class="body-row ">
					<div class="item-1 text-left" >Contact No.</div>
					<div class="item-2 text-left"><?php echo $post['previous_employer']; ?></div>
				</div>

				<div class="body-row ">
					<div class="item-1 text-left" >Contact Address</div>
					<div class="item-2 text-left"><?php echo $post['previous_employer']; ?></div>
				</div>

				<div class="body-row ">
					<div class="item-1 text-left" >Time</div>
					<div class="item-2 text-left"><?php echo $post['previous_employer']; ?></div>
				</div>
			</div>
			</div>
</div>
		<!-- work ends here  -->

		<!-- pan -->
		<div class="column ">
				<div class="card">
			<h5 class="card-header text-center alert alert-dark">PAN</h5>
			<div class="card-body">
			<div class="body-row ">
				<div class="item-1 text-left" >PAN</div>
				<div class="item-2 text-left"><?php echo $post['pan']; ?></div>
			</div>
		</div>
		</div>
	</div>
		<!-- pan ends here -->
		
		</div>
	</div>
	</div>
	</div>
</div>
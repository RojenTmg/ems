<div class="contents">
	<div class="emp-detail">
		<div class="detail-head">
			<div class="head-pic">
				<?= img(array('src'=>'assets/images/default.png', 'alt'=> 'employee image')); ?>
			</div>


			<div class="head-name">
				<div class="item-1"><?php echo $post['first_name'] . ' ' .  $post['middle_name'] . ' ' .  $post['last_name'];  ?></div>
				<div class="item-2"><?php echo $post['department_id']; ?></div>
		</div>

		</div>
		<div class="detail-body">
					<div class="basic-info">
				<p class="title-1">Basic Info</p>
			<div class="body-row">
				<div class="item-1">Id</div>
				<div class="item-2"><?php echo $post['emp_id']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Title</div>
				<div class="item-2"><?php echo $post['title']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">First Name</div>
				<div class="item-2"><?php echo $post['first_name']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Middle Name</div>
				<div class="item-2"><?php echo $post['middle_name']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Surname</div>
				<div class="item-2"><?php echo $post['last_name']; ?></div>
			</div>
		</div>
		<!-- basic info ends -->
<!-- 			<div class="body-row">
				<div class="item-1">Created By</div>
				<div class="item-2"><?php echo $post['created_by']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Modified By</div>
				<div class="item-2"><?php echo $post['modified_by']; ?></div>
			</div> -->

			<!-- Nationality -->
			<div class="panel panel-info">
				<p>Nationality</p>
			<div class="body-row">
				<div class="item-1">Nationality</div>
				<div class="item-2"><?php echo $post['nationality']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Visa Permission</div>
				<div class="item-2"><?php echo $post['visa_permission']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Visa Type</div>
				<div class="item-2"><?php echo $post['visa_type']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Visa Expiry Date</div>
				<div class="item-2"><?php echo $post['visa_expiry_date']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Passport No.</div>
				<div class="item-2"><?php echo $post['passport_no']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Place of Issue</div>
				<div class="item-2"><?php echo $post['passport_issue_place']; ?></div>
			</div>

		</div>

		<div class="education">
			<p class="title">Education</p>	
			<div class="body-row">
				<div class="item-1">Highest Degree</div>
				<div class="item-2"><?php echo $post['highest_degree']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Degree Title</div>
				<div class="item-2"><?php echo $post['degree_title']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">University</div>
				<div class="item-2"><?php echo $post['university']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Institute</div>
				<div class="item-2"><?php echo $post['institute']; ?></div>
			</div>
		</div>
<!-- education ends here -->

<!-- works -->
		<div class="work">
			<p class="alert alert-info">Work Experience</p>
			<div class="body-row">
				<div class="item-1">Previous Employer</div>
				<div class="item-2"><?php echo $post['previous_employer']; ?></div>
			</div>

		</div>
		
<div class="health">
	<p class="alert alert-info">Health</p>
			<div class="body-row">
				<div class="item-1">Blood Group</div>
				<div class="item-2"><?php echo $post['blood_group']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Medical Complications</div>
				<div class="item-2"><?php echo $post['medical_complications']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Regular Medication</div>
				<div class="item-2"><?php echo $post['regular_medication']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Allergies</div>
				<div class="item-2"><?php echo $post['allergies']; ?></div>
			</div>
			<div class="body-row">
				<div class="item-1">Allergy Description</div>
				<div class="item-2"><?php echo $post['allergy_description']; ?></div>
			</div>
		</div>
		<!-- health ends here -->

		<!-- pan -->
		<div class="pan">
			<p class="alert alert-info">PAN</p>
			<div class="body-row">
				<div class="item-1">PAN</div>
				<div class="item-2"><?php echo $post['pan']; ?></div>
			</div>
		</div>

		</div>
	</div>
</div>
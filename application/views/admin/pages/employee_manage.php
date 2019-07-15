 <!-- unset the existing session in the reload of page -->
     <?php 
     $updating=false;
      if($this->uri->segment(3))
     {
      $updating=true;
        $_SESSION['current_employee_id']=$this->uri->segment(3);       
     }
      else{
        if (isset($_SESSION['current_employee_id'])) {
             unset($_SESSION['current_employee_id']); 
      }
      }
      ?>
      
 <!-- form -->
  <div class="contents">
    <!-- title -->
    <div class="con-head sp-btn">
      <h4>Manage Staff</h4>
      <a href="<?= site_url('admin/dashboard'); ?>" id="small-link"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> &nbsp;Go back to Dashboard</a>
    </div>
     <!-- progress-bar -->
     <div class="box profile-progress">
       <div class="box-head pro-head sp-btn " >
     <!-- show name above the progress bar and DONE button added -->
          <p id="current_employee_name"><?php if(isset($post['title'])) echo $post['title'] . '. '; if(isset($post['first_name'])) echo $post['first_name'] . ' '; if(isset($post['middle_name'])) echo $post['middle_name'] . ' '; if(isset($post['last_name'])) echo $post['last_name']; ?></p> 
          <!-- button -->

             <input id="done-btn" class="float-right btn btn-success" type="button" name="done" value="Add Staff" onclick="location = '<?= site_url('admin/employee_manage'); ?>'">

        </div>
        <div id="progress-bar-body" style="display: none" class="box-body">
            <p id="completedPercent">
              <!-- show percentage completed here -->
            </p>
          <div class="pro-bar">
            <div class="bar-completed progress-bar-striped progress-bar-animated" id="bar"></div>
          </div>  
        </div>
     </div>

     <!-- nav-tab-form -->
     <nav>
       <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <!-- general tab -->

        <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>
 
         <!-- personal details tab -->
        <a class="nav-item nav-link" id="nav-personal-tab" data-toggle="tab" href="#nav-personal" role="tab" aria-controls="nav-personal" aria-selected="false">Personal Details &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>


        <!-- added address tab -->
        <a class="nav-item nav-link" id="nav-address-tab" data-toggle="tab" href="#nav-address" role="tab" aria-controls="nav-address" aria-selected="false">Address &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>

        <!-- contact tab -->
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>

        <!-- nationality tab -->
        <a class="nav-item nav-link" id="nav-nationality-tab" data-toggle="tab" href="#nav-nationality" role="tab" aria-controls="nav-nationality" aria-selected="false">Nationality &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>

        <!-- emergency tab -->
        <a class="nav-item nav-link" id="nav-eContact-tab" data-toggle="tab" href="#nav-eContact" role="tab" aria-controls="nav-eContact" aria-selected="false">Emergency Contact &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>

        <!-- education tab -->
        <a class="nav-item nav-link" id="nav-education-tab" data-toggle="tab" href="#nav-education" role="tab" aria-controls="nav-education" aria-selected="false">Education &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>

        <!-- health tab -->
        <a class="nav-item nav-link" id="nav-health-tab" data-toggle="tab" href="#nav-health" role="tab" aria-controls="nav-health" aria-selected="false">Health &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>

        <!-- pan tab -->
        <a class="nav-item nav-link" id="nav-pan-tab" data-toggle="tab" href="#nav-pan" role="tab" aria-controls="nav-pan" aria-selected="false">PAN &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>

        <!-- work tab -->
        <a class="nav-item nav-link" id="nav-work-tab" data-toggle="tab" href="#nav-work" role="tab" aria-controls="nav-work" aria-selected="false">Work Experience &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a> 

        <!--document tab  -->
        <a class="nav-item nav-link" id="nav-document-tab" data-toggle="tab" href="#nav-document" role="tab" aria-controls="nav-document" aria-selected="false">Documents &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>
        <!--TAB ENDS  -->
      </div>
    </nav>
    <div class="message-div">
      <div id="message" class="message" style="display: none;">
        <!-- add edit message displayed here -->
       </div>
    </div>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
        <form class="form" id="general-form">
          <div class="form-div">
            <label>Title</label>
            <select name="title" id="title">
              <option value="Mr" <?php if(isset($post['title'])) { if ($post['title'] == 'Mr') { echo "selected"; }} ?>>Mr</option>
              <option value="Ms" <?php if(isset($post['title'])) { if ($post['title'] == 'Ms') { echo "selected"; }} ?>>Ms</option>
              <option value="Mrs" <?php if(isset($post['title'])) { if ($post['title'] == 'Mrs') { echo "selected"; }} ?>>Mrs</option>
              <option value="Dr" <?php if(isset($post['title'])) { if ($post['title'] == 'Dr') { echo "selected"; }} ?>>Dr</option>
            </select>
          </div>

          <div class="form-div">
            <label>First Name<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="first_name" placeholder=""  value="<?php if(isset($post['first_name'])) echo $post['first_name']; ?>" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
          </div>
          <div class="form-div">
            <label>Middle Name  <span class="opt"><i>(Optional)</i></span></label>
            <input type="text" id="middle_name" placeholder=""  value="<?php if(isset($post['middle_name'])) echo $post['middle_name']; ?>" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
          </div>
          <div class="form-div">
            <label>Last Name<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="last_name" placeholder=""  value="<?php if(isset($post['last_name'])) echo $post['last_name']; ?>" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
          </div>
          <!-- date of join added -->
          <div class="form-div">
            <label>Date of Join<span class="text-danger"><i>*</i></span></label>
            <!-- date -->
            <div class="row">
            <select name="day" id="day" class="col-md-1 mr-5 ml-3 ">
        <?php 
          $start_date = 1;
          $end_date   = 31;
          for( $j=$start_date; $j<=$end_date; $j++ ) {
          ?>
            <option value=<?php echo $j;?><?php if(isset($post['join_date'])) { if (date("d", strtotime($post['join_date'])) == $j) { echo ' selected'; }}?>><?php echo $j; ?></option>
          <?php
          }
        ?>
      </select>
      <!-- month -->
             <select id="month"   name="month"  class="col-md-2 mr-5" /> 
                <option value="1" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '01') { echo 'selected'; }} ?>>January</option>       
                <option value="2" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '02') { echo 'selected'; }} ?>>February</option>       
                <option value="3" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '03') { echo 'selected'; }} ?>>March</option>       
                <option value="4" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '04') { echo 'selected'; }} ?> >April</option>       
                <option value="5" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '05') { echo 'selected'; }} ?>>May</option>       
                <option value="6" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '06') { echo 'selected'; }} ?>>June</option>       
                <option value="7" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '07') { echo 'selected'; }} ?>>July</option>       
                <option value="8" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '08') { echo 'selected'; }} ?>>August</option>       
                <option value="9" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '09') { echo 'selected'; }} ?>>September</option>       
                <option value="10" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '10') { echo 'selected'; }} ?>>October</option>       
                <option value="11" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '11') { echo 'selected'; }} ?>>November</option>       
                <option value="12" <?php if(isset($post['join_date'])) { if ( date("m", strtotime($post['join_date'])) == '12') { echo 'selected'; }} ?>>December</option>       
              </select>
            <!-- year -->
             <select id="year" name="year " class="col-md-1">
        <?php 
          $year = date('Y');
          $min = $year - 60;
          $max = $year;
          for( $i=$max; $i>=$min; $i-- ) {
          ?>
           <option value=<?php echo $i;?><?php if(isset($post['join_date'])) { if (date("Y", strtotime($post['join_date'])) == $i) { echo ' selected'; }}?>><?php echo $i; ?></option>
          <?php
          }
        ?>
      </select>
      </div>
          </div>
          <div class="sub-can">
             <input type="button" id="generalButton" <?php if($updating==false){ echo 'onclick="addGeneral()"'; echo 'value="Submit"';} else {echo 'onclick="updateGeneral()"'; echo 'value="Update"'; }?> class="sub"  name="submit-general">
          </div>
        </form>
      </div>
      <!-- general ends -->

      <!-- personal details starts here -->
      <div class="tab-pane fade" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
        <form class="form" id="personal-form">
          <div class="form-div">
            <label>Gender</label>
            <select id="gender">
              <option value="Male" <?php if(isset($post['gender'])) { if ($post['gender'] == 'Male') { echo "selected"; }} ?>>Male</option>
              <option value="Female" <?php if(isset($post['gender'])) { if ($post['gender'] == 'Female') { echo "selected"; }} ?>>Female</option>
              <option value="Others" <?php if(isset($post['gender'])) { if ($post['gender'] == 'Others') { echo "selected"; }} ?>>Others</option>
            </select>
          </div> 

          <div class="form-div">
            <label>Date of Birth<span class="text-danger"><i>*</i></span></label>
             <!-- date -->
            <div class="row">
            <select name="day" id="birth_day" class="col-md-1 mr-5 ml-3 ">
        <?php 
          $start_date = 1;
          $end_date   = 31;
          for( $j=$start_date; $j<=$end_date; $j++ ) {
          ?>
            <option value=<?php echo $j;?><?php if(isset($post['dob'])) { if (date("d", strtotime($post['dob'])) == $j) { echo ' selected'; }}?>><?php echo $j; ?></option>
          <?php
          }
        ?>
      </select>
      <!-- month -->
             <select id="birth_month"   name="month"  class="col-md-2 mr-5" /> 
                <option value="1" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '01') { echo 'selected'; }} ?>>January</option>       
                <option value="2" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '02') { echo 'selected'; }} ?>>February</option>       
                <option value="3" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '03') { echo 'selected'; }} ?>>March</option>       
                <option value="4" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '04') { echo 'selected'; }} ?> >April</option>       
                <option value="5" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '05') { echo 'selected'; }} ?>>May</option>       
                <option value="6" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '06') { echo 'selected'; }} ?>>June</option>       
                <option value="7" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '07') { echo 'selected'; }} ?>>July</option>       
                <option value="8" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '08') { echo 'selected'; }} ?>>August</option>       
                <option value="9" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '09') { echo 'selected'; }} ?>>September</option>       
                <option value="10" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '10') { echo 'selected'; }} ?>>October</option>       
                <option value="11" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '11') { echo 'selected'; }} ?>>November</option>       
                <option value="12" <?php if(isset($post['dob'])) { if ( date("m", strtotime($post['dob'])) == '12') { echo 'selected'; }} ?>>December</option>         
              </select>
            <!-- year -->
             <select id="birth_year" name="year " class="col-md-1">
        <?php 
          $year = date('Y');
          $min = $year - 60;
          $max = $year;
          for( $i=$max; $i>=$min; $i-- ) {
          ?>
           <option value=<?php echo $i;?><?php if(isset($post['dob'])) { if (date("Y", strtotime($post['dob'])) == $i) { echo ' selected'; }}?>><?php echo $i; ?></option>
          <?php
          }
        ?>
      </select>
      </div>
          </div>

          <div class="form-div">
            <label>Email</label>
            <input type="email" value="<?php if(isset($post['email'])) echo $post['email']; ?>" id="email" placeholder="">
          </div>

          <div class="sub-can">
            <input type="button" onclick="addPersonalInformation()" name="" value="Submit" class="sub">
          
          </div>
        </form>
      </div>
      <!-- personal details ends here -->


      <!-- address changes-->
      <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">
        <form class="form" id="address-form">
            <p class="title">Permanent Address  <span class="opt"><i>(As per citizenship)</i></span></p>
            <div class="form-group add-frm-grp">
              <input type="text" id="permanentaddress_street" value="<?php if(isset($post['p_street'])) echo $post['p_street']; ?>" placeholder="Street" class="form-group col-md-3">
              <input type="text" id="permanentaddress_municipality" value="<?php if(isset($post['p_municipality'])) echo $post['p_municipality']; ?>" placeholder="Municipality" class="form-group col-md-3">
              <input type="text" id="permanentaddress_district" value="<?php if(isset($post['p_district'])) echo $post['p_district']; ?>" placeholder="District" class="form-group col-md-3">
              <input type="text" id="permanentaddress_state" value="<?php if(isset($post['p_state'])) echo $post['p_state']; ?>" placeholder="State" class="form-group col-md-3">
            <!-- country will be a dropdown -->
              <select id="permanentaddress_country" value="<?php if(isset($post['p_country'])) echo $post['p_country']; ?>" class="form-group col-md-3">
                <?php 
                require 'assets/addresses/country_list.php';
                ?>
              </select>
          </div>
          <div class="form-group">
            <p class="title">Current Address<span class="text-danger"><i>*</i></span></p>
            <input type="text" id="currentaddress_street" value="<?php if(isset($post['t_street'])) echo $post['t_street']; ?>" placeholder="Street" class="form-group col-md-3">
            <input type="text" id="currentaddress_municipality" value="<?php if(isset($post['t_municipality'])) echo $post['t_municipality']; ?>" placeholder="Municipality" class="form-group col-md-3">
            <input type="text" id="currentaddress_district" value="<?php if(isset($post['t_district'])) echo $post['t_district']; ?>" placeholder="District" class="form-group col-md-3">

              <select name="currentaddress_state" id="currentaddress_state" class="form-group col-md-3">
              <option value="Province 1" <?php if(isset($post['t_state'])) { if ($post['t_state'] == 'Province 1') { echo "selected"; }} ?>>Province 1</option>
              <option value="Province 2" <?php if(isset($post['t_state'])) { if ($post['t_state'] == 'Province 2') { echo "selected"; }} ?>>Province 2</option>
              <option value="Province 3" <?php if(isset($post['t_state'])) { if ($post['t_state'] == 'Province 3') { echo "selected"; }} ?>>Province 3</option>
              <option value="Province 4" <?php if(isset($post['t_state'])) { if ($post['t_state'] == 'Province 4') { echo "selected"; }} ?>>Province 4</option>
              <option value="Province 5" <?php if(isset($post['t_state'])) { if ($post['t_state'] == 'Province 5') { echo "selected"; }} ?>>Province 5</option>
              <option value="Province 6" <?php if(isset($post['t_state'])) { if ($post['t_state'] == 'Province 6') { echo "selected"; }} ?>>Province 6</option>
              <option value="Province 7" <?php if(isset($post['t_state'])) { if ($post['t_state'] == 'Province 7s') { echo "selected"; }} ?>>Province 7</option>

            </select>
          </div>
          <div class="sub-can">
            <input type="button" onclick="addAddress()" name="" value="Submit" class="sub">
            
          </div>
        </form>
      </div>
      <!-- address ends -->

      <!-- contact changes -->
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <form class="form" id="contact-form">

            <div class="form-div">
            <label>Home Phone </label>
            <input type="text" id="home_phone"  value="<?php if(isset($post['home_phone'])) echo $post['home_phone']; ?>" placeholder="">
          </div>

             <div class="form-div">
            <label>Mobile Phone<span class="opt text-danger"><i>*</i></span></label>
            <input type="text" id="mobile_phone"  value="<?php if(isset($post['mobile_phone'])) echo $post['mobile_phone']; ?>" placeholder="">
          </div>

          <div class="form-group">
            <p>Other Phone</p>
            <input type="text" id="other_phone1" value="<?php if(isset($post['other_phone1'])) echo $post['other_phone1']; ?>" placeholder="Phone 1" class="form-group col-md-3">
            <input type="text" id="other_phone2" value="<?php if(isset($post['other_phone2'])) echo $post['other_phone2']; ?>" placeholder="Phone 2" class="form-group col-md-3">
            <input type="text" id="other_phone3" value="<?php if(isset($post['other_phone3'])) echo $post['other_phone3']; ?>" placeholder="Phone 3" class="form-group col-md-3">
          </div>

          <div class="sub-can">
            <input type="button" onclick="addContact()" name="" value="Submit" class="sub">
            
          </div>
        </form>
      </div>
      <!-- contact ends -->

      <!-- Nationality changes -->
      <div class="tab-pane fade" id="nav-nationality" role="tabpanel" aria-labelledby="nav-nationality-tab">
        <form name="nationality-tab" id="nationality-form" class="form">
          <div class="form-div">
            <label>Nationality<span class="text-danger"><i>*</i></span></label>
            <div>
              <div>
                <input type="radio" name="nationality" value="Nepalese" onchange="showHideVisa(this)" <?php if(isset($post['nationality'])) { if ($post['nationality'] == 'Nepalese') { echo "checked"; }} else { echo "checked";} ?>>
                <label>Nepalese</label>
              </div>
              <div>
                <input type="radio" name="nationality" value="Non-Nepalese" onchange="showHideVisa(this)" <?php if(isset($post['nationality'])) { if ($post['nationality'] == 'Non-Nepalese') { echo "checked"; }} ?>>
                <label>Non-Nepalese</label>
              </div>
            </div>
          </div>

          <!-- non nepalese div -->
           <div id="non_nepali"  <?php if(isset($post['nationality'])&&$post['nationality']=='Non-Nepalese') echo 'style="display: block;"'; else echo 'style="display: none;"'; ?>  >
          <div class="form-div">
            <label>If Non-Nepalese, do you have a visa/permission/right to work in Nepal?</label>
            <div>
              <input type="radio"  value="Yes" name="visa_permission" <?php if(isset($post['visa_permission'])) { if ($post['visa_permission'] == 'Yes') { echo "checked"; }} ?>>
              <label>Yes</label>
            </div>
            <div>
              <input type="radio" value="No" name="visa_permission" <?php if(isset($post['visa_permission'])) { if ($post['visa_permission'] == 'No') { echo "checked"; }} else { echo "checked";} ?>>
              <label>No</label>
            </div>
          </div>

            <div class="form-group">
            <p class="title">If yes, please specify your visa type and visa expiry date </p>
            <input type="text" id="visa_type" value="<?php if(isset($post['visa_type'])) echo $post['visa_type']; ?>" placeholder="Visa Type" class="col-md-3">
            <input type="date" id="visa_expiry_date" value="<?php if(isset($post['visa_expiry_date'])) echo $post['visa_expiry_date']; else echo date('Y-m-d'); ?>" placeholder="Visa End Date" min="<?php echo date('Y-m-d');?>" class="col-md-3">
          </div>

        </div>
          <!-- changes in passport details -->
          <div class="form-div">
            <label>Citizenship/Passport No.<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="passport_no" value="<?php if(isset($post['passport_no'])) echo $post['passport_no'];?>" placeholder="">
          </div>

              <div class="form-div">
            <label>Place of Issue<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="passport_issue_place" value="<?php if(isset($post['passport_issue_place'])) echo $post['passport_issue_place'];?>" placeholder="">
          </div>


          <div class="sub-can">
            <input type="button" onclick="addNationality()" name="" value="Submit" class="sub">
            
          </div>
        </form>
      </div>
      <!-- nationality ends -->

      <!-- Emergency contact form -->
      <div class="tab-pane fade show" id="nav-eContact" role="tabpanel" aria-labelledby="nav-eContact-tab">
        <form class="form" id="emergency-form">
          <div class="form-div">
            <label>Name<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="e_name" value="<?php if(isset($post['e_name'])) echo $post['e_name'];?>" placeholder="">
          </div>
          <div class="form-div">
            <label>Relation<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="e_relation" value="<?php if(isset($post['e_relation'])) echo $post['e_relation'];?>" placeholder="">
          </div>

          <div class="form-div">
            <label>Address</label>
            <textarea id="e_address"><?php if(isset($post['e_address'])) echo $post['e_address'];?></textarea>
          </div>
          <div class="form-div">
            <label>Phone No.<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="e_phone" value="<?php if(isset($post['e_phone'])) echo $post['e_phone'];?>" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addEmergency()" name="" value="Submit" class="sub">
            
          </div>
        </form>
      </div>
      <!-- emergency ends -->

      <!-- Education -->
      <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
        <form class="form" id="education-form">
          <div class="form-div">
            <label>Highest Education Degree<span class="text-danger"><i>*</i></span></label>
            <select id="highest_degree">  
              <option value="None" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'None') { echo "selected"; }} ?>>None</option>        
              <option value="PhD" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'PhD') { echo "selected"; }} ?>>PhD</option>
              <option value="Master" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'Master') { echo "selected"; }} ?>>Master</option>
              <option value="Bachelor" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'Bachelor') { echo "selected"; }} ?>>Bachelor</option>
              <option value="High School" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'High School') { echo "selected"; }} ?>>High School</option>
              <option value="Middle School" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'Middle School') { echo "selected"; }} ?>>Middle School</option>
            </div>      </select>
          </div>
          <div class="form-div">
            <label>Degree Title</label>
            <input type="text" id="degree_title" value="<?php if(isset($post['degree_title'])) echo $post['degree_title'];?>" placeholder="">
          </div>
          <div class="form-div">
            <label>University</label>
            <input type="text" id="university" value="<?php if(isset($post['university'])) echo $post['university'];?>" placeholder="">
          </div>
          <div class="form-div">
            <label>Institute<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="institute" value="<?php if(isset($post['institute'])) echo $post['institute'];?>" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addEducation()" name="" value="Submit" class="sub">
            
          </div>
        </form>
      </div>
      <!-- education ends -->

      <!-- health info -->
      <div class="tab-pane fade" id="nav-health" role="tabpanel" aria-labelledby="nav-health-tab">
        <form class="form" id="health-form">
          <div class="form-div">

            <div class="form-div">
              <label>Blood Group</label>
              <select id="blood_group">
                <option value="A +ve" <?php if(isset($post['blood_group'])) { if ($post['blood_group'] == 'A +ve') { echo "selected"; }} ?>>A +ve</option>
                <option value="A -ve" <?php if(isset($post['blood_group'])) { if ($post['blood_group'] == 'A -ve') { echo "selected"; }} ?>>A -ve</option>
                <option value="B +ve" <?php if(isset($post['blood_group'])) { if ($post['blood_group'] == 'B +ve') { echo "selected"; }} ?>>B +ve</option>
                <option value="B -ve" <?php if(isset($post['blood_group'])) { if ($post['blood_group'] == 'B -ve') { echo "selected"; }} ?>>B -ve</option>
                <option value="AB +ve" <?php if(isset($post['blood_group'])) { if ($post['blood_group'] == 'AB +ve') { echo "selected"; }} ?>>AB +ve</option>
                <option value="AB -ve" <?php if(isset($post['blood_group'])) { if ($post['blood_group'] == 'AB -ve') { echo "selected"; }} ?>>AB -ve</option>
                <option value="O +ve" <?php if(isset($post['blood_group'])) { if ($post['blood_group'] == 'O +ve') { echo "selected"; }} ?>>O +ve</option>
                <option value="O -ve" <?php if(isset($post['blood_group'])) { if ($post['blood_group'] == 'O -ve') { echo "selected"; }} ?>>O -ve</option>
              </select>
            </div>
            <div class="form-div">
              <label>Medical Complications  <span class="opt"><i>(If any)</i></span></label>
              <textarea id="medical_complications"><?php if(isset($post['medical_complications'])) echo $post['medical_complications'];?></textarea>
            </div>
            <div class="form-div">
              <label>Regular Medication  <span class="opt"><i>(If any)</i></span></label>
              <textarea id="regular_medication"><?php if(isset($post['regular_medication'])) echo $post['regular_medication'];?></textarea>
            </div>
            <div class="form-div">
              <label  class="radio-inline">Any Allergies</label>
                <div>
                  <input type="radio" value="Yes" onchange="showHideAllergy(this)" name="allergies" <?php if(isset($post['allergies'])) { if ($post['allergies'] == 'Yes') { echo "checked"; }} ?>>
                  <label  class="radio-inline">Yes</label>
                
                  <input type="radio"  value="No" onchange="showHideAllergy(this)" name="allergies" <?php if(isset($post['allergies'])) { if ($post['allergies'] == 'No') { echo "checked"; }} else { echo "checked"; } ?>>
                  <label  class="radio-inline">No</label>
                </div>
             
            </div>
            <!-- allerygy tab changes show hide -->
            <div id="allergy" <?php if(isset($post['allergies'])&&$post['allergies']=='Yes') echo 'style="display: block;"'; else echo 'style="display: none;"'; ?> >  
              <div class="form-div">
                <label>If any, please mention</label>
                <input type="text" id="allergy_description" placeholder="" value="<?php if(isset($post['allergy_description'])) echo $post['allergy_description'];?>">
              </div>
            </div>
            <div class="sub-can">
              <input type="button" onclick="addHealth()" name="" value="Submit" class="sub">
              
            </div>
          </div>
        </form>
      </div>

      <!-- health info ends here -->

      <!-- PAN starts -->
      <div class="tab-pane fade" id="nav-pan" role="tabpanel" aria-labelledby="nav-pan-tab">
        <form class="form" id="pan-form">
          <!-- hidden id -->
          <input type="hidden" id="emp_id">

          <div class="form-div">
            <label>PAN Number</label>
            <input type="text" id="pan" value="<?php if(isset($post['pan'])) echo $post['pan'];?>" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addPan()" name="" value="Submit" class="sub">
            
          </div>
        </form>
      </div>
      <!-- PAN ends -->

      <!-- work experience -->
      <div class="tab-pane fade" id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">
        <form class="form" id="work-form">

          <input type="button"class="btn btn-primary" value="Add Experience" onclick="addExperience()">
           <div class="form-div">
          </div>
          <p class="title" id="add_doc_title"></p>
              <div id="work-experience" class="bg-light">
              <!-- the form appends here -->
              <?php 
                if (!empty($work_experience)) {
                  foreach ($work_experience as $value) {
              ?>

                <div class="row" id="cross">
                  <i class="col-md-12 text-right fa fa-times fa-2x" onclick="removeWorkExperience(this)" class="form-group col-md-2 "></i>
                </div>
                <div class="form-div">
                  <input type="text" id="organization" name="organization" placeholder="Organization" value="<?php echo $value['organization']; ?>">
                </div>
                <div class="form-div">
                  <input type="text"  name="responsibility" id="responsibility" placeholder="Responsibility" value="<?php echo $value['responsibility']; ?>">
                </div>
                <div class="form-div">
                  <input type="text" id="contact_person_name" name="contact_person_name" placeholder="Contact Person Name" value="<?php echo $value['contact_person_name']; ?>">
                </div>
                <div class="form-div">
                  <input type="text" id="contact_person_phone" name="contact_person_phone" placeholder="Contact No." value="<?php echo $value['contact_person_phone']; ?>">
                </div>
                <div class="form-div">
                  <input type="text" id="contact_address" name="contact_address" placeholder="Contact Address" value="<?php echo $value['contact_address']; ?>">
                </div>
                <!-- <div class="row"><label class="col-md-2 ">From</label> -->
                <div class="row">
                  <label class="col-md-2 ">From</label>
                  <input class="col-md-3  form-control" type="date" name="from_date" id="from_date" value="<?php echo $value['from_date'] ?>">
                  <label class="col-md-2 ">To</label>
                  <input class="col-md-3   form-control" type="date" name="to_date" id="to_date" value="<?php echo $value['from_date'] ?>">
                </div>

              <?php
                  }
                }
              ?>
        </div>
        <div class="form-div ">
          <div class="sub-can">
            <input type="button" onclick="submitWork()" name="" value="Submit" class="sub">
           </div> 
          </div>
        </form>
      </div>
      <!-- work experience ends-->

      <!-- documents tab -->
      <div class="tab-pane fade" id="nav-document" role="tabpanel" aria-labelledby="nav-document-tab">
        <form class="form" id="document-form" enctype="multipart/form-data">
          <input type="button"class="btn btn-primary" value="Add Document" onclick="addDocument()">

          <div id="document">

            <?php 
                if (!empty($documents)) {
                  foreach ($documents as $value) {
              ?>
              <div class="form-group">
                <input type="text" name="doc_title" class=" col-md-2" placeholder="Enter the title" value="<?php echo $value['doc_title']; ?>">
                <a href="<?= base_url('assets/files/'); ?><?php echo $value['doc_file']; ?>" class=" col-md-3"><?php echo $value['doc_file']; ?></a> 
                <i class="fa fa-times fa-2x" onclick="removeDocument(this)" class="form-group col-md-2 "></i>
              <hr>
              <?php
                  }
                }
              ?>
          </div>
          <hr>


<input type="button" onclick="submitDocument()" value="Submit" class="sub">
 </form>
</div>
    <!-- documents ends here -->

<script type="text/javascript">
  check_complete();
</script>
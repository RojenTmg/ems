 <!-- unset the existing session in the reload of page -->
     <?php 

       $updating=false;
           if (isset($_SESSION['current_employee_id'])) {
               unset($_SESSION['current_employee_id']); 
            }

      ?>

     
      <?php
          if($this->uri->segment(3))
         {
          $updating=true;
            $_SESSION['current_employee_id']=$this->uri->segment(3);       
         }
         
    
      ?>
      
 <!-- form -->
  <div class="contents">
    <!-- title -->
    <div class="con-head sp-btn">
      <h4>Manage Staff</h4>
      <a href="<?= site_url('admin/dashboard'); ?>" id="small-link"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> &nbsp;Go back to Dashboard</a>
    </div>

        

    <div id="page-content"  >

     <!-- progress-bar -->
     <div class="box profile-progress">
       <div class="box-head pro-head sp-btn " >
     <!-- show name above the progress bar and DONE button added -->
          <p id="current_employee_name"><?php if(isset($post['title'])) echo $post['title'] . '. '; if(isset($post['first_name'])) echo $post['first_name'] . ' '; if(isset($post['middle_name'])) echo $post['middle_name'] . ' '; if(isset($post['last_name'])) echo $post['last_name']; ?></p> 
          <!-- button -->

             <input id="done-btn" class="float-right btn btn-success" type="button" name="done" value="Add New Staff" onclick="location = '<?= site_url('admin/employee_manage'); ?>'">

        </div>
        <div id="progress-bar-body" style="display: none" class="box-body">
            <p id="completedPercent">
              <!-- show percentage completed here -->
            </p>
          <div class="pro-bar">
            <div class="bar-completed progress-bar" id="bar"></div>
          </div>  
        </div>
     </div>

     <!-- area to show success and erorr messages -->

     <div class=" alert alert-success alert-dismissible fade show" style="display: none;" id="messagediv">
      <p id="showmessage"> </p>
    <button type="button" class="close" >&times;</button>
        </div>
 <!-- area finishes here -->


     <!-- nav-tab-form -->
     <nav>
       <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <!-- general tab -->

        <a class="nav-item nav-link active " id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>
 
        <!-- added address tab -->
        <a class="nav-item nav-link " id="nav-address-tab" data-toggle="tab" href="#nav-address" role="tab" aria-controls="nav-address" aria-selected="false">Address &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>

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

        <!--assign tab  -->
        <a class="nav-item nav-link" id="nav-assign-tab" data-toggle="tab" href="#nav-assign" role="tab" aria-controls="nav-assign" aria-selected="false">Assign &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>

        <!-- work tab -->
        <a class="nav-item nav-link" id="nav-work-tab" data-toggle="tab" href="#nav-work" role="tab" aria-controls="nav-work" aria-selected="false">Work Experience &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a> 

        <!--document tab  -->
        <a class="nav-item nav-link" id="nav-document-tab" data-toggle="tab" href="#nav-document" role="tab" aria-controls="nav-document" aria-selected="false">Documents &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>

        

        <!--TAB ENDS  -->
      </div>
    </nav>
   <!--  <div class="message-div">
      <div id="message" class="message" style="display: none;">
       </div>
    </div> -->

    <!--General starts here -->
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
        <form class="form" id="general-form">
          <div class="message-div">
      <div id="message" class="message" style="display: none;">
        <!-- add edit message displayed here -->
       </div></div>
       
        <div class="row col-md-12">
          <!-- department -->
       <div class="form-div mr-4">
            <label>Department</label>
            <select name="department" id="department">
              <?php foreach ($departments as $key => $value) { ?>
                <option value="<?php echo $value['id']; ?>" <?php if(isset($post['department_id'])) { if ($post['department_id'] == $value['id']) { echo "selected"; }} ?>><?php echo $value['department_name']; ?></option>
            <?php  } ?>
            
            </select>
          </div>
        <!-- dept ends here -->

           <!-- date of join added -->
          <div class="form-div col-md-2 mr-5 " style="padding: 0">
          <label>Join Date</label>
          <input type="date" name="join_date" id="join_date" max="<?php echo date('Y-m-d'); ?>" <?php if (isset($post['join_date']))echo 'value="'. $post['join_date'].'"';   else echo 'value='. date('Y-m-d') ?>>

          </div>  
      </div>
      <!-- row ends -->

<!-- row starts-->
<div class="row col-md-12">
        <!-- title starts -->
          <div class="form-div mr-4">
            <label>Title</label>
            <select name="title" id="title">
              <option value="Mr" <?php if(isset($post['title'])) { if ($post['title'] == 'Mr') { echo "selected"; }} ?>>Mr</option>
              <option value="Ms" <?php if(isset($post['title'])) { if ($post['title'] == 'Ms') { echo "selected"; }} ?>>Ms</option>
              <option value="Mrs" <?php if(isset($post['title'])) { if ($post['title'] == 'Mrs') { echo "selected"; }} ?>>Mrs</option>
              <option value="Dr" <?php if(isset($post['title'])) { if ($post['title'] == 'Dr') { echo "selected"; }} ?>>Dr</option>
            </select>
          </div>
            <!-- title ends -->
         

          <div class="form-div  col-md-2 mr-4" style="padding: 0">
            <label>First Name<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="first_name" placeholder=""  value="<?php if(isset($post['first_name'])) echo $post['first_name']; ?>" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
          </div>
          <div class="form-div  col-md-2 mr-4" style="padding: 0">
            <label>Middle Name  <span class="opt"><i>(Optional)</i></span></label>
            <input type="text" id="middle_name" placeholder=""  value="<?php if(isset($post['middle_name'])) echo $post['middle_name']; ?>" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
          </div>
          <div class="form-div  col-md-2" style="padding: 0">
            <label>Last Name<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="last_name" placeholder=""  value="<?php if(isset($post['last_name'])) echo $post['last_name']; ?>" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
          </div>
</div>
     <!-- row  ends -->

           <!-- row 3 -->
           <div class="row col-md-12">
         <!--  mixed personal info in the general tab-->
          <div class="form-div ">
            <label>Gender</label>
            <select id="gender">
              <option value="Male" <?php if(isset($post['gender'])) { if ($post['gender'] == 'Male') { echo "selected"; }} ?>>Male</option>
              <option value="Female" <?php if(isset($post['gender'])) { if ($post['gender'] == 'Female') { echo "selected"; }} ?>>Female</option>
              <option value="Others" <?php if(isset($post['gender'])) { if ($post['gender'] == 'Others') { echo "selected"; }} ?>>Others</option>
            </select>
          </div> 
<!-- dob -->
   <div class="form-div col-md-8">
            <label>Date of Birth<span class="text-danger"><i>*</i></span></label>
             <!-- date -->
            <div class="row" style="padding: 0">
            <select name="day" id="birth_day" class="col-md-1 ml-3 mr-3" onfocus='this.size=10;'
onblur='this.size=1;' 
onchange='this.size=1; this.blur();' style="position: absolute; left: 1%;" >
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
             <select id="birth_month"   name="month"  class="col-md-3 mr-3" onfocus='this.size=10;'
onblur='this.size=1;' 
onchange='this.size=1; this.blur();' style="position: absolute; left: 12%;" > 
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
             <select id="birth_year" name="year " class="col-md-2" onfocus='this.size=10;'
onblur='this.size=1;' 
onchange='this.size=1; this.blur();' style="position: absolute; left: 39%;" >
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
          </div>
          <!-- row 2 ending -->

       

          <div class="form-div">
            <label>Email<span class="text-danger"><i>*</i></span></label>
            <input type="email" value="<?php if(isset($post['email'])) echo $post['email']; ?>" id="email" placeholder="">
          </div>
                 <div class="sub-can">
             <input type="button" id="generalButton" <?php if($updating==false){ echo 'onclick="addGeneral()"'; echo 'value="Save"';} else {echo 'onclick="updateGeneral()"'; echo 'value="Update"'; }?> class="sub"  name="submit-general">
          </div>
        </form>
      </div>
      <!-- general ends -->

      <!-- address changes-->
      <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">
        <form class="form" id="address-form">
          <div class="message-div">
      <div id="message" class="message" style="display: none;">
        <!-- add edit message displayed here -->
       </div></div>
            <p class="title">Permanent Address  <span class="opt"><i>(As per citizenship)</i></span></p>
            <div class="form-group add-frm-grp">
              <input type="text" id="permanentaddress_street" value="<?php if(isset($post['p_street'])) echo $post['p_street']; ?>" placeholder="Street" class="form-group col-md-3">
              <input type="text" id="permanentaddress_municipality" value="<?php if(isset($post['p_municipality'])) echo $post['p_municipality']; ?>" placeholder="Municipality" class="form-group col-md-3">
              <input type="text" id="permanentaddress_district" value="<?php if(isset($post['p_district'])) echo $post['p_district']; ?>" placeholder="District" class="form-group col-md-3">

                <div class="autocomplete">
                  <input type="text" placeholder="District">
                  <span class="close">Cancel</span>
                  <div class="dialog"></div>
                </div>

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
            <input type="button" onclick="addAddress()" name="" value="Save" class="sub">
            
          </div>
        </form>
      </div>
      <!-- address ends -->

      <!-- contact changes -->
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <form class="form" id="contact-form">
          <div class="message-div">
      <div id="message" class="message" style="display: none;">
        <!-- add edit message displayed here -->
       </div></div>
            <div class="form-div">
            <label>Home Phone </label>
            <input type="text" id="home_phone"  value="<?php if(isset($post['home_phone'])) echo $post['home_phone']; ?>" placeholder="+(977) -" >
          </div>

             <div class="form-div">
            <label>Mobile Phone<span class="opt text-danger"><i>*</i></span></label>
            <input type="text" id="mobile_phone"  value="<?php if(isset($post['mobile_phone'])) echo $post['mobile_phone']; ?>" placeholder="+(977) -">
          </div>

          <div class="form-group">
            <p>Other Phone</p>
            <input type="text" id="other_phone1" value="<?php if(isset($post['other_phone1'])) echo $post['other_phone1']; ?>" placeholder="Phone 1" class="form-group col-md-3">
            <input type="text" id="other_phone2" value="<?php if(isset($post['other_phone2'])) echo $post['other_phone2']; ?>" placeholder="Phone 2" class="form-group col-md-3">
            <input type="text" id="other_phone3" value="<?php if(isset($post['other_phone3'])) echo $post['other_phone3']; ?>" placeholder="Phone 3" class="form-group col-md-3">
          </div>

          <div class="sub-can">
            <input type="button" onclick="addContact()" name="" value="Save" class="sub">
            
          </div>
        </form>
      </div>
      <!-- contact ends -->

      <!-- Nationality changes -->
      <div class="tab-pane fade" id="nav-nationality" role="tabpanel" aria-labelledby="nav-nationality-tab">
        <form name="nationality-tab" id="nationality-form" class="form">
          <div class="message-div">
      <div id="message" class="message" style="display: none;">
        <!-- add edit message displayed here -->
       </div></div>
          <div class="form-div">
            <label>Nationality<span class="text-danger"><i>*</i></span></label>
            <div>
              <div>
                <input type="radio" name="nationality" value="Nepalese" onchange="showHideVisa(this)" <?php if(isset($post['nationality'])) { if ($post['nationality'] == 'Nepalese') { echo "checked"; }} ?> checked="true" >
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
              <input type="radio"  value="Yes" name="visa_permission" <?php if(isset($post['visa_permission'])) { if ($post['visa_permission'] == 'Yes') { echo "checked"; }} ?> checked=''>
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
            <input type="button" onclick="addNationality()" name="" value="Save" class="sub">
            
          </div>
        </form>
      </div>
      <!-- nationality ends -->

      <!-- Emergency contact form -->
      <div class="tab-pane fade show" id="nav-eContact" role="tabpanel" aria-labelledby="nav-eContact-tab">
        <form class="form" id="emergency-form">
          <div class="message-div">
      <div id="message" class="message" style="display: none;">
        <!-- add edit message displayed here -->
       </div></div>
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
            <input type="button" onclick="addEmergency()" name="" value="Save" class="sub">
            
          </div>
        </form>
      </div>
      <!-- emergency ends -->

      <!-- Education -->
      <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
        <form class="form" id="education-form">
          <div class="message-div">
      <div id="message" class="message" style="display: none;">
        <!-- add edit message displayed here -->
       </div></div>
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
            <input type="button" onclick="addEducation()" name="" value="Save" class="sub">
            
          </div>
        </form>
      </div>
      <!-- education ends -->

      <!-- health info -->
      <div class="tab-pane fade" id="nav-health" role="tabpanel" aria-labelledby="nav-health-tab">
        <form class="form" id="health-form">
          <div class="message-div">
      <div id="message" class="message" style="display: none;">
        <!-- add edit message displayed here -->
       </div></div>
          <div class="form-div">

            <div class="form-div">
              <label>Blood Group <span class="text-danger"><i>*</i></span></label>
              <select id="blood_group">
                <option value="">Select Blood Group</option>
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
              <label  class="radio-inline">Any Allergies?</label>
                <div>
                  <input type="radio" value="Yes" onchange="showHideAllergy(this)" name="allergies" <?php if(isset($post['allergies'])) { if ($post['allergies'] == 'Yes') { echo "checked"; }} ?> >
                  <label  class="radio-inline">Yes</label>
                
                  <input type="radio"  value="No" onchange="showHideAllergy(this)" name="allergies" <?php if(isset($post['allergies'])){ if($post['allergies'] == 'No') { echo "checked"; }} else  { echo "checked"; }  ?> >
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
              <input type="button" onclick="addHealth()" name="" value="Save" class="sub">
              
            </div>
          </div>
        </form>
      </div>

      <!-- health info ends here -->

      <!-- PAN starts -->
      <div class="tab-pane fade" id="nav-pan" role="tabpanel" aria-labelledby="nav-pan-tab">
        <form class="form" id="pan-form">
          <div class="message-div">
      <div id="message" class="message" style="display: none;">
        <!-- add edit message displayed here -->
       </div>
     </div>
          <!-- hidden id -->
          <input type="hidden" id="emp_id">

          <div class="form-div">
            <label>PAN Number<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="pan" value="<?php if(isset($post['pan'])) echo $post['pan'];?>" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addPan()" name="" value="Save" class="sub">
            
          </div>
        </form>
      </div>
      <!-- PAN ends -->

 <!-- work experience -->

<div class="tab-pane fade" id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">
  <form class="form" id="work-form">
      <div class="message-div">
      <div id="message" class="message" style="display: none;">
        <!-- add edit message displayed here -->
       </div></div>
          

 <div id="experiencelist">
  <div id="listexp">

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#expModel">
 Add New Experience
</button>
<br><br>


<!-- Modal -->
<div class="modal fade" id="expModel" tabindex="-1" role="dialog" aria-labelledby="addExp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="addExp">Add New Experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <textarea id="experience" style="width: 100%; resize:none" rows="12"></textarea>
      </div>
      <div class="modal-footer">
                <p style="float: right;" id="form-message" class="modal-title"></p>

        <button type="button" class="btn btn-secondary"  id="closeExp" data-dismiss="modal">Close</button>
        <input type="button"class="btn btn-primary" value="Save" onclick="addExperience()">
           <div class="form-div">
          </div>
      </div>
    </div>
  </div>
</div>

<div class="card-columns">
<?php 
//Function definition
function timeAgo($time_ago)
{
    $time_ago = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "one minute ago";
        }
        else{
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "an hour ago";
        }else{
            return "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "yesterday";
        }else{
            return "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "a week ago";
        }else{
            return "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "a month ago";
        }else{
            return "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
            return "one year ago";
        }else{
            return "$years years ago";
        }
    }
}

if(isset($work_experience)&&count($work_experience)>0){ 
foreach (array_reverse($work_experience) as $work) {
 $time_elapsed = timeAgo($work['modified_date']); //The argument $time_ago is in timestamp (Y-m-d H:i:s)format.

 ?>
    <div class="card" >
      <div class="card-body">
        
        <p class="card-text"><?php echo $work['experience']; ?>
        </p>

      </div>
      <div class="card-footer" style="display: flex; justify-content: space-between;">
      <p class="text-muted">Modified <?php echo $time_elapsed; ?> </p>
       <div>
     <button type="button" class="btn text-info" data-toggle="modal"  data-target="#editmodal<?php echo $work['id'];?>" ><i class="fas fa-edit"></i></button>


     <button class="btn text-danger" onclick="confirmAction(<?php echo $work['id'];?>,this, 'Are you sure you wish to remove this experience?',deleteExp); return false;"><i class="fas fa-trash"></i></button>
    </div>

  </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="editmodal<?php echo $work['id'];?>" tabindex="-1" role="dialog" aria-labelledby="addExp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="addExp">Edit Experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <textarea id="experience<?php echo $work['id'];?>" style="width: 100%; resize:none" rows="12"><?php echo $work['experience'];?></textarea>
      </div>
      <div class="modal-footer">
                <p style="float: right;" id="form-message" class="modal-title"></p>

        <button type="button" class="btn btn-secondary"  id="closeExp" data-dismiss="modal">Cancel</button>
        <input type="button"class="btn btn-primary" value="Save" onclick="editExperience(<?php echo $work['id'];?>)">
           <div class="form-div">
          </div>
      </div>
    </div>
  </div>
</div>
<!-- end of modal -->

<?php }} ?>
</div>
</div>
</div>
</form>
</div>

<!-- end of work experience -->

  <!-- documents tab -->
  <div class="tab-pane fade" id="nav-document" role="tabpanel" aria-labelledby="nav-document-tab">
    <form class="form" id="document-form" enctype="multipart/form-data">
      <div class="message-div">
  <div id="message" class="message" style="display: none;">
    <!-- add edit message displayed here -->
   </div></div>
      <input type="button"class="btn btn-primary" id="docaddbtn" value="Add Document" onclick="addDocument()">
      <div class="form-group"></div>
      <div id="document"> </div>
      <div id="list_doc">
     
      <?php 
      if(!empty($documents)){?>
          <table class="table" id="document-list" style="overflow: scroll">
        <thead>
          <th>Title</th>
          <th>File</th>
          <th>Action</th>
        </thead>
        <?php 
      foreach ($documents as $value) {
    ?>
    <tr>
      <td><?php echo $value['doc_title']; ?></td>
      <td><a href="<?= base_url('assets/files/'); ?><?php echo $value['doc_file']; ?>"  data-toggle="lightbox" ><?php echo $value['doc_file']; ?></a></td>
      <!-- delete button -->
      <td>

        

         <i class="fa fa-trash text-danger" aria-hidden="true"></i>

           <div class="tooltiptext float-right deleteFiles" id="deleteFileMessage">
            <p>Are you sure?</p>
            <span class="tip-can">Cancel</span>
            <span class="tip-arch" id="<?php echo $value['doc_id']; ?>" onclick="removeFile(<?php echo $value['doc_id'];?>)">Delete</span>
          </div>
        </td>
       </tr>
    <?php   } } ?>
  </table>
  <hr>
</div>
<input type="button" onclick="submitDocument()" value="Save" class="sub">
 </form>
  <script>  

</div>
    <!-- documents ends here -->

 <!-- employee assign tab starts here -->
  <div class="tab-pane fade"  id="nav-assign" role="tabpanel" aria-labelledby="nav-assign-tab">
  
        <form class="form" id="assign-form" >
            <div class="form-div">
              <div class="form-div"></div>
            </div>
           <div class="form-div form-div-horz">
            <label>Package <span class="text-danger"><i>*</i></span></label>
                <select  id="package_id" >
                  <option value="">Select package</option>

                  <?php foreach ($packagelist as $pack) {  ?>
                   <option <?php if($post['package_id']==$pack['package_id']) echo "selected"; ?> value="<?php echo $pack['package_id'];?>"><?php echo $pack['package_name'];?></option>
                 <?php } ?>
                </select> 
          </div>
          <hr>
          <div class="form-div form-div-horz">
            <label>Recommender <span class="text-danger"><i>*</i></span></label>
                <select class='fstdropdown-select' id="recommender" >
                  <option value="">Select option</option>
                  <?php foreach ($empList as $row) {
                      if($_SESSION['current_employee_id']==$row['emp_id']) continue;
                    ?>
                   <option <?php if($assigned!=''&&$assigned['recommender_id']==$row['emp_id']) echo "selected";?>  value="<?php echo $row['emp_id'];?>"><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'];?></option>
                 <?php } ?>
                </select> 
          </div>
          <div class="form-div form-div-horz">
            <label>Approver <span class="text-danger"><i>*</i></span></label>
               <select class='fstdropdown-select' id="approver">
                   <option  value="">Select option</option>
                  <?php foreach ($empList as $row) {
                   if($_SESSION['current_employee_id']==$row['emp_id']) continue;
                   ?>
                   <option <?php if($assigned!=''&&$assigned['approver_id']==$row['emp_id']) echo "selected";?> value="<?php echo $row['emp_id'];?>"><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'];?></option>
                 <?php } ?>
                </select> 
          </div>

          <div class="sub-can">
            <input type="button" onclick="assign()" name="" value="Save" class="sub">
       
          </div>
        </form>
      </div>
 <!-- employee assign tab ends here -->
</div>


<script type="text/javascript">

////////////////////  Auto-suggestion on Address tab (employee-manage) /////////////////////

function initDialog() {
  clearDialog();
  for (var i = 0; i < states.length; i++) {
    $('.dialog').append('<div>' + states[i] + '</div>');
  }
}

function clearDialog() {
  $('.dialog').empty();
}

var alreadyFilled = false;
var states = ['Taplejung','Panchthar','Ilam','Jhapa','Morang','Sunsari','Dhankutta','Sankhuwasabha','Bhojpur','Terhathum','Okhaldunga','Khotang','Solukhumbu','Udaypur','Saptari','Siraha','Dhanusa','Mahottari','Sarlahi','Sindhuli','Ramechhap','Dolkha','Sindhupalchauk','Kavreplanchauk','Lalitpur','Bhaktapur','Kathmandu','Nuwakot','Rasuwa','Dhading','Makwanpur','Rauthat','Bara','Parsa','Chitwan','Gorkha','Lamjung','Tanahun','Syangja','Kaski','Manang','Mustang','Parwat','Myagdi','Baglung','Gulmi','Palpa','Nawalpur','Parasi','Rupandehi','Arghakhanchi','Taulihawa','Pyuthan','Rolpa','Rukum Purba','Rukum Paschim','Salyan','Ghorahi','Bardiya','Surkhet','Dailekh','Banke','Jajarkot','Dolpa','Humla','Kalikot','Mugu','Jumla','Bajura','Bajhang','Achham','Doti','Kailali','Kanchanpur','Dadeldhura','Baitadi','Darchula'];

function openDialog() {
  $('.autocomplete').append('<div class="dialog"></div>');
  $('.autocomplete input').click(function() {
    if (!alreadyFilled) {
      $('.dialog').addClass('open');
    }
  });

  $('body').on('click', '.dialog > div', function() {
    $('.autocomplete input').val($(this).text()).focus();
    $('.autocomplete .close').addClass('visible');
    alreadyFilled = true;
  });

  $('.autocomplete .close').click(function() {
    alreadyFilled = false;
    $('.dialog').addClass('open');
    $('.autocomplete input').val('').focus();
    $(this).removeClass('visible');
  });

  function match(str) {
    str = str.toLowerCase();
    clearDialog();
    for (var i = 0; i < states.length; i++) {
      if (states[i].toLowerCase().startsWith(str)) {
        $('.dialog').append('<div>' + states[i] + '</div>');
      }
    }
  }

  $('.autocomplete input').on('input', function() {
    $('.dialog').addClass('open');
    alreadyFilled = false;
    match($(this).val());
  });

  $('body').click(function(e) {
    if (!$(e.target).is("input, .close")) {
      $('.dialog').removeClass('open');
    }
  });
  initDialog();
}
openDialog();

$('#permanentaddress_country').change(function() {
  if ($('#permanentaddress_country').find("option:selected").text() == 'Nepal') {
    openDialog();
  } else {
    $('.autocomplete').find('.dialog').remove();
  }
});




    <?php if(isset($_SESSION['current_employee_id'])){ ?>
      
     toggleNav('show');
    <?php  } else { ?>
      toggleNav('hide');
    <?php } 

    if(isset($_SESSION['path'])&&$_SESSION['path']=="document"){
     $_SESSION['path']='';
      ?>

      document.getElementById('nav-document').className='tab-pane fade active show';
      document.getElementById('nav-document-tab').className='nav-item nav-link active';
      document.getElementById('nav-general').className='tab-pane fade  ';
      document.getElementById('nav-general-tab').className='nav-item nav-link ';
<?php
 } 
if(isset($_SESSION['path'])&&$_SESSION['path']=="work"){
     $_SESSION['path']='';
      ?>

      document.getElementById('nav-work').className='tab-pane fade active show';
      document.getElementById('nav-work-tab').className='nav-item nav-link active';
      document.getElementById('nav-general').className='tab-pane fade  ';
      document.getElementById('nav-general-tab').className='nav-item nav-link ';
<?php } ?>


      </script>



<?php if($updating==true){ ?>
  <script>
    showprogress();
</script>
<?php 
}
?>
 
<script type="text/javascript">
  check_complete();


 $('.fa-trash').on('click',function(ev) {
    $(this).siblings().css({"display": "block"});
  });


   $('.tip-can').on('click',function(ev) {
    $(this).parent().css({"display": "none"});
  });

// to close message

$(document).ready(function(){
    $(".close").click(function(){
        $("#messagediv").css('display','none');
    });
});  


</script>

   <script src="<?= site_url('assets/js/fstdropdown.js')?> "></script>
    <script type="text/javascript" src="<?= base_url('assets/js/notify.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/alertify.js') ?>"></script>

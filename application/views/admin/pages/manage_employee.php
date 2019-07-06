 <!-- unset the existing session in the reload of page -->
     <?php 
      if (isset($_SESSION['current_employee_id'])) {
        unset($_SESSION['current_employee_id']); }
      ?>
      
 <!-- form -->
  <div class="contents">
     <!-- progress-bar -->
     <div class="box profile-progress">
       <div class="box-head pro-head sp-btn">
          
          <p>90% completed</p>
        </div>
        <div class="box-body">
          <div class="pro-bar">
            <div class="bar-completed"></div>
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
      
    </div>
      <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
        <form class="form" id="general-form">
          <div class="form-div">
            <label>Title</label>
            <select name="title" id="title">
              <option value="Mr">Mr</option>
              <option value="Ms">Ms</option>
              <option value="Mrs">Mrs</option>
              <option value="Dr">Dr</option>
            </select>
          </div>

          <div class="form-div">
            <label>First Name<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="first_name" placeholder="" >
          </div>
          <div class="form-div">
            <label>Middle Name  <span class="opt"><i>(Optional)</i></span></label>
            <input type="text" id="middle_name" placeholder="">
          </div>
          <div class="form-div">
            <label>Last Name<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="last_name" placeholder="">
          </div>
          <!-- date of join added -->
           <div class="form-div">
            <label>Date of Join<span class="text-danger"><i>*</i></span></label>
            <input type="date" id="join_date" value=<?php echo date('Y-m-d');?>>
          </div>
          <div class="sub-can">
            <input type="button" onclick="addGeneral()" value="Submit" class="sub" id="extra">
            <input type="submit" name="" value="Cancel" class="can" id="extra">
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
             <option value="Male">Male</option>
             <option value="Female">Female</option>
             <option value="Others">Others</option>
           </select>
           </div> 

          <div class="form-div">
            <label>Date of Birth<span class="text-danger"><i>*</i></span></label>
            <input type="date" id="dob" placeholder="">
          </div>

          <div class="form-div">
            <label>Email</label>
              <input type="email" id="email" placeholder="">
          </div>

          <div class="sub-can">
            <input type="button" onclick="addPersonalInformation()" name="" value="Submit" class="sub">
            <input type="reset"  name="" value="Cancel" class="can">
          </div>
        </form>
      </div>
  <!-- personal details ends here -->


      <!-- address changes-->
      <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">
        <form class="form" id="address-form">
           <div class="form-group">
            <p class="title">Permanent Address  <span class="opt"><i>(As per citizenship)</i></span></p>
              <input type="text" id="permanentaddress_street" placeholder="Street" class="form-group col-md-3">
            <input type="text" id="permanentaddress_municipality" placeholder="Municipality" class="form-group col-md-3">
             <input type="text" id="permanentaddress_district" placeholder="District" class="form-group col-md-3">
            <input type="text" id="permanentaddress_state" placeholder="State" class="form-group col-md-3">
            <!-- country will be a dropdown -->
            <select id="permanentaddress_country"  class="form-group col-md-3">
              <?php 
                require 'assets/addresses/country_list.php';
               ?>
            </select>
          
           
          </div>
          <div class="form-group">
            <p class="title">Current Address<span class="text-danger"><i>*</i></span></p>
             <input type="text" id="currentaddress_street" placeholder="Street" class="form-group col-md-3">
               <input type="text" id="currentaddress_municipality" placeholder="Municipality" class="form-group col-md-3">
                 <input type="text" id="currentaddress_district" placeholder="District" class="form-group col-md-3">
            <input type="text" id="currentaddress_state" placeholder="State" class="form-group col-md-3">
            <!-- country will be a dropdown -->
            <input type="text" id="currentaddress_country" placeholder="Country" class="form-group col-md-3" value="Nepal" disabled="true">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addAddress()" name="" value="Submit" class="sub">
            <input type="submit" name="" value="Cancel" class="can">
          </div>
        </form>
      </div>
  <!-- address ends -->

      <!-- contact changes -->
       <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <form class="form" id="contact-form">
            <div class="form-div">
            <label>Home Phone <span class="opt text-danger"><i>*</i></span></label>
            <input type="text" id="home_phone" placeholder="">
          </div>

             <div class="form-div">
            <label>Mobile Phone</label>
            <input type="text" id="mobile_phone" placeholder="">
          </div>

             <div class="form-div">
            <label>Other Phone</label>
            <textarea rows="4" id="other_phone" placeholder="Enter mulitple number"></textarea>
          </div>

           
      
          <div class="sub-can">
            <input type="button" onclick="addContact()" name="" value="Submit" class="sub">
            <input type="submit" name="" value="Cancel" class="can">
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
                <input type="radio" id="nationality" name="nationality" checked="true" value="Nepalese" onchange="showHideVisa(this)">
                <label>Nepalese</label>
              </div>
              <div>
                <input type="radio" id="nationality" name="nationality" value="Non-Nepalese" onchange="showHideVisa(this)">
                <label>Non-Nepalese</label>
              </div>
            </div>
          </div>

          <!-- non nepalese div -->
          <div id="non_nepali" style="display: none;">
          <div class="form-div">
            <label>If Non-Nepalese, do you have a visa/permission/right to work in Nepal?</label>
            <div>
              <input type="radio" id="visa_permission" checked="true" value="Yes" name="visa_permission">
              <label>Yes</label>
            </div>
            <div>
              <input type="radio" id="visa_permission" value="No" name="visa_permission">
              <label>No</label>
            </div>
          </div>
          <div class="form-group">
            <p class="title">If yes, please specify your visa type and visa expiry date </p>
            <input type="text" id="visa_type" placeholder="Visa Type" class="col-md-3">
            <input type="date" id="visa_expiry_date" placeholder="Visa End Date" min="<?php echo date('Y-m-d');?>" value="<?php echo date('Y-m-d');?>" class="col-md-3">
          </div>
          </div>
          <!-- changes in passport details -->
          <div class="form-div">
            <label>Citizenship/Passport No.</label>
            <input type="text" id="passport_no" placeholder="">
          </div>
              <div class="form-div">
            <label>Place of Issue</label>
            <input type="text" id="passport_issue_place" placeholder="">
          </div>

          
          <div class="sub-can">
            <input type="button" onclick="addNationality()" name="" value="Submit" class="sub">
            <input type="submit" name="" value="Cancel" class="can">
          </div>
        </form>
      </div>
      <!-- nationality ends -->

      <!-- Emergency contact form -->
      <div class="tab-pane fade show" id="nav-eContact" role="tabpanel" aria-labelledby="nav-eContact-tab">
        <form class="form" id="emergency-form">
          <div class="form-div">
            <label>Name<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="e_name" placeholder="">
          </div>
          <div class="form-div">
            <label>Relation<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="e_relation" placeholder="">
          </div>

           <div class="form-div">
            <label>Address</label>
            <textarea id="e_address"></textarea>
          </div>
           <div class="form-div">
            <label>Phone No.<span class="text-danger"><i>*</i></span></label>
            <input type="number" id="e_phone" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addEmergency()" name="" value="Submit" class="sub">
            <input type="submit" name="" value="Cancel" class="can">
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
              <option value="PhD">PhD</option>
              <option value="Master">Master</option>
              <option value="Bachelor">Bachelor</option>
              <option value="High School">High School</option>
              <option value="Middle School">Middle School</option>
    </div>      </select>
          </div>
           <div class="form-div">
            <label>Degree Title</label>
            <input type="text" id="degree_title" placeholder="">
          </div>
          <div class="form-div">
            <label>University</label>
            <input type="text" id="university" placeholder="">
          </div>
           <div class="form-div">
            <label>Institute</label>
            <input type="text" id="institute" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addEducation()" name="" value="Submit" class="sub">
            <input type="submit" name="" value="Cancel" class="can">
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
                <option value="A +ve">A +ve</option>
                <option value="A -ve">A -ve</option>
                <option value="B +ve">B +ve</option>
                <option value="B -ve">B -ve</option>
                <option value="AB +ve">AB +ve</option>
                <option value="AB -ve">AB -ve</option>
                <option value="O +ve">O +ve</option>
                <option value="O -ve">O -ve</option>
              </select>
            </div>
            <div class="form-div">
              <label>Medical Complications  <span class="opt"><i>(If any)</i></span></label>
              <textarea id="medical_complications"></textarea>
            </div>
            <div class="form-div">
              <label>Regular Medication  <span class="opt"><i>(If any)</i></span></label>
              <textarea id="regular_medication"> </textarea>
            </div>
            <div class="form-div">
              <label  class="radio-inline">Any Allergies</label>
              
                <div>
                  <input type="radio" id="allergies" value="yes" onchange="showHideAllergy(this)">
                  <label  class="radio-inline">Yes</label>
                
                  <input type="radio" checked="true" id="allergies" value="no" onchange="showHideAllergy(this)">
                  <label  class="radio-inline">No</label>
                </div>
             
            </div>
            <!-- allerygy tab changes show hide -->
            <div id="allergy" style="display:none; ">  
            <div class="form-div">
              <label>If any, please mention</label>
              <input type="text" id="allergy_description" placeholder="">
            </div>
          </div>
            <div class="sub-can">
              <input type="button" onclick="addHealth()" name="" value="Submit" class="sub">
              <input type="submit" name="" value="Cancel" class="can">
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
            <input type="text" id="pan" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addPan()" name="" value="Submit" class="sub">
            <input type="button"  name="" value="Cancel" class="can">
          </div>
        </form>
      </div>
    <!-- PAN ends -->

    <!-- work experience -->
     <div class="tab-pane fade" id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">
        <form class="form" id="work-form">
          <div class="form-div">
            <label>Previous Employer</label>
            <input type="text" id="previous_employer" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addWork()" name="" value="Submit" class="sub">
            <input type="reset"  name="" value="Cancel" class="can">
          </div>
        </form>
      </div>
    <!-- work experience ends-->

    <!-- documents tab -->
  <div class="tab-pane fade" id="nav-document" role="tabpanel" aria-labelledby="nav-document-tab">
 <form class="form" id="document-form" enctype="multipart/form-data">
  <input type="button"class="btn btn-primary" value="Add Document" onclick="addDocument()">

  <div id="document">
</div>
<hr>

<input type="button" onclick="submitDocument()" value="Submit" class="sub">
 </form>
</div>
    <!-- documents ends here -->

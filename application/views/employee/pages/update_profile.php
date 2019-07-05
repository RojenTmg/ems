<?php 
//getting all the user details who is currently logged in
extract($user); 

?> 
 <!-- form -->
  <div class="contents">
     <!-- progress-bar -->
     <div class="box profile-progress">
       <div class="box-head pro-head sp-btn">
          <p><?php echo $percentage;?>% Completed </p>
        </div>
        <div class="box-body">
          <div class="pro-bar">
            <div class="bar-completed" style="width:<?php echo $percentage;?>%; background-color: <?php echo $color;?>"></div>
          </div>  
        </div>
     </div>
     <!-- nav-tab-form -->
   <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>
         <!-- added address tab -->
          <a class="nav-item nav-link" id="nav-address-tab" data-toggle="tab" href="#nav-address" role="tab" aria-controls="nav-address" aria-selected="false">Address &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>
        <a class="nav-item nav-link" id="nav-nationality-tab" data-toggle="tab" href="#nav-nationality" role="tab" aria-controls="nav-nationality" aria-selected="false">Nationality &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>
        <a class="nav-item nav-link" id="nav-eContact-tab" data-toggle="tab" href="#nav-eContact" role="tab" aria-controls="nav-eContact" aria-selected="false">Emergency Contact &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>
        <a class="nav-item nav-link" id="nav-education-tab" data-toggle="tab" href="#nav-education" role="tab" aria-controls="nav-education" aria-selected="false">Education &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>
                <a class="nav-item nav-link" id="nav-health-tab" data-toggle="tab" href="#nav-health" role="tab" aria-controls="nav-health" aria-selected="false">Health &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>
        <a class="nav-item nav-link" id="nav-pan-tab" data-toggle="tab" href="#nav-pan" role="tab" aria-controls="nav-pan" aria-selected="false">PAN &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>
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
              <option value="mr">Mr</option>
              <option value="ms">Ms</option>
              <option value="mrs">Mrs</option>
              <option value="dr">Dr</option>
            </select>
          </div>

          <div class="form-div">
            <label>First Name<span class="text-danger"><i>*</i></span></label>
            <input type="text" disabled="true" id="firstname" placeholder="" >
          </div>
          <div class="form-div">
            <label>Middle Name  <span class="opt"><i>(Optional)</i></span></label>
            <input type="text"disabled="true" id="middlename" placeholder="">
          </div>
          <div class="form-div">
            <label>Sur Name<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="surname" disabled="true" placeholder="">
          </div>
        </form>
      </div>
    <!-- general ends -->

      <!-- address changes-->
      <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">
        <form class="form" id="address-form">
           <div class="form-group">
            <p class="title">Permanent Address  <span class="opt"><i>(As per citizenship)</i></span></p>
            <input type="text" id="permanentaddress_city" placeholder="City" class="form-group col-md-3">
            <input type="text" id="permanentaddress_state" placeholder="State" class="form-group col-md-3">
            <!-- country will be a dropdown -->
            <input type="text" id="permanentaddress_country" placeholder="Country" class="form-group col-md-3">
            <input type="text" id="permanentaddress_zip" placeholder="Zip Code" class="form-group col-md-3">
            <input type="text" id="permanentaddress_zone" placeholder="Zone" class="form-group col-md-3">
          </div>
          <div class="form-group">
            <p class="title">Current Address<span class="text-danger"><i>*</i></span></p>
               <input type="text" id="currentaddress_city" placeholder="City" class="form-group col-md-3">
            <input type="text" id="currentaddress_state" placeholder="State" class="form-group col-md-3">
            <!-- country will be a dropdown -->
            <input type="text" id="currentaddress_country" placeholder="Country" class="form-group col-md-3">
            <input type="text" id="currentaddress_zip" placeholder="Zip Code" class="form-group col-md-3">
            <input type="text" id="currentaddress_zone" placeholder="Zone" class="form-group col-md-3">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addcontact()" name="" value="Submit" class="sub">
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
            <label>Other Phone</label>
            <input type="text" id="other_phone" placeholder="">
          </div>

             <div class="form-div">
            <label>Work Phone</label>
            <input type="text" id="work_phone" placeholder="">
          </div>
      
          <div class="sub-can">
            <input type="button" onclick="addcontact()" name="" value="Submit" class="sub">
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
                <input type="radio" name="nationality" checked="true" value="nepalese">
                <label>Nepalese</label>
              </div>
              <div>
                <input type="radio" name="nationality" value="non-nepalese">
                <label>Non-Nepalese</label>
              </div>
            </div>
          </div>
          <div class="form-div">
            <label>If Non-Nepalese, do you have a visa/permission/right to work in Nepal?</label>
            <div>
              <input type="radio" name="permission" checked="true" value="yes">
              <label>Yes</label>
            </div>
            <div>
              <input type="radio" name="permission" value="no">
              <label>No</label>
            </div>
          </div>
          <div class="form-group">
            <p class="title">If yes, please specify your visa type and visa end date </p>
            <input type="text" name="visa_type" placeholder="Visa Type" class="form-group col-md-2">
            <input type="date" id="visa_date" placeholder="Visa End Date" class="col-md-2">
          </div>
          <!-- changes in passport details -->
          <div class="form-div">
            <label>Passport No.</label>
            <input type="number" id="passport_no" placeholder="">
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
            <label>Contact Person's Name</label>
            <input type="text" id="cpname" placeholder="">
          </div>
           <div class="form-div">
            <label>Contact Person's Address</label>
            <textarea name="cpaddress"></textarea>
          </div>
           <div class="form-div">
            <label>Contact Person's Phone No.</label>
            <input type="number" id="cpcontact" placeholder="">
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
            <select name="highestdegree"> 
              <option>Bachelor</option>
              <option>Master</option>
              <option>PhD</option>
              <option>High School</option>
              <option>Middle School</option>

    </div>            </select>
          </div>
           <div class="form-div">
            <label>Degree Title</label>
            <input type="text" id="degree_title" placeholder="">
          </div>
          <div class="form-div">
            <label>Previous Employer</label>
            <input type="text" id="previousemployer" placeholder="">
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
            <label>Blood Group</label>
            <select id="bloodgroup">
              <option value="A+ve">A +ve</option>
              <option value="A-ve">A -ve</option>
              <option value="B+ve">B +ve</option>
              <option value="B-ve">B -ve</option>
              <option value="AB+ve">AB +ve</option>
              <option value="AB-ve">AB -ve</option>
              <option value="O+ve">O +ve</option>
              <option value="O-ve">O -ve</option>
            </select>
          </div>
          <div class="form-div">
            <label>Medical Complications  <span class="opt"><i>(If any)</i></span></label>
            <textarea id="medicalcomplications"></textarea>
          </div>
          <div class="form-div">
            <label>Regular Medication  <span class="opt"><i>(If any)</i></span></label>
            <textarea id="regularmedication"> </textarea>
          </div>
          <div class="form-div">
            <label  class="radio-inline">Any Allergies</label>
            
              <div>
                <input type="radio" name="allergies">
                <label  class="radio-inline">Yes</label>
              
                <input type="radio" name="allergies" >
                <label  class="radio-inline">No</label>
              </div>
           
          </div>
          <div class="form-div">
            <label>If any, please mention</label>
            <input type="text" id="others" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addHealth()" name="" value="Submit" class="sub">
            <input type="submit" name="" value="Cancel" class="can">
          </div>
        </form>
      </div>
<!-- health info ends here -->

<!-- PAN starts -->
      <div class="tab-pane fade" id="nav-pan" role="tabpanel" aria-labelledby="nav-pan-tab">
        <form class="form" id="pan-form">
          <div class="form-div">
            <label>PAN Number</label>
            <input type="number" id="pan" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addPan()" name="" value="Submit" class="sub">
            <input type="button"  name="" value="Cancel" class="can">
          </div>
        </form>
      </div>
    <!-- PAN ends -->
    </div>


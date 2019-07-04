 <!-- form -->
  <div class="contents">
     <!-- progress-bar -->
     <div class="box profile-progress">
       <div class="box-head pro-head sp-btn">
          <p>Profile Strength : <span><b>Beginner</b></span></p>
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
        <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>
        <a class="nav-item nav-link" id="nav-nationality-tab" data-toggle="tab" href="#nav-nationality" role="tab" aria-controls="nav-nationality" aria-selected="false">Nationality &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>
        <a class="nav-item nav-link" id="nav-eContact-tab" data-toggle="tab" href="#nav-eContact" role="tab" aria-controls="nav-eContact" aria-selected="false">Emergency Contact &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>
        <a class="nav-item nav-link" id="nav-education-tab" data-toggle="tab" href="#nav-education" role="tab" aria-controls="nav-education" aria-selected="false">Education &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true"></i></a>
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
            <input type="text" id="firstname" placeholder="" >
          </div>
          <div class="form-div">
            <label>Middle Name  <span class="opt"><i>(Optional)</i></span></label>
            <input type="text" id="middlename" placeholder="">
          </div>
          <div class="form-div">
            <label>Sur Name<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="surname" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addGeneral()" value="Submit" class="sub" id="extra">
            <input type="submit" name="" value="Cancel" class="can" id="extra">
          </div>
        </form>
      </div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <form class="form" id="contact-form">
          <div class="form-div">
            <label>Permanent Address  <span class="opt"><i>(As per citizenship)</i></span></label>
            <input type="text" id="permanentaddress" placeholder="">
          </div>
          <div class="form-div">
            <label>Current Address</label>
            <input type="text" id="currentaddress" placeholder="">
          </div>
          <div class="form-div">
            <label>Date of Birth</label>
            <input type="date" id="dob" placeholder="">
          </div>
          <div class="form-div">
            <label>Contact No.  <span class="opt"><i>(Landline, Cell Phone)</i></span></label>
            <input type="number" id="contact" placeholder="">
          </div>
          <div class="form-div">
            <label>Email Address</label>
            <input type="email" id="email" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addcontact()" name="" value="Submit" class="sub">
            <input type="submit" name="" value="Cancel" class="can">
          </div>
        </form>
      </div>
      <div class="tab-pane fade" id="nav-nationality" role="tabpanel" aria-labelledby="nav-nationality-tab">
        <form name="nationality-tab" id="nationality-form" class="form">
          <div class="form-div">
            <label>Nationality</label>
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
          <div class="form-div">
            <label>If yes, please specify your visa type and visa end date </label>
            <input type="text" id="visatype" placeholder="">
          </div>
          <div class="form-div">
            <label>Citizenship/Passport No. and Place of Issue</label>
            <input type="number" id="passport" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addNationality()" name="" value="Submit" class="sub">
            <input type="submit" name="" value="Cancel" class="can">
          </div>
        </form>
      </div>
      <div class="tab-pane fade show" id="nav-eContact" role="tabpanel" aria-labelledby="nav-eContact-tab">
        <form class="form" id="emergency-form">
          <div class="form-div">
            <label>Name</label>
            <input type="text" id="cpname" placeholder="">
          </div>
           <div class="form-div">
            <label>Address</label>
            <input type="text" id="cpaddress" placeholder="">
          </div>
           <div class="form-div">
            <label>Phone No.</label>
            <input type="number" id="cpcontact" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addEmergency()" name="" value="Submit" class="sub">
            <input type="submit" name="" value="Cancel" class="can">
          </div>
        </form>
      </div>
      <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
        <form class="form" id="education-form">
          <div class="form-div" >
            <label>Highest Education Degree</label>
            <input type="text" id="highestdegree" placeholder="">
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
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-health-tab">
         <form class="form" id="health-form">
           <div class="form-div">
            <label>Blood Group</label>
            <input type="text" id="bloodgroup" placeholder="">
          </div>
          <div class="form-div">
            <label>Medical Complications  <span class="opt"><i>(If any)</i></span></label>
            <input type="text" id="medicalcomplications" placeholder="">
          </div>
          <div class="form-div">
            <label>Regular Medication  <span class="opt"><i>(If any)</i></span></label>
            <input type="text" id="regularmedication" placeholder="">
          </div>
          <div class="form-div">
            <label>Any Allergies</label>
            <div>
              <div>
                <input type="checkbox" name="">
                <label>Yes</label>
              </div>
              <div>
                <input type="checkbox" name="">
                <label>No</label>
              </div>
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
    </div>
  </div>

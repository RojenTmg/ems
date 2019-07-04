 <!-- form -->
  <div class="contents">
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

    <div class="con-head">
      <h4>Update Profile</h4>
    </div>

    <!-- showing response for general tab-->
 <div style="display: none" id="responseG">

 </div>    
 <!-- ends here     -->
    <!-- showing response for contact tab-->
 <div style="display: none" id="responseC">
 </div>    
 <!-- ends here     -->
 <!-- showing response for nationality tab -->
 <div style="display: none" id="responseN">
 </div>    
 <!-- ends here     -->
 <!-- showing response for emergency contact tab -->
 <div style="display: none" id="responseEC">
 </div>    
 <!-- ends here     -->
 <!-- showing response for education tab -->
 <div style="display: none" id="responseE">
 </div>    
 <!-- ends here     -->
  <!-- showing response for health tab -->
 <div style="display: none" id="responseH">
 </div>    
 <!-- ends here     -->
  <!-- showing response for PAN tab -->
 <div style="display: none" id="responseP">
 </div>    
 <!-- ends here     -->
    <div class="box box-tab" id="general" >
      <div class="box-head" onclick="slide(this)">
        <div  class="prog-status">
          <p>General</p>
          <span class="prog-com">Completed <i class="fa fa-check-circle" aria-hidden="true"></i></span>
        </div>
        <p id="slide"><i class="fa fa-angle-down" aria-hidden="true"></i></p>
      </div>
      <div class="box-body" >
        <form class="form" id="general-form">
          <div class="form-div">
            <label>Title</label>
            <input type="text" id="title" name="title" placeholder=""  >
          </div>
          <div class="form-div">
            <label>First Name</label>
            <input type="text" id="firstname" placeholder="">
          </div>
          <div class="form-div">
            <label>Middle Name  <span class="opt"><i>(Optional)</i></span></label>
            <input type="text" id="middlename" placeholder="">
          </div>
          <div class="form-div">
            <label>Sur Name</label>
            <input type="text" id="surname" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="general()" value="Submit" class="sub" id="extra">
            <input type="submit" name="" value="Cancel" class="can" id="extra">
          </div>
        </form>
      </div>
    </div>

    <div class="box box-tab">
      <div class="box-head"  onclick="slide(this)">
        <div class="prog-status">
          <p>Contact</p>
          <span class="prog-incom">In-Completed <i class="fa fa-info-circle" aria-hidden="true"></i></span>
        </div>
        <p id="slide"><i class="fa fa-angle-down" aria-hidden="true"></i></p>
      </div>
      <div class="box-body">
        <form class="form">
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
    </div>

    <div class="box box-tab">
      <div class="box-head" onclick="slide(this)">
        <div class="prog-status">
          <p>Nationality</p>
          <span class="prog-com">Completed <i class="fa fa-check-circle" aria-hidden="true"></i></span>
        </div>
        <p id="slide"><i class="fa fa-angle-down" aria-hidden="true"></i></p>
      </div>
      <div class="box-body">
        <form name="nationality-tab" class="form">
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
    </div>

    <div class="box box-tab">
      <div class="box-head" onclick="slide(this)">
        <div class="prog-status">
          <p>Emergency Contact</p>
          <span class="prog-incom">In-Completed <i class="fa fa-info-circle" aria-hidden="true"></i></span>
        </div>
        <p id="slide"><i class="fa fa-angle-down" aria-hidden="true"></i></p>
      </div>
      <div class="box-body">
        <form class="form">
          <div class="form-div">
            <label>Incase of emergency: Contact Person's Name</label>
            <input type="text" id="cpname" placeholder="">
          </div>
           <div class="form-div">
            <label>Incase of emergency: Contact Person's Address</label>
            <input type="text" id="cpaddress" placeholder="">
          </div>
           <div class="form-div">
            <label>Incase of emergency: Contact Person's Phone No.</label>
            <input type="number" id="cpcontact" placeholder="">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addEmergency()" name="" value="Submit" class="sub">
            <input type="submit" name="" value="Cancel" class="can">
          </div>
        </form>
      </div>
    </div>

    <div class="box box-tab">
      <div class="box-head" onclick="slide(this)">
        <div class="prog-status">
          <p>Education</p>
          <span class="prog-com">Completed <i class="fa fa-check-circle" aria-hidden="true"></i></span>
        </div>
        <p id="slide"><i class="fa fa-angle-down" aria-hidden="true"></i></p>
      </div>
      <div class="box-body">
        <form class="form">
          <div class="form-div">
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
    </div>

    <div class="box box-tab">
      <div class="box-head" onclick="slide(this)">
        <div class="prog-status">
          <p>Health</p>
          <span class="prog-incom">In-Completed <i class="fa fa-info-circle" aria-hidden="true"></i></span>
        </div>
        <p id="slide"><i class="fa fa-angle-down" aria-hidden="true"></i></p>
      </div>
      <div class="box-body">
        <form class="form">
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
    </div>

    <div class="box box-tab">
      <div class="box-head" onclick="slide(this)">
        <div class="prog-status">
          <p>PAN Number</p>
          <span class="prog-com">Completed <i class="fa fa-check-circle" aria-hidden="true"></i></span>
        </div>
        <p id="slide"><i class="fa fa-angle-down" aria-hidden="true"></i></p>
      </div>
      <div class="box-body">
        <form class="form">
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

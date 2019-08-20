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
      
     </div>

 


     <!-- nav-tab-form -->
     <nav>
       <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <!-- general tab -->

        <a class="nav-item nav-link active " id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General &nbsp;&nbsp;<i class="fa fa-check-circle prog-com" aria-hidden="true" tabindex="0"></i></a>
 
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
        <a class="nav-item nav-link" id="nav-assign-tab" data-toggle="tab" href="#nav-assign" role="tab" aria-controls="nav-assign" aria-selected="false">Leave &nbsp;&nbsp;<i class="fa fa-info-circle prog-incom" aria-hidden="true"></i></a>

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
          <input type="date" name="join_date" id="join_date"  <?php if (isset($post['join_date']))echo 'value="'. $post['join_date'].'"';   else echo 'value='. date('Y-m-d') ?>>

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
            <label>Middle Name</label>
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
          <div class="form-group" style="padding-left : 0; margin-bottom: 0; width: 10%;">
            <div class="form-div">
            <label>Gender</label>
            <select id="gender">
              <option value="Male" <?php if(isset($post['gender'])) { if ($post['gender'] == 'Male') { echo "selected"; }} ?>>Male</option>
              <option value="Female" <?php if(isset($post['gender'])) { if ($post['gender'] == 'Female') { echo "selected"; }} ?>>Female</option>
              <option value="Others" <?php if(isset($post['gender'])) { if ($post['gender'] == 'Others') { echo "selected"; }} ?>>Others</option>
            </select>
          </div> 
        </div>
<!-- dob -->
   <div class=" form-group col-md-9 " style=" margin-bottom: 0; margin-left: 6.56em;">
    <div class="form-div">
            <label>Date of Birth<span class="text-danger"><i>*</i></span></label>
             <!-- date -->
            <div class="row" style="padding: 0">
              <div class="form-div  col-md-2" >
            <select name="day" id="birth_day" class="fstdropdown-select" >
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
      </div>
      <!-- month -->
      <div class="form-div col-md-3" >
             <select id="birth_month"   name="month"  class="fstdropdown-select"> 
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
        </div>
            <!-- year -->

            <div class="form-div col-md-2" >
             <select id="birth_year" name="year " class="fstdropdown-select">
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
          </div>
          </div>
          <!-- row 2 ending -->

          <!-- email starts -->
          <div class="form-div">
            <label>Email<span class="text-danger"><i>*</i></span></label>
            <input style="width: 57.5%;" type="email" value="<?php if(isset($post['email'])) echo $post['email']; ?>" id="email" placeholder="">
          </div>
          <!-- email ends -->
          
          <!-- add as manager starts -->
          <?php
          $is_manager=false;
          if(isset($post['email'])){
            foreach ($managers as $mngr) {
              if($_SESSION['current_employee_id']==$mngr['emp_id']){
                $is_manager=true;
                break;
              }
            }
          }
          ?>
        
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" <?php if($is_manager) echo "checked "; ?>   id="manager"  onchange="changeText(this)">
            <label class="custom-control-label" <?php if($is_manager) echo ' style="color:green; font-weight:bold"'; ?> for="manager">Assign Manager Role</label>
        </div>
        <br>  

            <!-- add as manager ends -->
          <!-- button save -->
         <div class="sub-can" id="updateGeneralBtn">
             <input type="button" id="generalButton" <?php if($updating==false){ echo 'onclick="addGeneral()"'; echo 'value="Save"';} else {echo 'onclick="updateGeneral()"'; echo 'value="Update"'; }?> class="sub"  name="submit-general" >
          </div>

          <!-- button ends -->
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
               <!-- country will be a dropdown -->
              <select id="permanentaddress_country" value="<?php if(isset($post['p_country'])) echo $post['p_country']; ?>" class="form-group col-md-3">
                <?php 
                 $country_array = array("Afghanistan", "Aland Islands", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Barbuda", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Trty.", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Caicos Islands", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Territories", "Futuna Islands", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard", "Herzegovina", "Holy See", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Jan Mayen Islands", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea", "Korea (Democratic)", "Kuwait", "Kyrgyzstan", "Lao", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "McDonald Islands", "Mexico", "Micronesia", "Miquelon", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "Nevis", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Palestinian Territory, Occupied", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Principe", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Barthelemy", "Saint Helena", "Saint Kitts", "Saint Lucia", "Saint Martin (French part)", "Saint Pierre", "Saint Vincent", "Samoa", "San Marino", "Sao Tome", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia", "South Sandwich Islands", "Spain", "Sri Lanka", "Sudan", "Suriname", "Svalbard", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "The Grenadines", "Timor-Leste", "Tobago", "Togo", "Tokelau", "Tonga", "Trinidad", "Tunisia", "Turkey", "Turkmenistan", "Turks Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "US Minor Outlying Islands", "Uzbekistan", "Vanuatu", "Vatican City State", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (US)", "Wallis", "Western Sahara", "Yemen", "Zambia", "Zimbabwe");
                 foreach ($country_array as $country_name) {?>
                    <option value="<?php echo $country_name; ?>" <?php if (isset($post['p_country'])){ if($post['p_country']==$country_name) echo "selected";} else {
                      if($country_name=='Nepal') echo "selected"; } ?>><?php echo $country_name; ?></option>
               <?php  }  ?>
              </select>
              <input type="text" id="permanentaddress_street" value="<?php if(isset($post['p_street'])) echo $post['p_street']; ?>" placeholder="Street" class="form-group col-md-3">
              <input type="text" id="permanentaddress_municipality" value="<?php if(isset($post['p_municipality'])) echo $post['p_municipality']; ?>" placeholder="Municipality" class="form-group col-md-3">


              <!-- <input type="text" id="permanentaddress_state" value="<?php if(isset($post['p_state'])) echo $post['p_state']; ?>" placeholder="State" class="form-group col-md-3"> -->

              

              <div class="group-district">
                <!-- Auto-complete state when permanent_country is Nepal -->
                <div class="autocompleteState" class="col-md-3">
                  <input type="text" placeholder="State" id="permanentaddress_state" value="<?php if(isset($post['p_state'])) echo $post['p_state']; ?>" style="width: 100%;">
                  <!-- <span class="closeState">Cancel</span> -->
                  <div class="dialogState"></div>
                </div>
                
                <!-- Auto-complete district when permanent_country is Nepal -->
                <div class="autocomplete" class="col-md-3">
                  <input type="text" placeholder="District" id="permanentaddress_district" value="<?php if(isset($post['p_district'])) echo $post['p_district']; ?>"  style="width: 100%;">
                  <!-- <span class="close">Cancel</span> -->
                  <div class="dialog"></div>
                </div>
              </div>
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
              <option value="Province 7" <?php if(isset($post['t_state'])) { if ($post['t_state'] == 'Province 7') { echo "selected"; }} ?>>Province 7</option>

            </select>
          </div>
          <div class="sub-can">
            <input type="button" onclick="addAddress()" name="" value="Save" class="sub" id="addressbutton">
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
       <div class="form-group row">
            <div class="form-div col-md-2">
            <label>Home Phone<span class="opt"><i>(opt)</i></span> </label>
            <input type="text" id="home_phone"  value="<?php if(isset($post['home_phone'])) echo $post['home_phone']; ?>" placeholder="+(977) -" >
          </div>

             <div class="form-div col-md-2">
            <label>Mobile Phone<span class="opt text-danger"><i>*</i></span></label>
            <input type="text" id="mobile_phone"  value="<?php if(isset($post['mobile_phone'])) echo $post['mobile_phone']; ?>" placeholder="+(977) -">
          </div>
</div>
          <div class="form-group row">
            
             <div class="form-div col-md-2">
            <label>Other Phone 1<span class="opt"><i>(opt)</i></span></label>
            <input type="text" id="other_phone1" value="<?php if(isset($post['other_phone1'])) echo $post['other_phone1']; ?>" placeholder="Phone 1">
          </div>

            <div class="form-div col-md-2">
            <label>Other Phone 2<span class="opt"><i>(opt)</i></span></label>
            <input type="text" id="other_phone2" value="<?php if(isset($post['other_phone2'])) echo $post['other_phone2']; ?>" placeholder="Phone 2">
          </div>

          <div class="form-div col-md-2">
            <label>Other Phone 3<span class="opt"><i>(opt)</i></span></label>
            <input type="text" id="other_phone3" value="<?php if(isset($post['other_phone3'])) echo $post['other_phone3']; ?>" placeholder="Phone 3">
          </div>
          </div>

          <div class="sub-can">
            <input type="button" onclick="addContact()" name="" value="Save" class="sub"  id="contactbutton">
            
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
            <input type="text" id="visa_type" value="<?php if(isset($post['visa_type'])) echo $post['visa_type']; ?>" placeholder="Visa Type" class="col-md-2 mr-4">
            <input type="date" id="visa_expiry_date" value="<?php if(isset($post['visa_expiry_date'])) echo $post['visa_expiry_date']; else echo date('Y-m-d'); ?>" placeholder="Visa End Date" min="<?php echo date('Y-m-d');?>" class="col-md-2">
          </div>

        </div>
          <!-- changes in passport details -->
          <div class="form-group row">
          <div class="form-div col-md-2 mr-4">
            <label>Citizenship/Passport No.<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="passport_no" value="<?php if(isset($post['passport_no'])) echo $post['passport_no'];?>" placeholder="">
          </div>

          <div class="form-div col-md-4">
            <label>Place of Issue<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="passport_issue_place" value="<?php if(isset($post['passport_issue_place'])) echo $post['passport_issue_place'];?>" placeholder="">
          </div>

          <!-- Auto-complete district when permanent_country is Nepal -->
            <!-- <div class="autocomplete" class="form-div col-md-4">
              <label>Place of Issue<span class="text-danger"><i>*</i></span></label>
              <input type="text" placeholder="" id="passport_issue_place" value="<?php if(isset($post['passport_issue_place'])) echo $post['passport_issue_place'];?>">
              <span class="close">Cancel</span>
              <div class="dialog"></div>
            </div> -->
</div>

          <div class="sub-can">
            <input type="button" onclick="addNationality()" name="" value="Save" class="sub" id="nationalitybutton">
            
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
       <div class="form-group row " style="height: 10vh;">
          <div class="col-md-3">
            <label>Name<span class="text-danger" ><i>*</i></span></label><br>
            <input type="text" id="e_name" value="<?php if(isset($post['e_name'])) echo $post['e_name'];?>" placeholder="" class="col">
          </div>
          <div class=" col-md-3">

            <label>Relation<span class="text-danger"><i>*</i></span></label> <br>
            <select id="e_relation" onchange="checkRelation(this,this.value);" class="col">
              <?php 
              $other_relation='';
              $other=false;
              $names=['Father','Mother','Friend','Son','Daughter','Spouse','Sibling','Grandparent','Grandchild','Uncle','Aunt','Cousin','Sibling\'s child','Other']; 
             foreach ($names as  $value) { 
              if($value!=$post['e_relation']){
                $other=true;
                $other_relation=$post['e_relation'];
              }
              ?>
              <option  value="<?php echo $value;?>"  <?php if(isset($post['e_relation'])) { if ($post['e_relation'] == $value) { echo "selected"; } } 
              ?>><?php echo $value; ?></option> 
              <?php  } ?>
             

               <?php if($other==true){ ?> 

                <option value="<?php echo $other_relation;?>" <?php echo " selected"; ?>><?php echo $other_relation;?></option>
               <?php } ?>
                               

              
            </select>
          </div>

          <div class=" col-md-3">
            <label>Phone No.<span class="text-danger"><i>*</i></span></label> <br>
            <input type="text" class="col" id="e_phone" value="<?php if(isset($post['e_phone'])) echo $post['e_phone'];?>" placeholder="">
          </div>
</div>
          <div class="form-div">
            <label>Address</label>
            <textarea id="e_address" class="col-md-9"><?php if(isset($post['e_address'])) echo $post['e_address'];?></textarea>
          </div>
        
          <div class="sub-can">
            <input type="button" onclick="addEmergency()" name="" value="Save" class="sub" id="emergencybutton">
            
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
       </div> </div>
       <div class="form-group row">
          <div class="form-div col-md-4">
            <label>Highest Education Degree<span class="text-danger"><i>*</i></span></label>
            <select id="highest_degree">  
              <option value="None" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'None') { echo "selected"; }} ?>>None</option>        
              <option value="PhD" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'PhD') { echo "selected"; }} ?>>PhD</option>
              <option value="Master" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'Master') { echo "selected"; }} ?>>Master</option>
              <option value="Bachelor" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'Bachelor') { echo "selected"; }} ?>>Bachelor</option>
              <option value="High School" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'High School') { echo "selected"; }} ?>>High School</option>
              <option value="Middle School" <?php if(isset($post['highest_degree'])) { if ($post['highest_degree'] == 'Middle School') { echo "selected"; }} ?>>Middle School</option>
                 </select></div> 
          <div class="form-div col-md-4">
            <label>Degree Title<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="degree_title" value="<?php if(isset($post['degree_title'])) echo $post['degree_title'];?>" placeholder="">
          </div>
        </div>
             <div class="form-group row">
          <div class="form-div col-md-4">
            <label>University/Institute<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="university" value="<?php if(isset($post['university'])) echo $post['university'];?>" placeholder="">
          </div>
          <!-- <div class="form-div col-md-4">
            <label>Institute<span class="text-danger"><i>*</i></span></label>
            <input type="text" id="institute" value="<?php if(isset($post['institute'])) echo $post['institute'];?>" placeholder="">
          </div> -->
        </div>
           <div class="sub-can">
            <input type="button" onclick="addEducation()" name="" value="Save" class="sub" id="educationbutton">
            
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
       </div> </div>
         
          <div class="form-group row">
            <div class="form-div col-md-3">
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
            </div>
            <div class="form-group row ">
            <div class="form-div col-md-3" >
              <label>Medical Complications  <span class="opt"><i>(If any)</i></span></label>
              <textarea id="medical_complications"><?php if(isset($post['medical_complications'])) echo $post['medical_complications'];?></textarea>
            </div>
            <div class="form-div col-md-3">
              <label>Regular Medication  <span class="opt"><i>(If any)</i></span></label>
              <textarea id="regular_medication"><?php if(isset($post['regular_medication'])) echo $post['regular_medication'];?></textarea>
            </div>
            </div>
            <div class="form-div">
              <label  class="radio-inline">Any Allergies?</label>
                <div>
                  <input type="radio" value="Yes" onchange="showHideAllergy(this)" name="allergies" <?php if(isset($post['allergies'])) { if ($post['allergies'] == 'Yes') { echo "checked"; }} ?> >
                  <label  class="radio-inline">Yes</label>
                
                  <input type="radio"  value="No" onchange="showHideAllergy(this)" name="allergies" <?php if(isset($post['allergies'])){ if($post['allergies'] == 'No') { echo "checked"; }}?> >
                  <label  class="radio-inline">No</label>
                </div>
             
            </div>
          
            <!-- allerygy tab changes show hide -->
            <div id="allergy" <?php if(isset($post['allergies'])&&$post['allergies']=='Yes') echo 'style="display: block;"'; else echo 'style="display: none;"'; ?> >  
              <div class="form-div">
                <label>If any, please mention</label>
                <input type="text" id="allergy_description" placeholder="" value="<?php if(isset($post['allergy_description'])) echo $post['allergy_description'];?>" class="col-md-6">
              </div>
            </div>
            <div class="sub-can">
              <input type="button" onclick="addHealth()" name="" value="Save" class="sub" id="healthbutton">
              
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
            <input type="text" id="pan" value="<?php if(isset($post['pan'])) echo $post['pan'];?>" placeholder="" class="col-md-2">
          </div>
          <div class="sub-can">
            <input type="button" onclick="addPan()" name="" value="Save" class="sub" id="panbutton">
            
          </div>
        </form>
      </div>
      <!-- PAN ends -->

 <!-- work experience -->

<div class="tab-pane fade" id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">
  
<div class="container-fluid">
    <table id="expTable" class=" table order-list">
    <thead>
        <tr class="row">
            <td class="col">Organization</td>
            <td class="col">Responsibility</td>
            <td class="col">Postition</td>
            <td class="col">From</td>
            <td class="col">To</td>
            <td class="col">Contact Person Number</td>
            <td class="col-sm-1">Action</td>
        </tr>
    </thead>
      <tbody>
        <?php  $counter=0;
        foreach ($work_experience as $exp) {?>
     <script>
        var newRow = $("<tr class='row' id='exp<?php echo $exp['id'];?>' >");
        var cols = "";
       
        cols +='<td class="col"><input type="text" disabled id="organization" value="<?php echo $exp['organization'];?>" name="organization" class="form-control"  /></td>';

        cols +='<td class="col"><input type="text" disabled id="responsibility" value="<?php echo $exp['responsibility'];?>"  name="responsibility" class="form-control"  /></td>';

        cols +='<td class="col"><input type="text" disabled id="position" value="<?php echo $exp['position'];?>" name="position" class="form-control"  /></td>';

        cols +='<td class="col"><input type="date" disabled id="from_date" value="<?php echo $exp['from_date'];?>" name="from_date" class="form-control"  /></td>';

        cols +='<td class="col"><input type="date" disabled id="to_date" value="<?php echo $exp['to_date'];?>" name="to_date" class="form-control"  /></td>';

        cols +='<td class="col"><input type="text" disabled id="contact_person_number" value="<?php echo $exp['contact_person_number'];?>" name="contact_person_number" class="form-control"  /></td>';
         cols +='<td  class="col-sm-1"><i class="s fas fa-edit text-info pointer">  &nbsp; &nbsp; <i id="d<?php echo $exp['id'];?>" class="ibtnDel fas fa-trash text-danger"  onclick="confirmExpDel(this.id,<?php echo $exp['id'];?>)"></td> ';

         cols+= '</tr>';
     newRow.append(cols);
     $("table.order-list").append(newRow);
    </script>

     <?php } ?>

      </tbody>

    <tfoot>
        <tr>
            <td colspan="7" style="text-align: left;" >
               <center>  <input type="button" class="btn btn-lg btn-light  shadow" id="addrow" value="Add New Experience" /> 
                 <input type="button" class="btn btn-lg btn-success shadow" onclick="saveExp()" id="submitExp" value="Save Experience" /> </center>

                
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>
</div>
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
  <!-- <script>   -->

</div>
    <!-- documents ends here -->

 <!-- employee assign tab starts here -->
  <div class="tab-pane fade"  id="nav-assign" role="tabpanel" aria-labelledby="nav-assign-tab">
  
        <form class="form" id="assign-form" >
            <div class="form-div">
              <div class="form-div"></div>
            </div>
           <div class="form-div ">
            <label>Package <span class="text-danger"><i>*</i></span></label>
                <select  id="package_id" class="col-md-2">
                  <option value="">Select package</option>

                  <?php foreach ($packagelist as $pack) {  ?>
                   <option <?php if($post['package_id']==$pack['package_id']) echo "selected"; ?> value="<?php echo $pack['package_id'];?>"><?php echo $pack['package_name'];?></option>
                 <?php } ?>
                </select> 
          </div>
          <hr>
          <div class="row ">
          <div class="form-div col-md-2 mr-3">
            <label>Recommender <span class="text-danger"><i>*</i></span></label>
                <select class='fstdropdown-select' id="recommender" >
                  <option value="">Select option</option>
                  <?php foreach ($managerList as $row) {
                      if($_SESSION['current_employee_id']==$row['emp_id']) continue;
                    ?>
                   <option <?php if($assigned!=''&&$assigned['recommender_id']==$row['emp_id']) echo "selected";?>  value="<?php echo $row['emp_id'];?>"><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'];?></option>
                 <?php } ?>
                </select> 
          </div>
          <div class="form-div col-md-2">
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
        </div>
          <div class="sub-can">
            <input type="button" onclick="assign()" name="" value="Save" class="sub" id="assignbutton">
       
          </div>
        </form>
      </div>
 <!-- employee assign tab ends here -->
</div>


<script type="text/javascript">



////////////////////  Auto-suggestion on State Address tab (employee-manage) /////////////////////

function initDialogState() {
  clearDialogState();
  for (var i = 0; i < states.length; i++) {
    $('.dialogState').append('<div>' + states[i] + '</div>');
  }
}

function clearDialogState() {
  $('.dialogState').empty();
}

var alreadyFilledState = false;
var states = ['Province 1', 'Province 2','Province 3','Province 4','Province 5','Province 6','Province 7'];

function openDialogState() {
  $('.autocompleteState').append('<div class="dialogState"></div>');
  $('.autocompleteState input').click(function() {
    if (!alreadyFilledState) {
      $('.dialogState').addClass('openState');
    }
  });

  $('body').on('click', '.dialogState > div', function() {
    $('.autocompleteState input').val($(this).text()).focus();
    $('.autocompleteState .closeState').addClass('visible');
    alreadyFilledState = true;
  });

  $('.autocompleteState .closeState').click(function() {
    alreadyFilledState = false;
    $('.dialogState').addClass('openState');
    $('.autocompleteState input').val('').focus();
    $(this).removeClass('visible');
  });

  function matchState(str) {
    str = str.toLowerCase();
    clearDialogState();
    for (var i = 0; i < states.length; i++) {
      if (states[i].toLowerCase().startsWith(str)) {
        $('.dialogState').append('<div>' + states[i] + '</div>');
      }
    }
  }

  $('.autocompleteState input').on('input', function() {
    $('.dialogState').addClass('openState');
    alreadyFilledState = false;
    matchState($(this).val());
  });

  // $('body').click(function(e) {
  //   if (!$(e.target).is("input, .closeState")) {
  //     $('.dialogState').removeClass('openState');
  //   }
  // });
  initDialogState();
}
openDialogState();


$('#permanentaddress_country').change(function() {
  if ($('#permanentaddress_country').find("option:selected").text() == 'Nepal') {
    openDialog();
    openDialogState(); 

  } else {
    $('.autocomplete').find('.dialog').remove();
    $('.autocompleteState').find('.dialogState').remove();
  }
});

////////////////////  Auto-suggestion on District Address tab (employee-manage) /////////////////////

function initDialog() {
  clearDialog();
  for (var i = 0; i < country.length; i++) {
    $('.dialog').append('<div>' + country[i] + '</div>');
  }
}

function clearDialog() {
  $('.dialog').empty();
}

var alreadyFilled = false;
var country = ['Taplejung','Panchthar','Ilam','Jhapa','Morang','Sunsari','Dhankutta','Sankhuwasabha','Bhojpur','Terhathum','Okhaldunga','Khotang','Solukhumbu','Udaypur','Saptari','Siraha','Dhanusa','Mahottari','Sarlahi','Sindhuli','Ramechhap','Dolkha','Sindhupalchauk','Kavreplanchauk','Lalitpur','Bhaktapur','Kathmandu','Nuwakot','Rasuwa','Dhading','Makwanpur','Rauthat','Bara','Parsa','Chitwan','Gorkha','Lamjung','Tanahun','Syangja','Kaski','Manang','Mustang','Parwat','Myagdi','Baglung','Gulmi','Palpa','Nawalpur','Parasi','Rupandehi','Arghakhanchi','Taulihawa','Pyuthan','Rolpa','Rukum Purba','Rukum Paschim','Salyan','Ghorahi','Bardiya','Surkhet','Dailekh','Banke','Jajarkot','Dolpa','Humla','Kalikot','Mugu','Jumla','Bajura','Bajhang','Achham','Doti','Kailali','Kanchanpur','Dadeldhura','Baitadi','Darchula'];

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
    for (var i = 0; i < country.length; i++) {
      if (country[i].toLowerCase().startsWith(str)) {
        $('.dialog').append('<div>' + country[i] + '</div>');
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
    if (!$(e.target).is("input, .closeState")) {
      $('.dialogState').removeClass('openState');
    }
  });
  initDialog();
}
openDialog();








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


function changeText(toggle){
if(toggle.checked){
  toggle.nextElementSibling.style.color="green";
  toggle.nextElementSibling.style.fontWeight="bold";
}
else{
  toggle.nextElementSibling.style.color="";
    toggle.nextElementSibling.style.fontWeight="";

  }  
}


function checkRelation(ele,val)
{
  if(val=='Other')
  {
    var box = document.createElement('INPUT');
    box.className='col';
    box.id='otherRelation';
    ele.parentElement.appendChild(box);
  }

  else
    {
      if(document.body.contains(document.getElementById('otherRelation')))
      {
        var elem=document.getElementById('otherRelation');
       elem.parentNode.removeChild(elem);
      }
    }
}


</script>

   <script src="<?= site_url('assets/js/fstdropdown.js')?> "></script>
    <script type="text/javascript" src="<?= base_url('assets/js/notify.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/alertify.js') ?>"></script>


<!-- script for workexperience table -->
<script>
$(document).ready(function () {
    
    var counter= <?php echo $counter; ?>+1;

    $("#addrow").on("click", function () {
        var newRow = $("<tr class='row'>");
        var cols = "";
        cols +='<td class="col"><input type="text" id="organization" name="organization" class="form-control"  /></td>';
        cols +='<td class="col"><input type="text" id="responsibility" name="responsibility" class="form-control"  /></td>';
        cols +='<td class="col"><input type="text" id="position" name="position" class="form-control"  /></td>';
        cols +='<td class="col"><input type="date" value="<?php echo Date('Y-m-d');?>" max="<?php echo Date('Y-m-d');?>" id="from_date" name="from_date" class="form-control"  /></td>';
        cols +='<td class="col"><input type="date" value="<?php echo Date('Y-m-d');?>" max="<?php echo Date('Y-m-d');?>" id="to_date" name="to_date" class="form-control"  /></td>';
        cols +='<td class="col"><input type="text" id="contact_person_number" name="contact_person_number" class="form-control"  /></td>';
        cols +='<td  class="col-sm-1"><i class="ibtnDel fas fa-trash text-danger newExp"></td> ';

           


        
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });





});



</script>

<!-- script for exp table ends here -->


<script>
 $('#expTable').on('click', 'i.newExp', function(e){
   $(this).closest('tr').remove()
})


function confirmExpDel(id='',vaule=''){
                  var h5 = $("<p/>").append("Are you sure?");
$.notify.addStyle('foo', {
  html: 
    "<div>" +
      "<div class='clearfix'>" +
        "<div class='title' data-notify-html='title'/>" +
        "<div class='buttons'>" +
          "<button class='no btn-danger' ><i class=\"fas fa-times\"> </i></button>" +
          "<button class='yes btn-success'><i class=\"fas fa-check\"> </i></button>" +
        "</div>" +
      "</div>" +
    "</div>"
});

//listen for click events from this style
$(document).on('click', '.notifyjs-foo-base .no', function() {
  //no function
  $(this).trigger('notify-hide');
});
$(document).on('click', '.notifyjs-foo-base .yes', function() {
  // yes function

//start of deleting experience
  deleteExp(); 
// end of deleting experience

    $(this).closest("tr").remove();       
        counter -= 1;
  //hide notification
  $(this).trigger('notify-hide');
});
                  $('#'+id).notify({
                  title: h5,
                  button: 'YES'
                  }, { 
                  style: 'foo',
                  autoHide: false,
                  clickToHide: false,
                  position:'left middle ',
                  });

                }
                </script>
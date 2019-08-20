 <!-- form -->
  <div class="contents">
    
    <div class="con-head sp-btn">
      <h4>Substitute Application Form</h4>
      <a href="<?= site_url('employee/dashboard'); ?>" id="small-link"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> &nbsp;Go back to Dashboard</a>
    </div>
    
    <div class="box">
      <div class="box-head">
        <p class="form-title"> Add Substitute Leave </p>
        <div class="arch-msg-div">
        
        </div>
      </div>
      <div class="box-body">
        <form class="form" action="<?= site_url('employee/substitute_leave_form'); ?>" method="POST" id="substitute_leave_form">
          <input type="hidden" name="emp_id" value="">
          <div class="form-div">
            <label>From: </label>
            <input type="Date" name="" class="col-md-3"  max="<?php echo Date('Y-m-d'); ?>">
          </div>
           <div class="form-div">
            <label>To: </label>
            <input type="Date" name="" class="col-md-3" max="<?php echo Date('Y-m-d'); ?>">
          </div>

       <div class="sub-can" id="submit">
              <input type="submit" name="submitLeave" class="sub" value="Submit" >
        </div>
        </form>
      </div>
    </div>

  </div>

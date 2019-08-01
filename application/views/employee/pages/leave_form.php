 <!-- form -->
  <div class="contents">
    <div class="con-head">
      <h4>Application Form</h4>
    </div>
    <div class="box">
      <div class="box-head">
        <p>Leave Application Form</p>
        <div class="arch-msg-div">
          <?php if (isset($valid) && $valid == TRUE) { ?>
            <div class="arch-msg"><span><i class="fa fa-check" aria-hidden="true"></i></span><div class="msg-text"><p>Request Successful !</p>Your request has been successflly sent.</div></div>
          <?php } ?>
        </div>
      </div>
      <div class="box-body">
        <form class="form" action="<?= site_url('employee/leave_form'); ?>" method="POST">
          <!-- type of leave -->
          <div class="form-div">
            <label>Type of Leave</label>
            <select name="leave_id" id="leave_name">
              <?php foreach ($leaves as $value) {
                echo '<option value="' . $value['leave_id']. '">' . $value['leave_name']. '</option>';
              }   
              ?>
            </select>
          </div>
          <div class="form-ckbx">
            <label>Half / Full day leave</label>
            <div>
              <div>
                <input type="radio" name="duration_type" id="half-day" value="half" checked="checked">
                <label>Half Day</label>
              </div>
              <div>
                <input type="radio" name="duration_type" id="full-day" value="full">
                <label>Full Day</label> 
              </div>
              <div>
                <input type="radio" name="duration_type" id="multiple-days" value="multiple" disabled="disabled">
                <label>Multiple Days</label>
              </div>
            </div>
          </div>
          <div class="sp-btn leave-date">
            <div class="form-div">
              <label>From</label>
              <input type="date" name="from_date" id="from_date" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="form-div">
              <label>To</label>
              <input type="date" name="to_date" id="to_date" disabled="disabled" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="form-div">
              <label>No. of Days</label>
              <input type="text" name="" disabled="disabled" value="0.5" id="duration">
            </div>
          </div>
          <div class="form-div">
            <label>Duty Performed by</label>
            <select name="duty_performed_by" id="substitute">
              <?php 
                foreach ($duty_performed_by as $value) {
                  if ($value['emp_id'] != $_SESSION['user_id'])
                    echo '<option value=' . $value['emp_id'] . '>' . $value['first_name'] .' '. $value['middle_name'] .' '. $value['last_name'] . '</option>';
                }
              ?>
            </select>
          </div>
          <div class="form-div">
            <label>Reason for Leave <span class="opt"></span></label>
            <textarea rows="5" name="reason" id="reason"> </textarea>
          </div>
            <div class="sub-can">
              <input type="submit" name="submit" class="sub" value="Submit">
            </div>
        </form>
      </div>
    </div>
  </div>

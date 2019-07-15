 <!-- form -->
  <div class="contents">
    <div class="con-head">
      <h4>Application Form</h4>
    </div>
    <div class="box">
      <div class="box-head">
        <p>Leave Application Form</p>
      </div>
      <div class="box-body">
        <form class="form">
          <!-- designation -->
          <div class="form-div">
            <label>Designation</label>
            <input type="text" name="designation" id="designation">
          </div>

          <!-- type of leave -->
          <div class="form-div">
            <label>Type of Leave</label>
            <select name="type" id="type">
              <option>Casual Leave</option>
              <option>Sick Leave</option>
              <option>Substitute Leave</option>
              <option>Annual Leave</option>
              <option>Others</option>
            </select>
          </div>
          <div class="form-ckbx">
            <label>Half / Full day leave</label>

            <div>
              <div>
                <input type="radio" name="daytime" id="daytime" checked="checked">
                <label>Full Day Leave</label> 
              </div>
              <div>
                <input type="radio" name="daytime" id="daytime"   >
                <label>Half Day Leave</label>
              </div>
            </div>
          </div>
          <div class="form-div">
            <label>From</label>
            <input type="date" name="from_date" id="from_date">
          </div>
          <div class="form-div">
            <label>To</label>
            <input type="date" name="to_date" id="to_date">
          </div>
          <div class="form-div">
            <label>No. of Days</label>
            <input type="text" name="days" disabled="disabled" placeholder="5" id="duration">
          </div>
          <div class="form-div">
            <label>Substitute Staff</label>
            <select name="substitute" id="substitute">
              <option>Anonymous 1</option>
              <option>Anonymous 2</option>
              <option>Anonymous 3</option>
              <option>Anonymous 4</option>
              <option>Anonymous 5</option>
            </select>
          </div>
          <div class="form-div">
            <label>Reason for Leave <span class="opt"><i>(Optional)</i></span></label>
            <textarea rows="5" name="reason" id="reason"> </textarea>
          </div>
           <div class="form-div">
            <div class="sub-can">
              <input type="button" name="" value="Submit" class="sub">
            </div>
           </div>
        </form>
      </div>
    </div>
  </div>

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
          <div class="form-div">
            <label>Type of Leave</label>
            <select>
              <option>Casual Leave</option>
              <option>Sick Leave</option>
              <option>Substitute Leave</option>
              <option>Annual Leave</option>
              <option>Others</option>
            </select>
          </div>
          <div class="form-ckbx">
            <label>Half / Full day leave</label>
            <!-- <select>
              <option>None</option>
              <option>Full Day</option>
              <option>Half Day</option>
            </select> -->
            <div>
              <div>
                <input type="radio" name="day" checked="checked">
                <label>Full Day Leave</label> 
              </div>
              <div>
                <input type="radio" name="day">
                <label>Half Day Leave</label>
              </div>
            </div>
          </div>
          <div class="form-div">
            <label>From</label>
            <input type="date" name="">
          </div>
          <div class="form-div">
            <label>To</label>
            <input type="date" name="">
          </div>
          <div class="form-div">
            <label>No. of Days</label>
            <input type="text" name="" disabled="disabled" placeholder="5">
          </div>
          <div class="form-div">
            <label>Duty Performed By</label>
            <select>
              <option>Anonymous 1</option>
              <option>Anonymous 2</option>
              <option>Anonymous 3</option>
              <option>Anonymous 4</option>
              <option>Anonymous 5</option>
            </select>
          </div>
          <div class="form-div">
            <label>Reason for Leave <span class="opt"><i>(Optional)</i></span></label>
            <textarea rows="5"></textarea>
          </div>
           <div class="form-div">
            <label></label>
            <div class="sub-can">
              <input type="submit" name="" value="Submit" class="sub">
              <input type="submit" name="" value="Cancel" class="can">
            </div>
           </div>
        </form>
      </div>
    </div>
  </div>

 <!-- form -->
 <?php extract($leaveDetail);?>
  <div class="contents">
    <div class="con-head">
      <h4>Leave Details</h4>
    </div>
    <div class="box">
      <div class="box-head">
        <p>Leave Details for <?php echo $leave_name;?></p>
      </div>
      <div class="box-body">
        <div class="leave-dt">
          <div class="dt-part">
            <div class="pt-1">Package Name</div>
            <div class="pt-2">:</div>
            <div class="pt-3"><?php echo $package_name; ?></div>
          </div>
         <div class="dt-part">
            <div class="pt-1">Total No. of Days</div>
            <div class="pt-2">:</div>
            <div class="pt-3"><?php echo $duration; ?></div>
          </div>
          <div class="dt-part">
            <div class="pt-1">No of Leaves taken</div>
            <div class="pt-2">:</div>
            <div class="pt-3"><?php echo $taken;?></div>
          </div>
          <div class="dt-part">
            <div class="pt-1">No of Leaves Remaining</div>
            <div class="pt-2">:</div>
            <div class="pt-3"><?php echo $remain_days;?></div>
          </div> 
        </div>
      </div>
    </div>
    <div class="con-head">
      <h4>Messages</h4>
    </div>
    <div class="box">
      <div class="box-head">
        <p>All Messages</p>
      </div>
      <div class="box-body" style="overflow-x:auto;">
        <table class="table">
           <thead>
            <tr>
              <th>Type of Leave</th>
              <th>From</th>
              <th>To</th>
              <th>No. of Days</th>
              <th>Duty Performed by</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Casual</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>6</td>
              <td>Anonymous</td>
              <td><span class="pending">Pending</span></td>
            </tr>
            <tr>
              <td>Casual</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>6</td>
              <td>Anonymous</td>
              <td><span class="pending">Pending</span></td>
            </tr>
            <tr>
              <td>Casual</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>6</td>
              <td>Anonymous</td>
              <td><span class="granted">Approved</span></td>
            </tr>
            <tr>
              <td>Casual</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>6</td>
              <td>Anonymous</td>
              <td><span class="granted">Approved</span></td>
            </tr>
            <tr>
              <td>Casual</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>6</td>
              <td>Anonymous</td>
              <td><span class="denied">Denied</span></td>
            </tr>
            <tr>
              <td>Casual</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>6</td>
              <td>Anonymous</td>
              <td><span class="granted">Approved</span></td>
            </tr>
             <tr>
              <td>Casual</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>6</td>
              <td>Anonymous</td>
              <td><span class="granted">Approved</span></td>
            </tr>
             <tr>
              <td>Casual</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>6</td>
              <td>Anonymous</td>
              <td><span class="pending">Pending</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

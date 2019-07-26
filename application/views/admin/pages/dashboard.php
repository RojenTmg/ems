  <div class="contents">
    <div class="con-head">
      <h4>Dashboard</h4>
    </div>
    <div class="con-sum">
          <div class="sum-item">
          <a href="<?= base_url('admin');?>/employee_list">
            <div class="item-1 sp-btn">
              <div>
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <div class="hgh-lgt">
                <div class="hl-title">Total Employees</div>
                <div class="hl-cont"><?php echo $count; ?></div>
              </div>
            </div>
             <div class="item-2 sp-btn">
                <div><span>Since this month</span></div>
                <div><span><?php echo $emp_added_this_month; ?> emp. added</span></div>
            </div>
          </a>
          </div>
          <div class="sum-item">
          <a href="<?= base_url('admin');?>/employee_list">
            <div class="item-1 sp-btn">
              <div>
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </div>
              <div class="hgh-lgt">
                <div class="hl-title">Assign Employee</div>
                <div class="hl-cont"><span><em> (no. of emp. left to be assigned) &nbsp;</em></span><?php echo $remaining; ?></div>
              </div>
            </div>
             <div class="item-2 sp-btn">
                <div><span>Since this month</span></div>
                <div><span>5.35%</span></div>
            </div>
          </a>
          </div>
          <!-- <div class="sum-item">
          <a href="<?= base_url('admin'); ?>">
            
          </a>
          </div>
          <div class="sum-item">
          <a href="<?= base_url('admin'); ?>">
            
          </a>
          </div> -->
    </div>
        <div>
      <div class="con-sub-head">
          <h5>Leave Details</h5>
      </div>
      <div class="box">
      <div class="box-head">
        <div class="sp-btn">
          <p>Employees currently on leave</p>
          <a href="<?= base_url('admin'); ?>">View All</a>
        </div>
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
              <th>Recommended By</th>
              <th>Approved By</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Casual</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>2</td>
              <td>Graham Mathew</td>
              <td>Asad Cox</td>
              <td>Andrew Dimitri</td>
            </tr>
            <tr>
              <td>Yearly</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>1</td>
              <td>Adam Stevensor</td>
              <td>Benjamin Corke</td>
              <td>Japhet Horton</td>
            </tr>
            <tr>
              <td>Subtitutional</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>3</td>
              <td>Aneseley Brown</td>
              <td>Daneil Gridlestor</td>
              <td>Ian Riggs</td>
            </tr>
            <tr>
              <td>Sick</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>7</td>
              <td>Gerrsd Swan</td>
              <td>Jyane Dodd</td>
              <td>Jaime Well</td>
            </tr>
            <tr>
              <td>Casual</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>4</td>
              <td>Lalita Hunt</td>
              <td>Michael Su</td>
              <td>Peter Gornall</td>
            </tr>
            <tr>
              <td>Yearly</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>6</td>
              <td>Kapil Hunt</td>
              <td>Mike Jhonson</td>
              <td>Mario Dave</td>
            </tr>
            <tr>
              <td>Substitutional</td>
              <td>06-19-2019</td>
              <td>06-25-2019</td>
              <td>1</td>
              <td>Peter Marquis</td>
              <td>Justin Brown</td>
              <td>Mohammad Albert</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </div>  
  </div>  
    
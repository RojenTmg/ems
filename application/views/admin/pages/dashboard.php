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


<!-- leave requested by self starts here -->
    <div>
      <div class="con-sub-head">
          <h4>Leave Requests</h4>
      </div>
      <div class="box">
      <div class="box-head">
        <p>Recently Requested Leaves by Employees</p>
      </div>
      <div class="box-body"  style="overflow-x:auto; padding-top: 0px;">
        <table class="table table-bordered hover employee_table" id="datatable1" >
          <thead class="thead-dark">
            <tr>
              <th id="dt-head" style="width: 10%;"><div class="sp-btn"><span>Type of Leave</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 15%;"><div class="sp-btn"><span>From</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" width="5%" ><div class="sp-btn"><span>Type</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 15%;"><div class="sp-btn"><span>To</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 8%;"><div class="sp-btn"><span>No. of Days</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>

              <th id="dt-head" style="width: 8%;"><div class="sp-btn"><span>Recommender</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 8%;"><div class="sp-btn"><span>Approver</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>

              <th id="dt-head" style="width: 15%;"><div class="sp-btn"><span>Duty Performed by</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 5%; text-align: center;"><div class="sp-btn"><span>Status</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach ($employee_leaves as $value) { ?>
                  <tr>
                    <td><?php echo $value['leave_name']; ?></td>
                    <td><?php echo $value['from_date']; ?></td>
                    <td><?php echo $value['duration_type']; ?></td>
                    <td><?php echo $value['to_date']; ?></td>
                    <td><?php if ($value['to_date'] != NULL) echo round((strtotime($value['to_date']) - strtotime($value['from_date'])) / 86400) + 1; ?></td>
                    <td><?php echo $this->Admin_model->getName($value['recommender_id']);?>

                      <?php  $CI =& get_instance(); $check=$CI->checkstatus($value['recommender_id']);
                        if($check=="present"){?>
                        <i class="fa fa-check-circle " style="color: green" aria-hidden="true"></i>
                       <?php } else{ ?>
                        <i class="fa fa-info-circle " style="color: red" aria-hidden="true"></i>
                       <?php }

                      ?>
                    </td>
                    <td><?php echo $this->Admin_model->getName($value['approver_id']);?>
                      <?php  $CI =& get_instance(); $check=$CI->checkstatus($value['recommender_id']);
                        if($check=="present"){?>
                        &nbsp;&nbsp;<i class="fa fa-check-circle " style="color: green" aria-hidden="true"></i>
                       <?php } else{ ?>
                      &nbsp;&nbsp;  <i class="fa fa-info-circle " style="color: red" aria-hidden="true"></i>
                       <?php }
                       ?>
                    </td>
                    <td><?php echo $value['first_name'] .' '. $value['middle_name'] .' '. $value['last_name']; ?></td>
                    <td><?php if ($value['is_approved'] == 'denied' || $value['is_recommended'] == 'denied') { echo '<span class="denied">Denied</span>';  } else if ($value['is_approved'] == 'approved') { echo '<span class="granted">Approved</span>'; } else if ($value['is_recommended'] == 'recommended') { echo '<span class="pending">Recommended</span>';  } else { echo '<span class="pending">Pending</span>';} ?></td>
                  </tr>
                <?php } ?>
          </tbody>
        </table>

      </div>
    </div>
    </div>
  </div>  
<!-- leave requested by self ends here -->




      </div>  
    
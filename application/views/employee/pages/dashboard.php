  <div class="contents">
    <div class="con-head">
      <h4>Leaves</h4>
    </div>
    <div class="con-sum">
          <div class="sum-item">
          <a href="<?= base_url('employee'); ?>/leave_details">
            <div class="item-1 sp-btn">
              <div>
                <i class="fa fa-creative-commons" aria-hidden="true"></i>
              </div>
              <div class="hgh-lgt">
                <div class="hl-title">Casual Leave</div>
                <div class="hl-cont">5<span><em> out of &nbsp;</em></span>6<span><em> days </em></span></div>
              </div>
            </div>
             <div class="item-2 sp-btn">
                <div><span>Since this year</span></div>
                <div><span>5.35%</span></div>
            </div>
          </a>
          </div>
          <div class="sum-item">
          <a href="<?= base_url('employee'); ?>/leave_details">
            <div class="item-1 sp-btn">
              <div>
                <i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i>
              </div>
              <div class="hgh-lgt">
                <div class="hl-title">Sick Leave</div>
                <div class="hl-cont">3<span><em> out of &nbsp;</em></span>6<span><em> days </em></span></div>
              </div>
            </div>
             <div class="item-2 sp-btn">
                <div><span>Since this year</span></div>
                <div><span>5.35%</span></div>
            </div>
          </a>
          </div>
          <div class="sum-item">
          <a href="<?= base_url('employee'); ?>/leave_details">
            <div class="item-1 sp-btn">
              <div>
                <i class="fa fa-globe" aria-hidden="true"></i>
              </div>
              <div class="hgh-lgt">
                <div class="hl-title">Annual Leave</div>
                <div class="hl-cont">10<span><em> out of &nbsp;</em></span>18<span><em> days </em></span></div>
              </div>
            </div>
             <div class="item-2 sp-btn">
                <div><span>Since from the start</span></div>
                <div><span>5.35%</span></div>
            </div>
          </a>
          </div>
          <div class="sum-item">
          <a href="<?= base_url('employee'); ?>/leave_details">
            <div class="item-1 sp-btn">
              <div>
                <i class="fa fa-subscript" aria-hidden="true"></i>
              </div>
              <div class="hgh-lgt">
                <div class="hl-title">Substitute Leave</div>
                <div class="hl-cont">3<span><em> out of &nbsp;</em></span>6<span><em> days </em></span></div>
              </div>
            </div>
             <div class="item-2 sp-btn">
                <div><span>Since this year</span></div>
                <div><span>5.35%</span></div>
            </div>
          </a>
          </div>
    </div>
    <div>
      <div class="con-sub-head">
          <h5>Recent Messages</h5>
      </div>
      <div class="box">
      <div class="box-head">
        <div class="sp-btn">
          <p>Recent Messages</p>
        </div>
      </div>
      <div class="box-body" style="overflow-x:auto;">
        <table class="table table-bordered hover employee_table" id="datatable1" >
          <thead class="thead-dark">
            <tr>
              <th id="dt-head" style="width: 2%;"><div class="sp-btn"><span>Type of Leave</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 15%;"><div class="sp-btn"><span>From</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 15%;"><div class="sp-btn"><span>To</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 5%;"><div class="sp-btn"><span>No. of Days</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 15%;"><div class="sp-btn"><span>Duty Performed by</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 5%; text-align: center;">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach ($employee_leaves as $value) { ?>
                  <tr>
                    <td><?php echo $value['leave_name']; ?></td>
                    <td><?php echo $value['from_date']; ?></td>
                    <td><?php echo $value['to_date']; ?></td>
                    <td><?php if ($value['to_date'] != NULL) echo round((strtotime($value['to_date']) - strtotime($value['from_date'])) / 86400); ?></td>
                    <td><?php echo $value['first_name'] .' '. $value['middle_name'] .' '. $value['last_name']; ?></td>
                    <td><?php ?> <span class="pending">Pending</span> </td>
                  </tr>
                <?php } ?>
          </tbody>
        </table>

      </div>
    </div>
    </div>
  </div>  

  <script type="text/javascript">
    $(document).ready(function(){
       $('#datatable1').DataTable({
          /* Disable initial sort */
            "aaSorting": [],

         /* disable sorting on specific columns */
         // 'columnDefs': [ {
            // 'targets': [1], /* column index */
            // 'orderable': false, /* true or false */
         // }]
       });
    });
  </script>
    
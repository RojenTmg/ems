  <div class="contents">
    <div class="con-head">
      <h4>Dashboard</h4>
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

    <?php if ($_SESSION['is_approver'] == 1) { ?>
    <div>
      <div class="con-head">
      <h5>Approve Leave</h5>
    </div>
    <div class="box">
      <div class="box-head">
        <p>Approve Leaves</p>
        <div class="arch-msg-div"></div>
      </div>
        <div class="box-body" style="overflow-x:auto;">
        <table class="table table-bordered hover employee_table" id="datatable2" >
          <thead class="thead-dark">
            <tr>
              <th id="dt-head" style="width: 13%;"><div class="sp-btn"><span>Employee Name</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 10%;"><div class="sp-btn"><span>Type of Leave</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 10%;"><div class="sp-btn"><span>From</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 10%;"><div class="sp-btn"><span>To</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 10%;"><div class="sp-btn"><span>No. of Days</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 13%;"><div class="sp-btn"><span>Duty Performed by</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 13%;"><div class="sp-btn"><span>Recommended by</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 10%; text-align: center;">Status</th>
              <th id="dt-head" style="width: 10%; text-align: center;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach ($employee_leaves as $value) { ?>
                  <tr id="<?php echo $value['id']; ?>">
                    <td><?php echo $value['e_first_name'] .' '. $value['e_middle_name'] .' '. $value['e_last_name']; ?></td>
                    <td><?php echo $value['leave_name']; ?></td>
                    <td><?php echo $value['from_date']; ?></td>
                    <td><?php echo $value['to_date']; ?></td>
                    <td><?php if ($value['to_date'] != NULL) echo round((strtotime($value['to_date']) - strtotime($value['from_date'])) / 86400) + 1; ?></td>
                    <td><?php echo $value['dpb_first_name'] .' '. $value['dpb_middle_name'] .' '. $value['dpb_last_name']; ?></td>
                    <td><?php echo $value['eaid_first_name'] .' '. $value['eaid_middle_name'] .' '. $value['eaid_last_name']; ?></td>
                    <td class="status"><?php if ($value['is_approved'] == 'pending') { echo '<span class="pending">Pending</span>'; } else if ($value['is_approved'] == 'granted') { echo '<span class="granted">Granted</span>';  } else if ($value['is_approved'] == 'denied') { echo '<span class="denied">Denied</span>';  } ?> </td>
                    <td>
                      <button class="btn-archive tooltip1" title="Approve" id="<?php echo $value['emp_id']; ?>" style="color: #17f089;" <?php if ($value['is_approved'] == 'granted') { echo ' disabled="disabled"';  }?>><i class="fa fa-check" aria-hidden="true"></i>
                        <div class="tooltiptext">
                          <p>Are you sure?</p>
                          <span class="tip-can">Cancel</span>
                          <span class="tip-arch tip-res" onclick="leaveApproveF(<?php echo $value['id']; ?>)" >Approve</span>
                        </div>
                      </button>
                      <button class="btn-edit" title="Deny"><i class="fa fa-ban" aria-hidden="true" style="color: #dc3545;"></i></button>
                    </td>
                  </tr>
                <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    </div>
    <?php } ?>


    <div>
      <div class="con-sub-head">
          <h5>Leave Requests</h5>
      </div>
      <div class="box">
      <div class="box-head">
        <div class="sp-btn">
          <p>Recent Leave Requests</p>
        </div>
      </div>
      <div class="box-body" style="overflow-x:auto;">
        <table class="table table-bordered hover employee_table" id="datatable1" >
          <thead class="thead-dark">
            <tr>
              <th id="dt-head" style="width: 10%;"><div class="sp-btn"><span>Type of Leave</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
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
                    <td><?php if ($value['to_date'] != NULL) echo round((strtotime($value['to_date']) - strtotime($value['from_date'])) / 86400) + 1; ?></td>
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

  <div id="simpleModal" class="modal">
    <div class="modal-content" >
        <div class="modal-header">
          <h4 class="modal-title">Are you sure?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="closeModal()">&times;</button>
        </div>
        <div class="modal-body">
          <div class="md-form sp-btn">
            <input type="hidden" name="id" id="leave_id" value="">
            <label>Reason:</label>
            <textarea style="padding: 10px; width: 100%;" rows="1" placeholder="Any reason?"></textarea>
          </div>
        </div>
        <div class="modal-footer" style="border:none;">
          <button type="button" class="btn btn-info" data-dismiss="modal" onclick="closeModal()">Cancel</button>
          <input type="button" class="btn btn-danger" value="Deny Confirm" onclick="denyApprove()" id="deny-approve">
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

     $(document).ready(function(){
         $('#datatable2').DataTable({
            /* Disable initial sort */
              "aaSorting": [],

           /* disable sorting on specific columns */
           // 'columnDefs': [ {
              // 'targets': [1], /* column index */
              // 'orderable': false, /* true or false */
           // }]
         });
      });

  $('.tip-can').click(function(ev) {
    $(this).parent().css({"display": "none"});
    ev.stopPropagation();
  });

  $('.table tr .btn-archive').click(function(ev) {
    $(this).children()[1].style.display = 'block';
    ev.stopPropagation();
  });

  $('.table tbody tr').click(function() {
    // var id = $(this).attr('id');
    // window.location =  '<?= site_url('admin/employee_detail/'); ?>' + id;
  });

  $('.table tr .btn-edit').click(function(ev){
    $('.modal').css("display", "block");
    var id = $(this).closest('tr').attr('id');
    $('#leave_id').val(id);
    ev.stopPropagation();
  });

  $('#deny-approve').click(function(){
    var modal = document.getElementById('simpleModal');
    $('.md-form textarea').val('');
    modal.style.display = 'none';

    var id = $('.md-form input').val();
    $('#datatable2').find('#'+id+'').find('.status span').remove(); 
    $('#datatable2').find('#'+id+'').find('.status').append('<span class="denied">Denied</span>'); 

    $('.arch-msg-div').append('<div class="arch-msg"><span><i class="fa fa-check" aria-hidden="true"></i></span><div class="msg-text"><p>Denial Successful !</p>Leave is denied successfully.</div></div>');
    $('.arch-msg').bind('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function(e) { $('.arch-msg-div .arch-msg').remove(); });
   });

   $('.table tr .btn-archive .tip-arch').click(function(){
    var id = $(this).closest('tr').attr('id');
    // $(this).closest('tr').remove(); 

    $(this).closest('tr').find('.status span').remove(); 
    $(this).closest('tr').find('.status').append('<span class="granted">Granted</span>'); 
    $(this).closest('.tooltiptext').remove(); 
  
    // $(this).closest('tr').find('.btn-archive')attr('disabled', true);

    $('.arch-msg-div').append('<div class="arch-msg"><span><i class="fa fa-check" aria-hidden="true"></i></span><div class="msg-text"><p>Grant Successful !</p>Leave is granted successfully.</div></div>');
      $('.arch-msg').bind('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function(e) { $('.arch-msg-div .arch-msg').remove(); });
     });

  $('.arch-msg-div').click(function(){
    $('.arch-msg-div .arch-msg').addClass('msg-remove');
    $('.arch-msg').bind('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function(e) { $('.arch-msg-div .arch-msg').remove(); });
  });

  function closeModal() {
    var modal = document.getElementById('simpleModal');
    $('.md-form textarea').val('');
    modal.style.display = 'none';
  }

  // window.addEventListener('click', outsideClick);
  
  // function outsideClick(e) {
  //   var modal = document.getElementById('simpleModal');
  //   if (e.target == modal) {
  //     modal.style.display = 'none';
  //   }
  // }



 

  </script>
    




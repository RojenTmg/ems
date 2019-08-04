<div class="contents">
    <div class="con-head">
      <h4>Dashboard</h4>
    </div>
    <div class="con-sum">
        
      
       <?php 
       if(count($leavelist)==0)
       {?>
         <div class="con-sum mx-auto"> <h5 >No package assigned</h5></div>
       <?php } else {
       foreach ($leavelist as $index=>$leave) { ?>

          <div class="sum-item" id="leave-<?php echo $leave['leave_id'];?>">

          <a href="<?= base_url('employee'); ?>/leave_details/<?php echo $index;?>">
            <div class="item-1 sp-btn">
              <div>
                <i class="fa fa-creative-commons" aria-hidden="true"></i>
              </div>
              <div class="hgh-lgt">
                <div class="hl-title"><?php echo $leave['leave_name'];?></div>
                <div class="hl-cont"><?php echo $leave['remain_days'];?><span><em> out of &nbsp;</em></span><?php echo $leave['duration'];?><span><em> days </em></span></div>
              </div>
            </div>
             <div class="item-2 sp-btn">
                <div><span>Since this year</span></div>
                <div><span>5.35%</span></div>
            </div>
          </a>
          </div>
        
        <?php } } ?>

         
 

    </div>

  <!-- RECOMMENDATION LISTS  -->

  <div class="con-head">
  <h4>Recommendation Lists</h4>
  </div>

  <div>
  <div class="con-sub-head">
  <!-- <h5>Recent Messages</h5> -->  
  </div>
  <div class="box">
  <div class="box-head">
 
  </div>

    <!-- area to show success and erorr messages -->
    <div class="ml-3  alert alert-success alert-dismissible fade show" style="display: none;" id="messagediv">
      <p id="showmessage"></p>
      <button type="button" class="close" >&times;</button>
    </div>
    <!-- area finishes here -->

    <div class="lists">
  <div class="box-body" style="overflow-x:auto;">

  <table class="table table-bordered hover employee_table" id="datatable-recommender" >
  <thead >
  <tr>
  <th id="dt-head" width="20%"><div class="sp-btn"><span>Staff Name</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
  <th id="dt-head" width="10%"><div class="sp-btn"><span>Leave</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
  <th id="dt-head" width="10%" ><div class="sp-btn"><span>From</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
  <th id="dt-head" width="10%" ><div class="sp-btn"><span>To</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
  <th id="dt-head" width="10%" ><div class="sp-btn"><span>Type</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
  <th  id="dt-head" width="15%"><div class="sp-btn"><span>Performed by</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
  <th id="dt-head" width="10%" >Status</th>
  <th id="dt-head" width="15%" class="text-center;"  >Action</th>
  </tr>
  </thead>
  <tbody>
  <?php
  foreach ($recommendations as $posts) { ?>
  <tr>
  <td><?php echo $posts['first_name'].' '.$posts['middle_name']. ' '.$posts['last_name']  ; ?></td>
  <td><?php echo $posts['leave_name']; ?></td>
  <td><?php echo $posts['from_date']; ?></td>
  <td><?php echo $posts['to_date']; ?></td>
  <td><?php echo $posts['duration_type']; ?></td>

  <td><?php foreach ($duty_by as $key) {
  if($key['emp_id']==$posts['duty_performed_by'])
  {
  echo $key['first_name'].' '.$key['middle_name']. ' '. $key['last_name']; 
  } }?></td>

  <td><?php if($posts['is_recommended']=='pending'){?> <span class="pending">Pending</span> <?php } if($posts['is_recommended']=='recommended') {?><span class="granted">Recommended </span><?php } if($posts['is_recommended']=='denied') { ?><span class="denied">Denied </span> </td>
  <?php } ?>

  <td> 
  <?php if($posts['is_recommended']=='pending') {?>
  <button class="btn-archive tooltip1" title="Approve" id="<?php echo $posts['emp_id']; ?>"><i class="fa fa-check text-success" aria-hidden="true"></i>
      <div class="tooltiptext">
        <p>Are you sure?</p>
        <span class="tip-can">Cancel</span>
        <span class="tip-arch tip-res" onclick="recommendLeave(<?php echo $posts['id']; ?>)" >Approve</span>
        </div>
  </button> 

   
    <button type="button" class="btn-edit" data-toggle="modal" data-target="#exampleModalCenter<?php  echo $posts['id']; ?>">  <i class="fa fa-ban" aria-hidden="true" style="color: #dc3545;"></i> </button>
  <?php } else { ?>

    <button  class="btn-edit" data-toggle="modal" data-target="#deleteRecommendrequests<?php  echo $posts['id']; ?>">  <i class="fa fa-trash text-danger" aria-hidden="true"></i> </button>
  <?php } ?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter<?php  echo $posts['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Enter reason for denial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
          <div class="form-group">
          <input class="form-control" type="text" name="" id="denial_reason<?php  echo $posts['id']; ?>">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="denyLeaveFromRecommender(<?php echo $posts['id']; ?>)">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- modal ends -->

  <!-- modal for archive Recommend requests -->
  <div class="modal fade" id="deleteRecommendrequests<?php  echo $posts['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Confirm Archive ?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="archiveRecommendRecord(<?php echo $posts['id']; ?>)">Submit</button>
                </div>
              </div>
            </div>
          </div>
<!-- modal for archive Recommend requests ends here -->

  </td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- RECOMMENDATION LISTS END HERE -->


<!-- leave approval table starts -->
    <?php if ($_SESSION['is_approver'] == 1) { ?>
    <div>
      <div class="con-head">
      <h5>Approve Leave</h5>
    </div>
    <div class="box">
      <div class="box-head">
        <p>Leaves left to be Approved</p>
        <div class="arch-msg-div"></div>
      </div>
     
        <div class="box-body" style="overflow-x:auto;">
        <div id="lists-approvelist">
        <table class="table table-bordered hover employee_table" id="datatable-approval" >
          <thead class="thead-dark">
            <tr>
              <th id="dt-head" style="width: 13%;"><div class="sp-btn"><span>Employee Name</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 10%;"><div class="sp-btn"><span>Type of Leave</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 10%;"><div class="sp-btn"><span>From</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 10%;"><div class="sp-btn"><span>To</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" width="10%"><div class="sp-btn"><span>Type</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 10%;"><div class="sp-btn"><span>No. of Days</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 13%;"><div class="sp-btn"><span>Duty Performed by</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 13%;"><div class="sp-btn"><span>Recommended by</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 10%; text-align: center;">Status</th>
              <th id="dt-head" style="width: 10%; text-align: center;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach ($employee_leaves_approve as $value) { ?>
                  <tr id="<?php echo $value['id']; ?>">
                    <td><?php echo $value['e_first_name'] .' '. $value['e_middle_name'] .' '. $value['e_last_name']; ?></td>
                    <td><?php echo $value['leave_name']; ?></td>
                    <td><?php echo $value['from_date']; ?></td>
                    <td><?php echo $value['to_date']; ?></td>
                    <td><?php echo $value['duration_type']; ?></td>
                    <td><?php if ($value['to_date'] != NULL) echo round((strtotime($value['to_date']) - strtotime($value['from_date'])) / 86400) + 1; ?></td>
                    <td><?php echo $value['dpb_first_name'] .' '. $value['dpb_middle_name'] .' '. $value['dpb_last_name']; ?></td>
                    <td><?php echo $value['eaid_first_name'] .' '. $value['eaid_middle_name'] .' '. $value['eaid_last_name']; ?></td>
                    <td class="status"><?php if ($value['is_approved'] == 'pending') { echo '<span class="pending">Pending</span>'; } else if ($value['is_approved'] == 'approved') { echo '<span class="granted">Granted</span>';  } else if ($value['is_approved'] == 'denied') { echo '<span class="denied">Denied</span>';  } ?> </td>
                    <td>
                    <!-- check if approved or not and show buttons accordingly -->
                    <?php if($value['is_approved']=='pending') {?>
                      <button class="btn-archive tooltip1" title="Approve" id="<?php echo $value['emp_id']; ?>"><i class="fa fa-check text-success" aria-hidden="true"></i>
                        <div class="tooltiptext">
                          <p>Are you sure?</p>
                          <span class="tip-can">Cancel</span>
                          <span class="tip-arch tip-res" onclick="leaveApproveF('<?php echo $value['duration_type']; ?>', <?php echo $value['id']; ?>, <?php echo $value['e_id']; ?>, <?php echo $value['leave_id']; ?>,<?php if ($value['to_date'] != NULL) echo round((strtotime($value['to_date']) - strtotime($value['from_date'])) / 86400) + 1; ?>)" >Approve</span>
                        </div>
                      </button>

                      <button type="button" class="btn-edit" data-toggle="modal" data-target="#exampleModalCenterApprover<?php  echo $value['id']; ?>">  <i class="fa fa-ban" aria-hidden="true" style="color: #dc3545;"></i> </button>
                      <?php } else { ?>

                        <button  class="btn-edit" data-toggle="modal" data-target="#deleteApprovalrequests<?php  echo $value['id']; ?>">  <i class="fa fa-trash text-danger" aria-hidden="true"></i> </button>
                      <?php } ?>

          <!-- Modal for denial reason-->
          <div class="modal fade" id="exampleModalCenterApprover<?php  echo $value['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Enter reason for denial</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
              
                    <div class="form-group">
                    <input class="form-control" type="text" name="" id="denial_reason_approver<?php  echo $value['id']; ?>">
                    </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="denyLeaveFromApprover(<?php echo $value['id']; ?>)">Submit</button>
                </div>
              </div>
            </div>
          </div>
          <!-- modal for denial reason ends here -->

          <!-- modal for archive Approval requests -->
          <div class="modal fade" id="deleteApprovalrequests<?php  echo $value['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Confirm Archive ?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="archiveApprovalRecord(<?php echo $value['id']; ?>)">Submit</button>
                </div>
              </div>
            </div>
          </div>
          <!-- modal for archive Approval requests ends here -->
  </td>
                    </td>
                  </tr>
                <?php } ?>
          </tbody>
        </table>
      </div>
      </div>
    </div>
    </div>
    <?php } ?>
<!-- leave approval table ends here -->

<!-- leave requested by self starts here -->
    <div>
      <div class="con-sub-head">
          <h5>Leave Requests</h5>
      </div>
      <div class="box">
      <div class="box-head">
        <p>Recently Requested Leaves</p>
      </div>
      <div class="box-body" style="overflow-x:auto;">
        <table class="table table-bordered hover employee_table" id="datatable1" >
          <thead class="thead-dark">
            <tr>
              <th id="dt-head" style="width: 10%;"><div class="sp-btn"><span>Type of Leave</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 15%;"><div class="sp-btn"><span>From</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 15%;"><div class="sp-btn"><span>To</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" width="5%" ><div class="sp-btn"><span>Type</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th id="dt-head" style="width: 8%;"><div class="sp-btn"><span>No. of Days</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
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
                    <td><?php echo $value['duration_type']; ?></td>
                    <td><?php if ($value['to_date'] != NULL) echo round((strtotime($value['to_date']) - strtotime($value['from_date'])) / 86400) + 1; ?></td>
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
 


  <script type="text/javascript">
        $(document).ready(function(){
       $('#datatable-recommender').DataTable({
        "lengthMenu": [ [3,5, 10, 25, -1], [3,5, 10, 25, "All"]],
            "aaSorting": [],  });
    });
    $(document).ready(function(){
       $('#datatable1').DataTable({
          /* Disable initial sort */
            "aaSorting": [],        "lengthMenu": [ [3,5, 10, 25, -1], [3,5, 10, 25, "All"]],
         /* disable sorting on specific columns */
         // 'columnDefs': [ {
            // 'targets': [1], /* column index */
            // 'orderable': false, /* true or false */
         // }]
       });
    });
     $(document).ready(function(){
         $('#datatable-approval').DataTable({
            /* Disable initial sort */
              "aaSorting": [],        "lengthMenu": [ [3,5, 10, 25 ,-1], [3,5, 10, 25, "All"]],
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

  $('.arch-msg-div').click(function(){
    $('.arch-msg-div .arch-msg').addClass('msg-remove');
    $('.arch-msg').bind('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function(e) { $('.arch-msg-div .arch-msg').remove(); });
  });
  // function closeModal() {
  //   var modal = document.getElementById('simpleModal');
  //   $('.md-form textarea').val('');
  //   modal.style.display = 'none';
  // }
  // window.addEventListener('click', outsideClick);
  
  // function outsideClick(e) {
  //   var modal = document.getElementById('simpleModal');
  //   if (e.target == modal) {
  //     modal.style.display = 'none';
  //   }
  // }
 
  </script>
<div class="contents">
  <div class="con-sub-head sp-btn">
      <h5>Staff</h5>
      <a href="http://localhost/ems/admin" id="small-link"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> &nbsp;Go back to Dashboard</a>
  </div>
  <div class="box">
  <div class="box-head">
    <div class="sp-btn">
<!-- user icon -->
       <p><i class="fa fa-users" aria-hidden="true" style="font-size: 0.9em;"></i> Registered Users</p>
       <div class="arch-msg-div"></div>
         <a class="float-right" href="http://localhost/ems/admin/archived_employees" id="small-link"> View Archived Employees</a>
  
    </div>
  </div>
  <div class="box-body table-responsive" style="overflow-x:auto;">
    <table class="table table-bordered hover employee_table" >
      <thead class="thead-dark">
        <tr>
          <th  style="width: 2%; background-color: #444a50;">Id</th>
          <th  style="width: 2%; background-color: #444a50;">Title</th>
          <th  style="width: 25%; background-color: #444a50;">Name</th>
          <th  style="width: 15%; background-color: #444a50;">Department</th>
          <th  style="width: 15%; background-color: #444a50;">Nationality</th>
          <th  style="width: 15%; background-color: #444a50;">Highest Degree</th>
          <th style="width: 15%; background-color: #444a50;">Action</th>

        </tr>
      </thead>
      <tbody>
        <?php 
        // echo $posts;  die();
          foreach ($posts as $post) {
            // check archived or not
            if($post['is_active']==1){            ?>
            <tr id="<?php echo $post['emp_id']; ?>">
              <td><?php echo $post['emp_id']; ?></td>
              <td><?php echo $post['title']; ?></td>
              <td><?php echo $post['first_name'] . ' ' . $post['middle_name'] . ' ' .  $post['last_name']; ?></td>
              <td><?php echo $post['department_name']; ?></td>
              <td><?php echo $post['nationality']; ?></td>
              <td><?php echo $post['highest_degree']; ?></td>
              <td>
                <button class="btn-edit" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                <button class="btn-archive tooltip1" title="Delete" id="<?php echo $post['emp_id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i>
                  <div class="tooltiptext">
                    <p>Are you sure?</p>
                    <span class="tip-can">Cancel</span>
                    <span class="tip-arch" id="<?php echo $post['emp_id']; ?>" onclick="archiveEmployee(<?php echo $post['emp_id']; ?>)" >Delete</span>
                  </div>
                </button>
              </td>
            </tr>

          <?php
          }
          }
        ?>
      </tbody>
    </table>
  </div>
</div>
<div class="page-limit">
    <?= $this->pagination->create_links(); ?>
</div>
</div>




<script type="text/javascript">

  $('.tip-can').click(function(ev) {
    $(this).parent().css({"display": "none"});
    ev.stopPropagation();
  });

  $('.table tr .btn-archive').click(function(ev) {
    $(this).children()[1].style.display = 'block';
    ev.stopPropagation();
  });

  $('.table tbody tr').click(function() {
    var id = $(this).attr('id');
    window.location =  '<?= site_url('admin/employee_detail/'); ?>' + id;
  });

  $('.table tr .btn-edit').click(function(ev){
    var id = $(this).closest('tr').attr('id');
    window.location =  '<?= site_url('admin/manage_employee/'); ?>' + id;
    ev.stopPropagation();
  });

  $('.table tr .btn-archive .tip-arch').click(function(){
    $(this).closest('tr').remove();
    $('.arch-msg-div').append('<div class="arch-msg">Employee Deleted Successfully</div>');

    $('.arch-msg').bind('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function(e) { $('.arch-msg-div .arch-msg').remove(); });
  });

  // $('.tip-arch').click(function(ev) {
  //   alert($(this).attr('id'));
  //   ev.stopPropagation();
  // });
</script>
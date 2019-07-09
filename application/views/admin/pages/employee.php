<div class="contents">
  <div class="con-sub-head">
      <h5>Recently Added Employee</h5>
  </div>
  <div class="box">
  <div class="box-head">
    <div>
      <p>Recent Employees</p>
    </div>
  </div>
  <div class="box-body" style="overflow-x:auto;">
    <table class="table hover">
      <thead>
        <colgroup>
          <col width="30px;">
          <col width="30px;">
        </colgroup>
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Name</th>
          <th>Department</th>
          <th>Nationality</th>
          <th>Highest Degree</th>
          <th style="padding-left: 50px;">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($posts as $post) {
            ?>
            <tr id="<?php echo $post['emp_id']; ?>">
              <td><?php echo $post['emp_id']; ?></td>
              <td><?php echo $post['title']; ?></td>
              <td><?php echo $post['first_name'] . ' ' . $post['middle_name'] . ' ' .  $post['last_name']; ?></td>
              <td><?php echo $post['department_id']; ?></td>
              <td><?php echo $post['nationality']; ?></td>
              <td><?php echo $post['highest_degree']; ?></td>
              <td>
                <button class="btn-edit" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                <button class="btn-archive tooltip1" title="Archive" id="<?php echo $post['emp_id']; ?>"><i class="fa fa-archive" aria-hidden="true"></i>
                  <div class="tooltiptext">
                    <p>Are you sure?</p>
                    <span class="tip-can">Cancel</span>
                    <span class="tip-arch" id="<?php echo $post['emp_id']; ?>" onclick="archiveEmployee(<?php echo $post['emp_id']; ?>)" >Archive</span>
                  </div>
                </button>
              </td>
            </tr>
          <?php
          }
        ?>
      </tbody>
    </table>
  </div>
</div>
</div>

<script type="text/javascript">

  $('.tip-can').click(function(ev) {
    $(this).parent().css({"display": "none"});
    ev.stopPropagation();
  });

  $('table tr .btn-archive').click(function(ev) {
    $(this).children()[1].style.display = 'block';
    ev.stopPropagation();
  });

  $('table tr').click(function() {
    var id = $(this).attr('id');
    window.location =  '<?= site_url('admin/employee_detail/'); ?>' + id;
  });

  $('table tr .btn-edit').click(function(ev){
    var id = $(this).closest('tr').attr('id');
    window.location =  '<?= site_url('admin/manage_employee/'); ?>' + id;
    ev.stopPropagation();
  });

  $('table tr .btn-archive .tip-arch').click(function(){
    $(this).closest('tr').remove();
  });

  // $('.tip-arch').click(function(ev) {
  //   alert($(this).attr('id'));
  //   ev.stopPropagation();
  // });
</script>
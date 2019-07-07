<div class="contents">
  <div class="con-sub-head">
      <h5>Recently Added Employee</h5>
  </div>
  <div class="box">
  <div class="box-head">
    <div class="sp-btn">
      <p>Recent Employees</p>
      <a href="<?= base_url('admin'); ?>/all_messages">View All</a>
    </div>
  </div>
  <div class="box-body" style="overflow-x:auto;">
    <table class="table hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Name</th>
          <th>Department</th>
          <th>Created By</th>
          <th>Nationality</th>
          <th>Highest Degree</th>
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
              <td><?php echo  $post['created_by']; ?></td>
              <td><?php echo  $post['nationality']; ?></td>
              <td><?php echo $post['highest_degree']; ?></td>
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
  $('table tr').click(function() {
    var id = $(this).attr('id');
    var jId = JSON.parse(id);
    window.location =  '<?= site_url('admin/employee_detail/'); ?>' + id;
  });
</script>
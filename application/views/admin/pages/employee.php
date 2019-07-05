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
          <th>Employee Name</th>
          <th>Permanent Address</th>
          <th>Current Address</th>
          <th>Email Address</th>
          <th>Highest Education</th>
          <th>PAN Number</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous911@gmail.com</td>
          <td>PhD</td>
          <td>0234 3241 3415</td>
        </tr>
        <tr>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous911@gmail.com</td>
          <td>PhD</td>
          <td>0234 3241 3415</td>
        </tr>
        <tr>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous911@gmail.com</td>
          <td>PhD</td>
          <td>0234 3241 3415</td>
        </tr>
        <tr>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous911@gmail.com</td>
          <td>PhD</td>
          <td>0234 3241 3415</td>
        </tr>
        <tr>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous911@gmail.com</td>
          <td>PhD</td>
          <td>0234 3241 3415</td>
        </tr>
        <tr>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous911@gmail.com</td>
          <td>PhD</td>
          <td>0234 3241 3415</td>
        </tr>
        <tr>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous</td>
          <td>Anonymous911@gmail.com</td>
          <td>PhD</td>
          <td>0234 3241 3415</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>


<script type="text/javascript">
  $('table tr').click(function() {
    window.location = '<?= base_url('admin'); ?>/employee_detail';
  });
</script>
  <div class="contents">
    <div class="con-head">
      <h4>Recommendation Lists</h4>
    </div>
    
    <div>
      <div class="con-sub-head">
          <!-- <h5>Recent Messages</h5> -->  
      </div>
      <div class="box">
      <div class="box-head">
        <div class="sp-btn">
          <!-- <p>Recent Messages</p> -->
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
        
                 
                foreach ($recommendations as $posts) { ?>


                  <tr>
                  
                    <td><?php echo $posts['leave_name']; ?></td>
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
            "aaSorting": [],  });
    });
  </script>
    
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
          <thead >
            <tr>
              <th><div class="sp-btn"><span>Staff Name</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th  style="width: 10%;"><div class="sp-btn"><span>Leave</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th  style="width: 15%;"><div class="sp-btn"><span>From</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th  style="width: 15%;"><div class="sp-btn"><span>To</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
               <th  style="width: 10%;"><div class="sp-btn"><span>Type</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th  style="width: 15%;"><div class="sp-btn"><span>Performed by</span><i class="fa fa-sort" aria-hidden="true"></i></div></th>
              <th  style="width: 5%; text-align: center;">Status</th>
              <th>Action</th>
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
                    <td><?php echo $posts['duty_performed_by']; ?></td>
                    <td><?php if($posts['is_recommended']=='0'){?> <span class="pending">Pending</span> <?php } else {?><span class="granted">Recommended </span><?php } ?> </td>
                    <td> 
                      <?php if($posts['is_recommended']=='0') {?>
                      <button class="sub" onclick="recommendLeave(<?php  echo $posts['id']; ?>)">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>Recommend</button> 
                    <button class="can" onclick="denyLeave(<?php  echo $posts['id']; ?>)"><i class="fa fa-ban text-danger" aria-hidden="true"></i>
                    </button>
                    <?php } ?>
                  </td>
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
    
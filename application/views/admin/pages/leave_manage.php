<div class="contents">
  <!-- title area -->
  <div class="con-sub-head sp-btn">
    <h5>Leaves</h5>
    <a href=" <?= site_url('admin/dashboard'); ?>" id="small-link">
      <i class="fa fa-long-arrow-left" aria-hidden="true"></i> &nbsp;Go back to Dashboard
    </a>
  </div>
    <!-- area to show success and erorr messages -->
    <div class=" alert alert-success alert-dismissible fade show" style="display: none;" id="messagediv">
      <p id="showmessage"></p>
      <button type="button" class="close" >&times;</button>
    </div>
    <!-- area finishes here -->

  <!-- View list div -->
  <div class="row"  >
    <!-- left table area box-->
    <div class="box col-md-7 mr-5 shadow-lg p-3 mb-5 bg-white rounded">
      <div class="box-head">
        List
      </div>
      <div class="box-body overflow-auto"  style="height:25em;">
        <table  id="leave" class="table table-striped table-bordered  ">
          <thead class="">
            <tr>
              <th class="text-center">SN</th>
              <th class="text-center">Leave Name</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <!-- table body -->
          <tbody>
            <?php $sn =1; ?>
            <?php foreach ($posts as $value=>$post) { ?>
            <tr id="
              <?php echo $post['leave_id']; ?>">
              <td class="text-center">
                <?php echo $sn; $sn++ ?>
              </td>
              <td class="text-center">
                <?php echo $post['leave_name']; ?>
              </td>
              <td class="text-center">
             
                    <a href="<?= site_url('admin/leave_manage/'); ?><?php echo $post['leave_id']; ?>" >
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
               
                <a href="#leaveModal<?php echo $post['leave_id']; ?>" class="trigger-btn" data-toggle="modal">
                  <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                </a>
                <div id="leaveModal<?php echo $post['leave_id']; ?>" class="modal fade">
                  <div class="modal-dialog modal-confirm">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h4 class="modal-title">Are you sure?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <input type="button" class="btn btn-danger" value="Delete" onclick="deleteLeave(<?php echo $post['leave_id']; ?>)">
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- left box ends -->

      <!-- right form area -->
      <div class="box col-md-4 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="box-head">
        Add new Leave Type
      </div>
        <div class="box-body ">
  
          <form class="form" method="POST" action="">
            <input type="hidden" name="leave_id" id="leave_id" value="<?php if(isset($detailLeave['leave_id'])) echo $detailLeave['leave_id']; ?>">
              <div class="form-div">
                <label>Title</label>
                <input type="text" name="leave_name" id="leave_name" value="<?php if(isset($detailLeave['leave_name'])) echo $detailLeave['leave_name']; ?>">
                </div>
                <div class="sub-can">
                  <input type="button" name="" class="sub" onclick="saveLeave()" value="Save">
                  </div>
                </form>
              </div>
            </div>
            <!-- right box ends -->
          </div>
          <!-- upper div ends -->
          <!-- for package div -->
          <div class="con-sub-head sp-btn">
            <h5>Packages</h5>
          </div>
                 <!-- area to show success and erorr messages -->

     <div class=" alert alert-success alert-dismissible fade show" style="display: none;" id="messagediv1">
      <p id="showmessage1"> </p>
    <button type="button" class="close close1" >&times;</button>
        </div>
 <!-- area finishes here -->
         
          <!-- lower div for packages -->
          <div class="row">
            <!-- left table area box-->
            <div class="box col-md-7 mr-5 shadow-lg p-3 mb-5 bg-white rounded">
              <div class="box-head">
        List
      </div>
              <div class="box-body overflow-auto" style="height:25em;">
                <table id="package"  class="table table-bordered ">
                  <thead class="">
                    <tr>
                      <th class="text-center">SN</th>
                      <th class="text-center">Package Name</th>
                      <th class="text-center">Leaves</th>
                      <th class="text-center">Duration (Days)</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <!-- table body -->
                  <tbody>
                    <?php 
                    $sn =1;
                     $counts = array_count_values( array_column($packages, 'package_id')); 

                     ?>
                    <?php foreach ($packages as $pack=>$package) { 
                      ?>
                    
                    <tr id="
                      <?php echo $package['package_id']; ?>">
                      <td class="text-center">
                        <?php echo $sn; $sn++ ?>
                      </td>
                    <!-- packagename -->
                     <td class="text-center">
                        <?php echo $package['package_name']; ?>
                      </td>
                       <?php   
                          $p_id= $package['package_id'];

                            $package_leave= $this->Database_model->find('leave_packages','package_id',$p_id);
                            ?>
                      <td class="text-center">
                         <?php

                            foreach ($package_leave as $key => $value) 
                            {
                              $leave_name= $this->Database_model->find('leaves','leave_id',$value['leave_id']);
                               foreach ($leave_name as $key => $leave_array) 
                               {
                                echo $leave_array['leave_name'].'<br>';
                                }
                            }
                          
                           ?>

                      </td>

                      <!-- duration -->
                     <td class="text-center">
                          <?php   
                          foreach ($package_leave as $key => $value) 
                            {
                              $leave_name= $this->Database_model->find('leaves','leave_id',$value['leave_id']);
                               foreach ($leave_name as $key => $leave_array) 
                               {
                                echo $value['duration'].'<br>';
                                }
                            }
                          
                           ?>

                      </td>

                      <!-- action -->
                      <td class="text-center">
                        <button class="btn-edit" title="Edit">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                        <a href="#packageModal<?php echo $package['package_id']; ?>" class="trigger-btn" data-toggle="modal">
                          <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                        </a>
                        <!-- Modal HTML -->
                        <div id="packageModal<?php echo $package['package_id']; ?>" class="modal fade">
                          <div class="modal-dialog modal-confirm">
                            <div class="modal-content" >
                              <div class="modal-header">
                                <h4 class="modal-title">Are you sure?</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              </div>
                              <div class="modal-body">
                                <p>Do you really want to delete these records? This process cannot be undone.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                <input type="button" class="btn btn-danger" value="Delete" onclick="deletePackage(<?php echo $package['package_id']; ?>)">
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- left box ends -->
           
  <!-- right form area -->
    <div class="box col-md-4 shadow-lg p-3 mb-5 bg-white rounded">
      <div class="box-head">
        Create new Package
      </div>

      <div class="box-body">
 
        <form class="form" method="POST" action="">
          <input type="hidden" name="package_id" id="package_id">
          <div class="form-div">
            <label>Title</label>
            <input type="text" name="package_name" id="package_name">
          </div>

          <div class="form-group row" style="max-height: 300px; overflow-y: scroll;">
            <div class="col-sm-12 text-danger" >
              Select leave type and no. of days for each:
              <hr>
            </div>
            <?php foreach ($posts as $key => $leave) {?>
            <div class="col-sm-12 "  >
            
        
              <div class="custom-control custom-switch">
              <input type="checkbox" name="leave-list" onchange="toggleLeave(this)" class="custom-control-input" value="<?php echo $leave['leave_id'];?>" id="pkg-<?php echo $leave['leave_id']; ?>" value="<?php echo $leave['leave_id']; ?>">
              <label class="custom-control-label col-md-8 mb-3" for="pkg-<?php echo $leave['leave_id']; ?>"><?php echo $leave['leave_name']; ?></label>
                <input type="number" min="1"  max="365" disabled="true" style=" width: 5em; height: 2em;" name="duration" id="duration" >
            
            </div>
              </div>
          <?php } ?>
          </div>
          <div class="sub-can">
                <input type="button" name="" class="sub" onclick="savePackage()" value="Save">
            </div>

        </form>
        </div>
      </div>  
    </div>
    <!-- right box ends -->
  </div>
  <!-- lower div ends -->


</div>

                </div>
                <!-- end of the template -->
<!-- js -->
 <script >
  $(document).ready(function(){
    $(".close").click(function(){
        $("#messagediv").css('display','none');
    });
});  

   $(document).ready(function(){
    $(".close1").click(function(){
        $("#messagediv1").css('display','none');
    });
});  

</script>
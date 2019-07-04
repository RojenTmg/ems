<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <?= link_tag('assets/css/login.css'); ?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

</head>

<body>
<div class="sidenav">
         <div class="login-main-text">
            <h2>EMS<br> Login Page</h2>
            <p>Login from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12" style="margin: auto;">
            <div class="login-form">
                <?php
                //invalid credentials message
                if(isset($_SESSION['error_msg']) && $_SESSION['error_msg']!='')
                {
                    echo '<div class="alert alert-danger">'.$_SESSION['error_msg'].' </div>';
                }
                ?>
              
               <form action="checkLogin" method="POST">
                  <div class="form-group">
                     <label>Login ID</label>
                     <input type="text" class="form-control" placeholder="User Id" name="user_id">
                     <!-- error message under the label -->
                     <span class="text-danger"><?php echo form_error('user_id'); ?></span>
 
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                  </div>
                  <button type="submit" name="submit" class="btn btn-black">Login</button>
               
               </form>
            </div>
         </div>
      </div>
</body>
</html>
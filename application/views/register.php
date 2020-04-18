<!DOCTYPE html>
<html>
<head>
 <title>User Registration Page</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body style="background-image: url('https://cdn.hipwallpaper.com/i/9/98/PKDfnW.jpg'); background-attachment: fixed; background-size: 100% 100%;">
 <div class="container">
  <br />
  <h3 style="text-align:center; font-size:300%;">NEW USER REGISTERATION PAGE</h3>
  <br />
  <div class="panel panel-default" style="background-color: #FAEBD7; width:50%;margin-left: 280px;">
   <div class="panel-heading">Register</div>
   <div class="panel-body">
   <?php
    if($this->session->flashdata('message')){
        echo '
        <div class="alert alert-success">
            '.$this->session->flashdata("message").'
        </div>
        ';
    }
   ?>
    <form method="post" action="<?php echo site_url(); ?>register/validation">
     <div class="form-group">
      <label>Enter Your Name</label>
      <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Valid Email Address</label>
      <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>
     <div class="form-group">
      <input type="submit" style="background-color: green;" name="register" value="Register" class="btn btn-info" />
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>

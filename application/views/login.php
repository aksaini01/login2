<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style2.css">

</head>
<body class="hold-transition login-page">
<div class="container-fluid">
	<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="user-img">
<img src="<?php echo base_url(); ?>assets/images/login1.png" alt="Images">
</div>
</div>
<div class="col-lg-6">
<div class="user-form">
<div class="contact-form">
<h2>Log In</h2>
<form action="" method="post">
<div class="row">
<div class="col-lg-12 ">
<div class="form-group">
<input type="text" class="form-control" name="email" placeholder="Email" required>
<?php echo form_error('email','<span class="req">','</span>'); ?>
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" type="password" name="password" placeholder="Password">

<?php echo form_error('password','<span class="req">','</span>'); ?>
</div>
</div>
<div class="col-lg-12 form-condition">
<div class="agree-label">

<label for="chb1">
<a class="forget" href="#">Forgot My Password?</a>
</label>
</div>

</div>
<div class="col-lg-12 ">
<input class="default-btn btn-bg-two" type="submit" name="loginSubmit" value="Login" />
</div>
<div class="col-12 msgg">
<?php
	if(!empty($success_msg)){
		echo '<p class="statusMsg">'.$success_msg.'</p>';
	}elseif(!empty($error_msg)){
		echo '<p class="statusMsg">'.$error_msg.'</p>';
	}
	?>
</div>
<div class="col-12">
<p class="account-desc">
Not a Member?
<a href="#">Register Now</a>
</p>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

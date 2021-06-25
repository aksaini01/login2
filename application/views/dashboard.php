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
<h2>Login Success as (<?php echo $this->session->userdata('email'); ?>)</h2>


<span> <a href="<?php echo base_url(); ?>logout"> Logout </a> </span>
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

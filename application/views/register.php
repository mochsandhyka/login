<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		<div class="jumbotron">
			<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open('register/createuser') ?>
								<div class="form-group">
									<legend>Register</legend>
								</div>

								<?php echo validation_errors(); ?>
								<div class="form-group">
									<label for="">Username</label>
									<input type="text" class="form-control" id="username" name="username" placeholder="Input field" >
								</div>

								<div class="form-group">
									<label for="">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Input field" >
								</div>
								<div class="form-group">
										<button type="submit" class="btn btn-primary">Register</button>
										<a href="<?php echo site_url('login') ?>"> 
										<button type="button" class="btn btn-danger">Cancel</button></a>
								</div>	
			</form>
			</div>	
		</div>
		</div>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		
	</div>
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
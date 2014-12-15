<!DOCTYPE html>
<html>
	<head>
		<title>Fitness Tracker Exercise</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="view/css/style.css">
	</head>
	
	<body>
		<?php include_once("header.html"); ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-lg-push-9 text-center">
					<br>
					<img src="view/pics/computer.png" alt="Computer">
				</div>
				
				<div class="col-lg-9 col-lg-pull-3">
					<div class="panel panel-default">
						<div class="panel-body">
						
							<div class="page-header">
								<h2>Settings</h2>
							</div>
							
							<h3>Password:</h3>
							<a href="#changePass" data-toggle="modal"><button class="btn btn-info" type="submit">Change Password</button></a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="changePass" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="form-horizontal">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h4>Input the food information:</h4>
						</div>
					
						<div class="modal-body">
							<div class="form-group">
								<label for="old-pass" class="col-lg-3 control-label">Old Password: </label>
								<div class="col-lg-9">
									<input type="password" class="form-control" id="old-pass">
								</div>
							</div>
							<div class="form-group">
								<label for="new-pass" class="col-lg-3 control-label">New Password: </label>
								<div class="col-lg-9">
									<input type="password" class="form-control" id="new-pass">
								</div>
							</div>
							<div class="form-group">
								<label for="verify-pass" class="col-lg-3 control-label">Re-type New: </label>
								<div class="col-lg-9">
									<input type="password" class="form-control" id="verify-pass">
								</div>
							</div>
						</div>
					
						<div class="modal-footer">
							<a class="btn btn-danger" data-dismiss="modal">Cancel</a>
							<button class="btn btn-success" type="button" data-dismiss="modal">Change Password</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include_once("footer.html"); ?>
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
				<div class="col-lg-3 col-lg-push-9">
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Exercise Input</h4>
							<p class="list-group-item-text">Input Exercise</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Calorie Burn Counter</h4>
							<p class="list-group-item-text">**Add Feature**</p>
							<p class="list-group-item-text">Click for more details</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Detailed Graph</h4>
							<p class="list-group-item-text">**Add Feature**</p>
							<p class="list-group-item-text">Click for more details</p>
						</a>
					</div>
				</div>
				
				<div class="col-lg-9 col-lg-pull-3">
					<div class="panel panel-default">
						<div class="panel-body">
						
							<div class="page-header">
								<h2>What did you do in your workout today?</h2>
								<a href="#exercise_in" data-toggle="modal"><button class="btn btn-primary" type="submit">Add Exercise</button></a>
							</div>
							
							<h3>Exercise Log:</h3>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="modal fade" id="exercise_in" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="form-horizontal">
						<div class="modal-header">
							<h4>Input the food information:</h4>
						</div>
					
						<div class="modal-body">
							<div class="form-group">
								<label for="food-name" class="col-lg-3 control-label">Exercise Name: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control" id="contact-name" placeholder="example: Push-Ups">
								</div>
							</div>
							<div class="form-group">
								<label for="food-calories" class="col-lg-3 control-label">Time (minutes): </label>
								<div class="col-lg-9">
									<input type="number" min="0" class="form-control" id="contact-email" placeholder="30">
								</div>
							</div>
						</div>
					
						<div class="modal-footer">
							<a class="btn btn-danger" data-dismiss="modal">Cancel</a>
							<button class="btn btn-success" type="submit">Add Exercise</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<?php include_once("footer.html"); ?>
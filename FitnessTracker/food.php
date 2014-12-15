<!DOCTYPE html>
<html>
	<head>
		<title>Fitness Tracker Food</title>
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
							<h4 class="list-group-item-heading">Food Input</h4>
							<p class="list-group-item-text">Input Food</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Calorie/Carb/Fat Counter</h4>
							<p class="list-group-item-text">**Add Feature**</p>
							<p class="list-group-item-text">Click for more details</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Daily Food Graph</h4>
							<p class="list-group-item-text">**Add Feature**</p>
							<p class="list-group-item-text">Click for more details</p>
						</a>
					</div>
				</div>
				
				<div class="col-lg-9 col-lg-pull-3">
					<div class="panel panel-default">
						<div class="panel-body">
						
							<div class="page-header">
								<h2>What did you eat today?</h2>
								<a href="#food_in" data-toggle="modal"><button class="btn btn-success" type="submit">Add Food</button></a>
							</div>
							
							<h3>Food Log:</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="food_in" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="form-horizontal">
						<div class="modal-header">
							<h4>Input the food information:</h4>
						</div>
					
						<div class="modal-body">
							<div class="form-group">
								<label for="food-name" class="col-lg-3 control-label">Food Name: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control" id="contact-name" placeholder="example: Pizza slice">
								</div>
							</div>
							<div class="form-group">
								<label for="food-calories" class="col-lg-3 control-label">Calories: </label>
								<div class="col-lg-9">
									<input type="number" min="0" class="form-control" id="contact-email" placeholder="285">
								</div>
							</div>
							<div class="form-group">
								<label for="food-carbs" class="col-lg-3 control-label">Carbs (grams): </label>
								<div class="col-lg-9">
									<input type="number" min="0" class="form-control" id="contact-email" placeholder="36">
								</div>
							</div>
							<div class="form-group">
								<label for="food-fat" class="col-lg-3 control-label">Fat (grams): </label>
								<div class="col-lg-9">
									<input type="number" min="0" class="form-control" id="contact-email" placeholder="10">
								</div>
							</div>
						</div>
					
						<div class="modal-footer">
							<a class="btn btn-danger" data-dismiss="modal">Cancel</a>
							<button class="btn btn-success" type="submit">Add Food</a>
						</div>
					</form>
					
					<hr>
					<form class="form-horizontal">
						<div class="modal-header">
							<h4>Search food information:</h4>
						</div>
					
						<div class="modal-body">
							<div class="form-group">
								<label for="food-name" class="col-lg-3 control-label">Food Name: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control" id="contact-name" placeholder="example: Pizza">
								</div>
							</div>
						</div>
						
						<div class="modal-footer">
							<button class="btn btn-success" type="button">Search Food</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<script>
			var apiKey="IgU8GmvNq7t31d5jfM5cPleSeuYI9JGa7CUdzNXW";
		</script>
		<?php include_once("footer.html"); ?>
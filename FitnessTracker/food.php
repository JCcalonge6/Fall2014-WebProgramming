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
							<div class="table-responsive">
								<table class="table table-striped" id="foodTable">
									<thead>
										<tr>
											<th>Name</th>
											<th>Calories</th>
											<th>Fat (g)</th>
											<th>Carbs (g)</th>
											<th>Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
										</tr>
									</tbody>
								</table>
							</div>
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
							<a class="close" data-dismiss="modal">×</a>
							<h4>Input the food information:</h4>
						</div>
					
						<div class="modal-body">
							<div class="form-group">
								<label for="food-name" class="col-lg-3 control-label">Food Name: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control" id="food-name" placeholder="example: Pizza slice">
								</div>
							</div>
							<div class="form-group">
								<label for="food-calories" class="col-lg-3 control-label">Calories: </label>
								<div class="col-lg-9">
									<input type="number" min="0" class="form-control" id="food-calories" placeholder="285">
								</div>
							</div>
							<div class="form-group">
								<label for="food-fat" class="col-lg-3 control-label">Fat (grams): </label>
								<div class="col-lg-9">
									<input type="number" min="0" class="form-control" id="food-fat" placeholder="10">
								</div>
							</div>
							<div class="form-group">
								<label for="food-carbs" class="col-lg-3 control-label">Carbs (grams): </label>
								<div class="col-lg-9">
									<input type="number" min="0" class="form-control" id="food-carbs" placeholder="36">
								</div>
							</div>
						</div>
					
						<div class="modal-footer">
							<a class="btn btn-danger" data-dismiss="modal">Cancel</a>
							<button class="btn btn-success" type="button" onclick="addFood()">Add Food</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		
		<script>
			function addFood() 
			{
				var table = document.getElementById("foodTable");
				var d = new Date();
				var row = table.insertRow(1);
				var food = row.insertCell(0);
				var cal = row.insertCell(1);
				var fat = row.insertCell(2);
				var carb = row.insertCell(3);
				var time = row.insertCell(4);
				food.innerHTML = document.getElementById("food-name").value;
				cal.innerHTML = document.getElementById("food-calories").value;
				fat.innerHTML = document.getElementById("food-fat").value;
				carb.innerHTML = document.getElementById("food-carbs").value;
				time.innerHTML = d.toDateString();
				$('#food_in').modal('hide');
				$('#food_in').on('hidden.bs.modal', function (e) {
					$(this)
					.find("input,textarea,select")
					.val('')
					.end()
					.find("input[type=checkbox], input[type=radio]")
					.prop("checked", "")
					.end();
					})
			}
		</script>
		<?php include_once("footer.html"); ?>
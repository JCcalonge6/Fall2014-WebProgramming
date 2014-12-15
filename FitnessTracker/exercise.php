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
							<div class="table-responsive">
								<table class="table table-striped" id="exerciseTable">
									<thead>
										<tr>
											<th>Name</th>
											<th>Reps</th>
											<th>Workout Time(min)</th>
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
		
		<div class="modal fade" id="exercise_in" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="form-horizontal">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h4>Input the Exercise information:</h4>
						</div>
					
						<div class="modal-body">
							<div class="form-group">
								<label for="exercise-name" class="col-lg-3 control-label">Exercise Name: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control" id="exercise-name" placeholder="example: Push-Ups">
								</div>
							</div>
							<div class="form-group">
								<label for="exercise-reps" class="col-lg-3 control-label">Reps: </label>
								<div class="col-lg-9">
									<input type="number" min="0" class="form-control" id="exercise-reps" placeholder="100">
								</div>
							</div>
							<div class="form-group">
								<label for="exercise-time" class="col-lg-3 control-label">Time (minutes): </label>
								<div class="col-lg-9">
									<input type="number" min="0" class="form-control" id="exercise-time" placeholder="30">
								</div>
							</div>
						</div>
					
						<div class="modal-footer">
							<a class="btn btn-danger" data-dismiss="modal">Cancel</a>
							<button class="btn btn-success" type="button" onclick="addExercise()">Add Exercise</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<script>
			function addExercise() 
			{
				var table = document.getElementById("exerciseTable");
				var d = new Date();
				var row = table.insertRow(1);
				var exercise = row.insertCell(0);
				var reps = row.insertCell(1);
				var workout = row.insertCell(2);
				var time = row.insertCell(3);
				exercise.innerHTML = document.getElementById("exercise-name").value;
				reps.innerHTML = document.getElementById("exercise-reps").value;
				workout.innerHTML = document.getElementById("exercise-time").value;
				time.innerHTML = d.toDateString();
				$('#exercise_in').modal('hide');
				$('#exercise_in').on('hidden.bs.modal', function (e) {
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
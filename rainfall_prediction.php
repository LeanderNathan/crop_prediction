<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>

<body style="background-color: #F0E2D0;" id="top">

	<?php include ('nav.php');  ?>

	<!-- ======================================================================================================================================== -->

	<div class="container-fluid ">

		<div class="row row-content">
			<div class="col-4 px-0">
				<img height="100%" width="100%" src="assets/img/rainfall.png">
			</div>
			<div class="col-8 px-0 fillable">
				<div class="card text-white mb-3">
					<form role="form" action="#" method="post" >  
						<div class="card-header">
							<span class="display-4" > Rainfall Prediction  </span>	
						</div>
						<div class="card-body px-5 text-dark">
							<table class="table table-striped table-hover table-bordered text-center display" id="myTable">
								<thead>
									<tr class="font-weight-bold text-default">
										<th><center>Region</center></th>
										<th><center>Month</center></th>
									</tr>
								</thead>
								<tbody>
									<tr class="text-center">
										<td>
											<div class="form-group ">
												<select id="region-select" name="region" class="form-control" required>
													<option value="">Select Region</option>
												</select>
												<script language="javascript"> print_region("region-select"); </script>
											</div>
										</td>
										<td>
											<div class="form-group ">
												<select id="month-select" name="month" class="form-control" required>
													<option value="">Select Month</option>
												</select>
												<script language="javascript"> print_months("month-select"); </script>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<span class="pull-right px-2 py-3">
								<button type="submit" value="Yield" name="Rainfall_Predict" class="btn btn-submit">Predict</button>
							</span>
						</div>
					</form>
				</div>
				<div class="card text-white mb-0">
					<div class="card-header">
						<span class="display-4" > Result  </span>					
					</div>
					<h4 class="m-0 py-2 pl-4 text-dark">
						<?php 
						if(isset($_POST['Rainfall_Predict'])){

							$region=trim($_POST['region']);
							$month=trim($_POST['month']);

							echo "Predicted Rainfall for the Region $region in the month $month is (in mm) : ";

							$Jregion=json_encode($region);
							$Jmonth=json_encode($month);

							$command = escapeshellcmd("python ML/rainfall_prediction/rainfall_prediction.py $Jregion $Jmonth ");
							$output = passthru($command);
							echo $output;	

						}
						?>
					</h4>
				</div>
			</div>
		</div>  
	</div>
</section>

<?php require("footer.php");?>

</body>
<style type="text/css">
	.fillable, .card-header, .card-body {
		background-color: #F0E2D0 !important;
	}

	form {
		background-color: #F0E2D0 !important;
	}

	.card-header span {
		color: #70AF85;
	}

	table {
		border-radius: 5px;
	}

	th {
		background-color: #C6EBC9;
		font-size: 13px !important;
	}

	.btn-submit {
		background-color: #70AF85 !important;
		color: white;
	}

  .btn-submit:hover {
  	background-color: #55976B !important;
		color: white !important;
  }

</style>
</html>


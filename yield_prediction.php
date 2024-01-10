<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>

<body style="background-color: #F0E2D0;" id="top">

	<?php include ('nav.php');  ?>

	<!-- ======================================================================================================================================== -->

	<div class="container-fluid ">
		<div class="row row-content">
			<div class="col-4 px-0">
				<img height="100%" width="100%" src="assets/img/yeild.png">
			</div>
			<div class="col-8 px-0 fillable">
				<div class="card text-white mb-3">
					<form role="form" action="#" method="post" >  
						<div class="card-header">
							<span class="display-4" >Yield Prediction</span>	

						</div>

						<div class="card-body text-dark">

							<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

								<thead>
									<tr class="font-weight-bold text-default">
										<th><center> State</center></th>
										<th><center>District</center></th>
										<th><center>Season</center></th>
									</tr>
								</thead>
								<tbody>
									<tr class="text-center">

										<td>
											<div class="form-group">
												<select  name="state" class="form-control" required>
													<option value="Karnataka">Karnataka</option>
												</select>

											</div>
										</td>

										<td>
											<div class="form-group ">
												<select id="district-select" name="district" class="form-control" required>
													<option value="">Select District</option>
												</select>
												<script language="javascript">print_karnataka_districts("district-select");</script>
											</div>
										</td>

										<td>
											<div class="form-group ">
												<select name="Season" class="form-control">
													<option value="">Select Season ...</option>
													<option name="Kharif" value="Kharif">Kharif</option>
													<option name="Whole Year" value="Whole Year">Whole Year</option>
													<option name="Autumn" value="Autumn">Autumn</option>
													<option name="Rabi" value="Rabi">Rabi</option>
													<option name="Summer" value="Summer">Summer</option>
													<option name="Winter" value="Winter">Winter</option>
												</select>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

								<thead>
									<tr class="font-weight-bold text-default">
										<th><center>Crop</center></th>
										<th><center>Area</center></th>
									</tr>
								</thead>
								<tbody>
									<tr class="text-center">
										<td>
											<div class="form-group">

												<select id="crop-select" name="crops" class="form-control" required>
													<option value="">Select Crop</option>
												</select>
												<script language="javascript">print_crop_options("crop-select");</script>
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type = "number" step=0.01 name="area" placeholder="Area in Hectares" required class="form-control">

											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<span class="pull-right px-2 py-3 ">
								<button type="submit" value="Yield" name="Yield_Predict" class="btn btn-submit">Predict</button>
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


						if(isset($_POST['Yield_Predict'])){

							$state=trim($_POST['state']);
							$district=trim($_POST['district']);
							$season=trim($_POST['Season']);
							$crops=trim($_POST['crops']);
							$area=trim($_POST['area']);


							echo "Predicted crop yield (in Quintal) is: ";

							$Jstate=json_encode($state);
							$Jdistrict=json_encode($district);
							$Jseason=json_encode($season);
							$Jcrops=json_encode($crops);
							$Jarea=json_encode($area);

							$command = escapeshellcmd("python ML/yield_prediction/yield_prediction.py $Jstate $Jdistrict $Jseason $Jcrops $Jarea ");
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


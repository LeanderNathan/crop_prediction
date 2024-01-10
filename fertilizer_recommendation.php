<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>

<body style="background-color: #F0E2D0;" id="top">

	<?php include ('nav.php');  ?>

	<!-- ======================================================================================================================================== -->

	<div class="container-fluid ">
		<div class="row row-content">
			<div class="col-4 px-0">
				<img height="100%" width="100%" src="assets/img/fertilizer.png">
			</div>
			<div class="col-8 px-0 fillable">
				<div class="card text-white mb-3">
					<form role="form" action="#" method="post" >  
						<div class="card-header">
							<span class="display-4"> Fertilizer Recommendation  </span>	
						</div>

						<div class="card-body text-dark">
							<table class="table table-striped table-hover table-bordered  text-center display" id="myTable">

									<thead>
										<tr class="font-weight-bold text-default">
											<th><center>Nitrogen</center></th>
											<th><center>Phosphorus</center></th>
											<th><center>Potassium</center></th>
										</tr>
									</thead>
									<tbody>
										<tr class="text-center">
											<td>
												<div class="form-group">
													<input type = 'number' name = 'n' placeholder="Nitrogen Eg: 37" required class="form-control">
												</div>
											</td>
											<td>
												<div class="form-group">
													<input type = 'number' name = 'p' placeholder="Phosphorus Eg: 42" required class="form-control">
												</div>
											</td>
											<td>
												<div class="form-group">
													<input type = 'number' name = 'k' placeholder="Potassium Eg: 43" required class="form-control">
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							<table class="table table-striped table-hover table-bordered text-center display" id="myTable">
								<thead>
									<tr class="font-weight-bold text-default">
										<th><center>Temperature</center></th>
										<th><center>Humidity</center></th>
										<th><center>Soil Moisture</center></th>
										<th><center>Soil Type</center></th>
										<th><center>Crop</center></th>
									</tr>
								</thead>
								<tbody>
									<tr class="text-center">
										<td>
											<div class="form-group">
												<input type = 'number' name = 't'  placeholder="Temperature Eg:26" required class="form-control">

											</div>
										</td>
										<td>
											<div class="form-group">
												<input type = 'number' name = 'h'  placeholder="Humidity Eg:52" required class="form-control">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type = 'number' name='soilMoisture' placeholder="Soil Moisture Eg:38" required class="form-control">
											</div>
										</td>
										<td>
											<div class="form-group ">
												<select name="soil" class="form-control">
													<option  value="">Select Soil Type</option>
													<option  value="Sandy">Sandy</option>
													<option  value="Loamy">Loamy</option>
													<option  value="Black">Black</option>
													<option  value="Red">Red</option>
													<option  value="Clayey">Clayey</option>										
												</select>
											</div>
										</td>
										<td>
											<div class="form-group ">
												<select name="crop" class="form-control">
													<option  value="">Select Crop</option>
													<option  value="Maize">Maize</option>
													<option  value="Sugarcane">Sugarcane</option>
													<option  value="Cotton">Cotton</option>
													<option  value="Tobacco">Tobacco</option>
													<option  value="Paddy">Paddy</option>	
													<option  value="Barley">Barley</option>	
													<option  value="Wheat">Wheat</option>	
													<option  value="Millets">Millets</option>	
													<option  value="Oil seeds">Oil seeds</option>	
													<option  value="Pulses">Pulses</option>	
													<option  value="Ground Nuts">Ground Nuts</option>													
												</select>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<span class="pull-right px-2 py-3">
								<button type="submit" value="Recommend" name="Fert_Recommend" class="btn btn-submit">SUBMIT</button>
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
						if(isset($_POST['Fert_Recommend'])){
							$n=trim($_POST['n']);
							$p=trim($_POST['p']);
							$k=trim($_POST['k']);
							$t=trim($_POST['t']);
							$h=trim($_POST['h']);
							$sm=trim($_POST['soilMoisture']);
							$soil=trim($_POST['soil']);
							$crop=trim($_POST['crop']);


							echo "Recommended Fertilizer is : ";

							$Jsonn=json_encode($n);
							$Jsonp=json_encode($p);
							$Jsonk=json_encode($k);
							$Jsont=json_encode($t);
							$Jsonh=json_encode($h);
							$Jsonsm=json_encode($sm);
							$Jsonsoil=json_encode($soil);
							$Jsoncrop=json_encode($crop);

							$command = escapeshellcmd("python C:/xampp/htdocs/demo/ML/fertilizer_recommendation/fertilizer_recommendation.py $Jsonn $Jsonp $Jsonk $Jsont $Jsonh $Jsonsm $Jsonsoil $Jsoncrop ");
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


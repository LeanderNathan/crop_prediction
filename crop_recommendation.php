

<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>

<body style="background-color: #F0E2D0;" id="top">

	<?php include ('nav.php');  ?>

	<!-- ======================================================================================================================================== -->

	<div class="container-fluid">
		<div class="row row-content">
			<div class="col-4 px-0">
				<img height="100%" width="100%" src="assets/img/cr_bg.png">
			</div>
			<div class="col-8 px-0 fillable">
				<div class="card text-white mb-3">
						<div class="card-header">
							<span class="display-4" >Crop Recommendation</span>		
						</div>
						<div class="card-body text-dark">
							<form role="form" action="#" method="post" >     

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
								<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">
									<thead>
										<tr class="font-weight-bold text-default">
											<th><center>Temperature</center></th>
											<th><center>Humidity</center></th>
											<th><center>PH</center></th>
											<th><center>Rainfall</center></th>
										</tr>
									</thead>
									<tbody>
										<tr class="text-center">
											<td>
												<div class="form-group">
													<input type = 'number' name = 't' step =0.01 placeholder="Temperature Eg: 21" required class="form-control">

												</div>
											</td>

											<td>
												<div class="form-group">
													<input type = 'number' name = 'h' step =0.01 placeholder="Humidity Eg: 82" required class="form-control">

												</div>
											</td>

											<td>
												<div class="form-group">
													<input type = 'number' name = 'ph' step =0.01 placeholder="PH Eg: 6.5" required class="form-control">

												</div>
											</td>

											<td>
												<div class="form-group">
													<input type = 'number' name = 'r' step =0.01 placeholder="Rainfall Eg: 203" required class="form-control">

												</div>
											</td>
										</tr>
									</tbody>
								</table>
								<span class="pull-right px-2 py-3">
									<button type="submit" value="Recommend" name="Crop_Recommend" class="btn btn-submit">SUBMIT</button>
								</span>
							</form>
						</div>
					</div>



					<div class="card text-white mb-0">
						<div class="card-header">
							<span class="display-4" > Result  </span>					
						</div>

						<h4 class="m-0 py-2 pl-4 text-dark">
							<?php 
							if(isset($_POST['Crop_Recommend'])){
								$n=trim($_POST['n']);
								$p=trim($_POST['p']);
								$k=trim($_POST['k']);
								$t=trim($_POST['t']);
								$h=trim($_POST['h']);
								$ph=trim($_POST['ph']);
								$r=trim($_POST['r']);


								echo "Recommended Crop is : ";

								$Jsonn=json_encode($n);
								$Jsonp=json_encode($p);
								$Jsonk=json_encode($k);
								$Jsont=json_encode($t);
								$Jsonh=json_encode($h);
								$Jsonph=json_encode($ph);
								$Jsonr=json_encode($r);

								$command = escapeshellcmd("python ML/crop_recommendation/recommend.py $Jsonn $Jsonp $Jsonk $Jsont $Jsonh $Jsonph $Jsonr ");
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

	}
</style>
</html>


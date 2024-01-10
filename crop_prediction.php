

<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>

<body style="background-color: #F0E2D0;" id="top">

	<?php include ('nav.php');  ?>

	<!-- ======================================================================================================================================== -->

	<div class="container-fluid">
		<div class="row row-content">
			<div class="col-4 px-0">
				<img height="100%" width="100%" src="assets/img/crop.png">
			</div>
			<div class="col-8 px-0 fillable">
				<div class="card text-white mb-3">
					<div class="card-header">
						<span class="display-4" > Crop Prediction  </span>					
					</div>
					<div class="card-body text-dark">
						<form role="form" action="#" method="post" >     
							<table class="table table-striped table-hover table-bordered bg text-center display" id="myTable">
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
												<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
												<script language="javascript">print_state("sts");</script>
											</div>
										</td>
										<td>
											<div class="form-group ">
												<select id ="state" name="district" class="form-control" required>
													<option value="">Select District</option>
												</select>
												<script language="javascript">print_state("sts");</script>
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
							<span class="pull-right px-2 py-3">
								<button type="submit" name="Crop_Predict" class="btn btn-submit">Predict</button>
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
						if(isset($_POST['Crop_Predict'])){
							$state=trim($_POST['stt']);
							$district=trim($_POST['district']);
							$season=trim($_POST['Season']);


							echo "Crops grown in ".$district." during the ".$season." season are :- ";

							$JsonState=json_encode($state);
							$JsonDistrict=json_encode($district);
							$JsonSeason=json_encode($season);

							$command = escapeshellcmd("python ML/crop_prediction/ZDecision_Tree_Model_Call.py $JsonState $JsonDistrict $JsonSeason");
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


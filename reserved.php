<?php 
require_once('data/get_origin.php');
require_once('data/get_destination.php');

// echo '<pre>';
// print_r($origins);
// echo '</pre>';
 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>VBus...</title>

		<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">

	</head>
<body style="background-color: lightblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">VBus Online Ticketing</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
      	<a href="#">Rerservation
      	<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
      	</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-backward"></span> Back To Home</a></li>
    </ul>
  </div>
</nav>


<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">STEPS FOR BOOKING</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">1.INFORMATION GUIDE
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								SCHEDULE OF TRAVEL
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">2. ACCOMODATION</h3>
							</div>
							<div class="panel-body">
								ACCOMODATION TYPE
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">3. PASSENGER INFO</h3>
							</div>
							<div class="panel-body">
								PASSENGER DETAILS
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">4. PAYMENT INFO</h3>
							</div>
							<div class="panel-body">
								TOTAL PAYMENT
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div> 

<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>BOOKING DETAILS...</center>
			 </h2>
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-itinerary">
					  <div class="form-group">
					    <label for="">FROM :</label>
					    <select placeholder="enter your name" class="btn btn-default" id="orig-id">
					    <?php foreach($origins as $o): ?>
							<!-- <input type="text" name="" id="orig-id"> -->
					    	<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Enter your city</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>indore</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>bhopal</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Raipur</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Mumbai</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Delhi</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Khandwa</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Pune</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Surat</option>
				    	<?php endforeach; ?>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="">TO:</label>
					    <select class="btn btn-default" id="dest-id">
				    	<?php foreach($destinations as $d): ?>
							<!-- <input type="text" name="" id="dest_id"> -->
					    	<option  value="<?= $d['dest_id']; ?>"><?= $d['dest_destination']; ?> Enter your destinatioin</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Indore</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Bhopal</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Raipur</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Mumbai</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Delhi</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Khandwa</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Pune</option>
							<option value="<?= $o['origin_id']; ?>"> <?= $o['origin_desc']; ?>Surat</option>
				    	<?php endforeach; ?>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="">DEPARTURE DATE:</label>
					    <input type="date" class="btn btn-default" id="dept-date">
					  </div>
					  <button type="submit" class="btn btn-success">SEARCH
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

 <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).on('submit', '#form-itinerary', function(event) {
		event.preventDefault();
		/* Act on the event */
		var validate = "";
		var origin = $('select[id=orig-id]').val();
		var dest = $('select[id=dest-id]').val();
		var dept = $('input[id=dept-date]').val();
		// var deste = $('select[id=dest-id]').val();
		// var depte = $('input[id=dept-date]').val();

		if(dept.length == 0){
			alert('Please Select Departure Date!');
		}else{
			$.ajax({
					url: 'data/session_itinerary.php',
					type: 'post',
					dataType: 'json',
					data: {
						oid : origin,
						did : dest,
						dd : dept
					},
					success: function (data) {
						console.log(data);
						if(data.valid == true){
							window.location = data.url;
							console.log('sss');
						}
					},
					error: function(){
						alert('Error: L161+');
					}
				});
		}//end dept kung == 0


	});

</script> 

</body>
</html>
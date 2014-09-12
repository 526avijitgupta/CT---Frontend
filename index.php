<!DOCTYPE html>
<html>
<head>
	<title>Book Cheap Air Tickets, Domestic Flight Ticket Booking at Lowest Airfare on Cleartrip.</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="Styles/main.css">
	<link rel="stylesheet" href="Styles/ionicons.css">
	<link rel="stylesheet" href="Styles/jqueryCalendar.css">
	<script type="text/javascript" src="bootstrap/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="Scripts/jquery-ui.js"></script>
	<!-- <script type="text/javascript" src="Scripts/jquery-ui-1.8.15.custom.min.js"></script> -->
	<script type="text/javascript" src= "Scripts/link_active_assign.js"></script>
	<script type="text/javascript" src="Scripts/connect_icon_hover.js"></script>
	<script type="text/javascript" src="Scripts/validate_form.js"></script>
	<script type="text/javascript" src="Scripts/date_picker.js"></script>
	<script type="text/javascript">

		airports_list = ["New Delhi","Mumbai","New York","Chennai","Kolkata","London","Tokyo","Madrid","Paris","Maldives","Singapore","Beijing","Jakarta","Dubai"];

		$(function(){

	// 		$.ajax({
	// 		type: "POST",
	// 		url: "",//"sqldata.php",
	// 		success: function (result) {
	// 			if(result) {

	// 				var ajax_airport_list = JSON.parse(result);
	// 				var counter = 0;
	// 				while(ajax_airports_list[counter]) {
	// 					airports_list.push(ajax_airports_list[counter]);
	// 					counter += 1;
	// 				}

	// 				$('#from').autocomplete({
	// 					source: airports_list
	// 				});
	// 				$('#to').autocomplete({
	// 					source: airports_list
	// 				});
	// 			}
	// 		}
	// });

	$('#from').autocomplete({
		source: airports_list
	});
	$('#to').autocomplete({
		source: airports_list
	});

});

	</script>
</head>
<body>
	<div class="container col-xs-12"> 

		<?php
			require_once('header.php');
		?>

		<br><br>

		<div class="row content-container">

			<div style="height:500px; width:80px; background-color:rgb(245,245,245); display:inline-block; float:left;">

			</div>

			<?php
				require_once('left_sidenav.php');
			?>

			<div class="col-sm-6 content-sub-container" id="flights-content">
				<div class="content-head-wrap inline-form-marginleft">
					<h2><strong>Search  flights</strong></h2>
					<small class="small" style="font-size:16px;">Fly Anywhere. Fly Everywhere</small>
				</div>
				<div class="sub-container-forms inline-form-marginleft">
					<form role="form">
							<br>
							<label class="checkbox-inline">
								<input type="radio" name="radio-filter" id="flights-form-radio-1" value="one-way" checked>
								One Way
							</label>
							<label class="checkbox-inline">
								<input type="radio" name="radio-filter" id="flights-form-radio-1" value="round-trip">
								Round Trip
							</label>
							<label class="checkbox-inline">
								<input type="radio" name="radio-filter" id="flights-form-radio-1" value="multicity">
								Multicity
							</label>
							<label class="checkbox-inline">
								<input type="radio" name="radio-filter" id="flights-form-radio-1" value="flight-hotel">
								Flight + Hotel
							</label>
					</form>
					<br>
					<form class="inline-form" role="form">
						<div class="form-group col-sm-5">
							<label for="from">From</label>
							<input type="text" class="form-control" id="from" placeholder="Any worldwide city or airport">
						</div>
						<span class="ion-android-arrow-forward" id="from-to"></span>
						<div class="form-group col-sm-5 inline-form-marginleft">
							<label for="to">To</label>
							<input type="text" class="form-control" id="to" placeholder="Any worldwide city or airport">
						</div>
					</form>
					<form role="form">
						<div class="form-group col-sm-4">
							<br>
							<label for="depart on">Depart on</label>
							<input type="text" class="form-control" id="depart-on" placeholder="Pick a date">
							<span class="ion-calendar pointer" id="date-picker"></span>
							<br>
						</div>
					</form>
					<form class="inline-form col-md-12" role="form">
						<div class="form-group col-sm-2">
							<br>
							<label for="adults">Adults</label>
							<br>
							<select class="form-select-inline" id="adults">
								<option value="" selected>1</option>
								<option></option>
								<option></option>
							</select>
						</div>
						<div class="form-group col-sm-2 inline-form-select">
							<br>
							<label for="children">Children</label>
							<br>
							<select class="form-select-inline" id="adults">
								<option value="" selected>0</option>
								<option></option>
								<option></option>
							</select>
							<small class="small">2-12 years</small>
						</div>
						<div class="form-group col-sm-2 inline-form-select">
							<br>
							<label for="infants">Infants</label>
							<br>
							<select class="form-select-inline" id="adults">
								<option value="" selected>0</option>
								<option></option>
								<option></option>
							</select>
							<small class="small">Below 2 years</small>
							<br><br>
						</div>
					</form>
					<div class="col-md-11" style="border-bottom:1px dotted silver;">
						<a href="#">
							<strong>More Options: </strong>
							Class of travel, Airline preference
						</a>
						<br><br>
					</div>
				</div>
				<button class="btn btn-warning" id="search-flights-btn">Search Flights</button>
			</div>

			<div class="col-sm-6 content-sub-container" id="search-results-container" style="display:none;">
				<div class="content-head-wrap"> <!--  inline-form-marginleft -->
					<h2><strong>Search  results</strong></h2>
				</div>
				<div class="results-div-wrap">
					<div class="">

					</div>
					<div class="">

					</div>
					<div class="">

					</div>
					<div class="">

					</div>
				</div>		
			</div>

		</div>

		<br><br>

		<?php
			require_once('footer.php');
		?>

	</div>
</body>
</html>
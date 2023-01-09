<?php include_once 'header.php'; ?>
<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = 'ofbsphp';

$conn = mysqli_connect($servername, $db_username, $db_password,$db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connection sucess";
// visit freeprojectscodes.com for more projects
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

    
body {
	/* background:url('assets/images/bg2.jpg') no-repeat 0px 0px;
	background-size: cover;
	font-family: 'Open Sans', sans-serif;
	background-attachment: fixed;
    background-position: center; */
	background: #bdc3c7;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

h1,h2,h3,h4,h5,h6{
	font-family: 'Montserrat', sans-serif;
	
}
h5.text-light {
	margin-top: 10px;
}
.main-agileinfo{
	margin:50px auto;
	width:50%;
}

@media (max-width:1366px){
	.main-agileinfo {
		width: 53%;
	}
}

@media (max-width:1280px){
	.main-agileinfo {
		width: 57%;
	}
}

@media (max-width:1080px){
	h1 {
		color: #fff;
		font-size: 47px;
	}
	.main-agileinfo {
		width: 68%;
	}
}
@media (max-width:1024px){
	.main-agileinfo {
		width: 71%;
	}
}

@media (max-width:800px){
	.main-agileinfo {
		width: 81%;
	}
}
 @media (max-width:768px){
	.main-agileinfo {
		width: 85%;
	}
	.checkbox i {
		width: 15px;
		height: 15px;
	}
	.checkbox input + i:after {
		top: -3px;
		left: -3px;
	}
}
 @media (max-width:736px){
	.main-agileinfo {
		width: 88%;
		margin:40px auto;
	}
	h1 {
		color: #fff;
		font-size: 43px;
		margin-top:40px;
	}
	input[type="text"] {
		padding: 10px;
		width: 90%;
		float: left;
	}
	input#datepicker, input#datepicker1, input#datepicker2, input#datepicker3 {
		width: 79%;
	}
	.value-minus, .value-plus {
		height: 30px;
		width: 30px;
	}
	.value {
		width: 33px;
		height: 25px;
		padding-top: 6px;
	}
}

.resp-tabs-list {
    list-style: none;
    padding: 15px 0px;
    margin: 0 auto;
    text-align: center;
	/* background: rgb(33, 150, 243); */
	background: rgb(78 103 114);
}
/* round trip and one way*/
.resp-tab-item {
    font-size: 1.1em;
    font-weight: 500;
    cursor: pointer;
    display: inline-block;
    margin: 0;
    text-align: center;
    list-style: none;
    outline: none;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    text-transform: uppercase;
    margin: 0 1.2em 0;
	color:#b1b1b1;
	padding:7px 15px;
}

.quantity-select .entry.value-minus {
    margin-left: 0;
}
.value-minus, .value-plus {
    height: 40px;
    line-height: 24px;
    width: 40px;
    margin-right: 3px;
    display: inline-block;
    cursor: pointer;
    position: relative;
    font-size: 18px;
    color: #fff;
    text-align: center;
    -webkit-user-select: none;
    -moz-user-select: none;
    border: 1px solid #b2b2b2;
    vertical-align: bottom;
}


</style>
</head>
<body>
<div class="main-agileinfo">
		<h1 class="text-light brand mt-2">
			<img src="assets/images/airtic.png" 
				height="105px" width="105px" alt="">				
		Online Flight Booking</h1>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Trip</span></li>
				
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
				        
                    
                    <!-- log on to freeprojectscodes.com for more projects -->
                    <div class="tab-1 resp-tab-content roundtrip">
						<form action="book_flight.php" method="post">
							<input type="hidden" name="type" value="round">
							<div class="from">
								<h3 style="color: rgba(255, 255, 255, 0.767);">From</h3>
								<?php
								$sql = 'SELECT * FROM Cities ';
								$stmt = mysqli_stmt_init($conn);
								mysqli_stmt_prepare($stmt,$sql);         
								mysqli_stmt_execute($stmt);          
								$result = mysqli_stmt_get_result($stmt);    
								echo '<select class="" name="dep_city" id="w3_country1">
								<option value="0" selected disabled >Departure</option>';
								while ($row = mysqli_fetch_assoc($result)) {
								echo '<option value='. $row['city']  .'>'. 
									$row['city'] .'</option>';
								}
								?>
								</select>  
							</div>
							<div class="to">
								<h3 style="color: rgba(255, 255, 255, 0.767);">To</h3>
								<?php
								$sql = 'SELECT * FROM Cities ';
								$stmt = mysqli_stmt_init($conn);
								mysqli_stmt_prepare($stmt,$sql);         
								mysqli_stmt_execute($stmt);          
								$result = mysqli_stmt_get_result($stmt);    
								echo '<select value="0" name="arr_city" id="w3_country1">
								<option selected disabled>Arrival</option>';
								while ($row = mysqli_fetch_assoc($result)) {
								echo '<option value='. $row['city']  .'>'. 
									$row['city'] .'</option>';
								}
								?>
								</select>							
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3 style="color: rgba(255, 255, 255, 0.767);">Depart</h3>
									<input class="form-control" name="dep_date" type="date"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="return">
									<h3 style="color: rgba(255, 255, 255, 0.767);">Return</h3>
									<input class="form-control"  name="ret_date" type="date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="clear"></div>
							</div>
							<div class="class">
								<h3 style="color: rgba(255, 255, 255, 0.767);">Class</h3>
								<select id="w3_country1" 
									name="f_class" onchange="change_country(this.value)" class="frm-field required">
									<option value="E">Economy</option>  
									<option value="B">Business</option>   
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3 style="color: rgba(255, 255, 255, 0.767);">Passenger</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<input type="hidden" name="passengers"
												 class="input_val" value="1">
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Search Flights" name="search_but">
						</form>						
					</div>	
                    <!-- log on to freeprojectscodes.com for more projects -->
	 </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
<link rel="stylesheet" type="text/css" href="service.css">
</head>
<body scroll="no" style="overflow:hidden">
<div class="top">
<img id="logo" src="./images/WatchUSLOGO2.1.PNG" alt="logo" width="153" height="86">
<nav class="menu">
<ul>
	<li><a href="signin.php">Home</a></li>
	<li><a>Collection</a>
		<ul>
			<li><a>Analog Watch</a></li>
			<li><a>Digital Watch</a></li>
			<li><a>Smart Watch</a></li>
		</ul>
	</li>
	<li><a>About</a></li>
	<li><a href="service.php">Service</a></li>
	<li><a>Cart</a></li>
</ul>
</nav>
<h1 class="serviceHeader">Services</h1>
</div>
<div class="container">
	<div class="column active">
		<div class="content">
			<h1>1</h1>
			<div class="box">
				<h2>Maintenance</h2><br>
				<p>This servicing will include the following operations:<br><br>
					-inspection of the movement, (quartz or mechanical watches)<br>
 					-replacement of the battery, (quartz watches)<br> 
 					-checking all the operating parameters,  (quartz watches)<br>
					-cleaning the case and strap, (quartz and mechanical watches)<br> 
					-replacing the gaskets, (quartz and mechanical watches)<br>
					-checking the operation and the power reserve, (mechanical watches)<br>
					-checking the water resistance. (quartz or mechanical watches)
				</p>
			</div>
		</div>
		<div class ="bg bg1"></div>
	</div>
	<div class="column">
		<div class="content">
			<h1>2</h1>
			<div class="box">
				<h2>Polishing</h2><br>
				<p>For deep scratches, or major impacts, polishing will not be able to completely repair the damage.<br><br>
					Our watchmakers will also perform some maintenance operations, in addition to polishing the components:<br><br>
					-checking the operation of the movement<br>
					-replacing the battery for quartz watches or adjusting the automatic movement<br>
					-replacing the bars or screws, if necessary<br>
					-checking the appearance of the strap and clasp, and that these are secure<br>
					-ultrasonic cleaning of the watch<br>
					-replacing the gaskets
					
				</p>
			</div>
		</div>
		<div class ="bg bg2"></div>
	</div>
	<div class="column">
		<div class="content">
			<h1>3</h1>
			<div class="box">
				<h2>Battery Replacement</h2><br>
				<p>When replacing the battery, our watchmakers will also perform some maintenance operations: <br><br>
					-replacement of the battery,<br>
					-replacing the bars or screws, if necessary,<br>
					-checking the appearance of the strap and clasp, and that these are secure,<br>
					-ultrasonic cleaning of the watch,<br>
					-replacing the gaskets,<br>
					-checking the water resistance,<br>
					-checking the operation of the movement over 48 to 96 hours.
				</p>
			</div>
		</div>
		<div class ="bg bg3"></div>
	</div>
	<div class="column">
		<div class="content">
			<h1>4</h1>
			<div class="box">
				<h2>Contact Us</h2><br>
				<p>BY PHONE:<br>
					For any questions, thank you to call a Bell & amp adviser; Ross Monday to Friday from 9:30 am to 5:00 pm at:<br><br>
					+603-12345678<br><br><br><br><br>
					BY EMAIL:<br><br>
					inquiry.my@watchus.com
				</p>
			</div>
		</div>
		<div class ="bg bg4"></div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.0.js"></script>
<script type="text/javascript">
	$(document).on('mouseover','.container .column', function(){
		$(this).addClass('active').siblings().removeClass('active')
	})
</script>

</body>
</html>
<?php

$title = "Services | WatchUs";
$page = "services";
include "includes/header.php";
?>
</head>


<!-- Image header 
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold text-white"> Services And Support </h1>
            </div>
        </div>
    </div>
</header>
-->

<!-- Services section by cs -->


<div class="servicecontainer">
	<div class="column active">
		<div class="content">
			<h1>1</h1>
			<div class="box">
				<h2>Maintenance</h2><br>
				<p> The type of services for maintenance we offer are:<br><br>
				<ul class="text-left">
					<li> Inspection of the movement, (quartz or mechanical watches)<br>
					<li> Replacement of the battery, (quartz watches)<br> 
					<li> Checking all the operating parameters,  (quartz watches)<br>
					<li> Cleaning the case and strap, (quartz and mechanical watches)<br> 
					<li> Replacing the gaskets, (quartz and mechanical watches)<br>
					<li> Checking the operation and the power reserve, (mechanical watches)<br>
					<li> Checking the water resistance. (quartz or mechanical watches)
				</ul>

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
				<p>For deep scratches, or major impacts, polishing will not completely repair the damage.<br><br>
				<ul class="text-left">
					Our watchmakers will also perform some maintenance operations, in addition to polishing the components:<br><br>
					<li> Checking the operation of the movement<br>
					<li> Replacing the battery for quartz watches or adjusting the automatic movement<br>
					<li> Replacing the bars or screws, if necessary<br>
					<li> Checking the appearance of the strap and clasp, and that these are secure<br>
					<li> Ultrasonic cleaning of the watch<br>
					<li> Replacing the gaskets
				</ul>
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
				<p>When replacing the battery, our watchmakers will also perform some maintenance operations: <br>
				<ul class="text-left">
					<li> Replacement of the battery,<br>
					<li> Replacing the bars or screws, if necessary,<br>
					<li> Checking the appearance of the strap and clasp, and that these are secure,<br>
					<li> Ultrasonic cleaning of the watch,<br>
					<li> Replacing the gaskets,<br>
					<li> Checking the water resistance,<br>
					<li> Checking the operation of the movement over 48 to 96 hours.
				</ul>
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
				<p> <i class="fas fa-phone fa-lg"> Phone </i><br><br>
					For any inquiries, do contact us at our toll free hotline: <br>
					+(60)3-12345678  (9 am - 5 pm)<br><br>
	
					For product viewing appointments, do contact us and a certified WatchUs advisor will attend to you
					<br><br>
					<i class="fas fa-envelope fa-lg"> Email:</i><br><br>
					inquiries@WatchUs.com
				</p>
			</div>
		</div>
		<div class ="bg bg4"></div>
	</div>
</div>


</body>
</html>



<?php

include "includes/footer.php";

?>

<script type="text/javascript">
	$(document).on('mouseover','.servicecontainer .column', function(){
		$(this).addClass('active').siblings().removeClass('active')
	})
</script>
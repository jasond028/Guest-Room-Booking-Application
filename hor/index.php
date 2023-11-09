<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Guest Room Booking</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Guest Room Booking</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "index.php">Home</a></li> |
		<li><a href = "aboutus.php">About us</a></li> |
		<li><a href = "contactus.php">Contact us</a></li> |
		<li><a href = "gallery.php">Gallery</a></li> |
		<li><a href = "dineandlounge.php">Dine and Lounge</a></li> |			
		<li><a href = "reservation.php">Make a reservation</a></li> |
		<li><a href = "rulesandregulation.php">Rules and Regulation</a></li> |
		<li><a href = "houseowner/index.php">House owner Login</a></li> |
		<li><a href = "admin/index.php">Admin Login</a></li> |
		
	</ul>
	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		</ol>
		<div style = "margin:auto;" class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/a1.jpg" style = "width:90%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/b1.jpg" style = "width:90%; height:450px;"  />
			</div>
		
			<div class="item">
				<img src="images/c1.jpg" style = "width:90%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/d1.jpg" style = "width:90%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/e1.jpg" style = "width:90%; height:450px;" />
			</div>
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>	
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>
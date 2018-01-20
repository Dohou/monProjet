<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MaDouce Creation</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css" >

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<div class="container">

			<div class="row"><!-- Menu -->

				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<a class="navbar-brand" href="#">Andy Creation</a>
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="#">Accueil</a>
							</li>
							<li>
								<a href="#">Contact</a>
							</li>

							<li>
								<a href="admin.php">Admin</a>
							</li>
						</ul>
					</div>
				</nav>

			</div>

			<div class="row">

				<img src="img/img1.jpg" width="100%" height="250px">

			</div>
			<br>

			<div class="row">

				<div class="col-md-2"></div>

				<div class="col-md-8 col-xs-12">
					<?php 
					$n=1;
					while ($n < 5) {
						
					 ?>
					<div class="row"><!-- ligne article -->
						<div class="row">
							<div class="col-md-10"> <h1>telephone et ordinateur</h1></div>
							<div class="col-md-2"><h5 style=" color:red" >25000 FCFA</h5></div>
						</div>

						<div class="row">
							<div class="col-md-10"> <b>appareils importés depuis les usa</b> </div>
							<div class="col-md-2"> <img src="img/img3.jpg" width="50%" height="50%"> </div>
						</div>

						<div class="row">

							<h4 style=" color:green" >Stock : 10</h4>

						</div>
								
					</div>	
					<?php 
					$n++;
					} ?>

				</div>

				<div class="col-md-2"></div>


			</div>

		</div>



		<!-- jQuery -->
		<script src=""></script>
		<!-- Bootstrap JavaScript -->
		<script src=""></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>

    
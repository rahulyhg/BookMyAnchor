<?php 
session_start();
// if(!isset($_SESSION['login_user'])) { 
// 	header("Location: login.php");
// }
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <style type="text/css">
	    	@media screen and (min-width: 1000px){
				.icons{
					height: 120px;
				}
			}
			@media screen and (min-width: 1500px){
				.icons{
					height: 170px;
				}
			}
			.testing> img{
				 	/*position: absolute;*/
				    margin: auto;
				    top: 0;
				    left: 0;
				    right: 0;
				    bottom: 0;
			}

	    </style>
	</head>
	<body>
		<!-- header -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">BMA</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>

							
							<?php if(isset($_SESSION['login_user'])) { ?>
								


								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['login_user']; ?> <span class="caret"></span></a>
							        <ul class="dropdown-menu">
							          <li><a href="logout.php">logout</a></li>
							        </ul>
						      	</li>
						      	<?php

								}
								else{
									?>
									<a href="login.php?location=index.php">
								<span class="glyphicon glyphicon-log-in"></span> Login
								</a>
								<?php } ?>
							
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- ends header -->

		<!-- main container -->
		<!-- container for background image -->
		<div class="container main-container">
		</div>
		<!-- ends main container -->
		<!-- text in image -->
		<div class="container content-container text-center">
			<h2>BOOK THE BEST ANCHOR FOR YOUR EVENT</h2>
		</div>
		<!-- text ends -->
		<!-- types of events container -->
		<div class="icon-container">
			<a href="landingpage.php?ev_id=1">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icons/Campus.png" class="img-responsive">
					<span>Campus</span>
				</div>
			</a>
			<a href="landingpage.php?ev_id=2">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icons/Charity.png" class="img-responsive">
					<span>Charity</span>
				</div>
			</a>
			<a href="landingpage.php?ev_id=3">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icons/Coporate.png" class="img-responsive">
					<span>Coporate</span>
				</div>
			</a>
			<a href="landingpage.php?ev_id=4">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icons/Fashion.png" class="img-responsive">
					<span>Fashion Show</span>
				</div>
			</a>
			<a href="landingpage.php?ev_id=5">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icons/Kids Party.png" class="img-responsive">
					<span>Kids Party</span>
				</div>
			</a>
			<a href="landingpage.php?ev_id=6">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icons/Wedding.png" class="img-responsive">
					<span>Wedding</span>
				</div>
			</a>
			<a href="landingpage.php?ev_id=7">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icons/Private.png" class="img-responsive">
					<span>Private Party</span>
				</div>
			</a>
			<a href="landingpage.php?ev_id=8">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icons/Exhibition.png" class="img-responsive">
					<span>Exhibition</span>
				</div>
			</a>
			<a href="landingpage.php?ev_id=9">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icon.png" class="img-responsive">
					<span>Inaguration</span>
				</div>
			</a>
			<a href="landingpage.php?ev_id=10">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icons/Religion.png" class="img-responsive">
					<span>Religion</span>
				</div>
			</a>
			<a href="landingpage.php?ev_id=11">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icons/Promotion.png" class="img-responsive">
					<span>Promotion</span>
				</div>
			</a>
			<a href="landingpage.php?ev_id=12">
				<div class="col-md-1 icons text-center testing">
					<img src="img/icons/Concert.png" class="img-responsive">
					<span>Concert</span>
				</div>
			</a>
		</div>
		<!-- ends types of event container -->

		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Program Details</h4>
		      </div>
		      <div class="modal-body">
		        <input placeholder="Date" class="textbox-n form-control" type="date"  id="date">
		      </div>
		      <div class="modal-footer">
		      	<a href="landingpage.html"><button type="button" class="btn btn-primary">Book</button></a>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>

	</body>
</html>
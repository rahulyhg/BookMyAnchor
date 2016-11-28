<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<style type="text/css">
			html{
				background-image: url('img/maxresdefault (1).jpg');
				background-repeat: no-repeat;
			    min-height: 100%;
			    background-size: cover;
			    margin: 0;
			    min-width: 100%;
			}
			.back-ground-img{
				 
			}
			.nav-bar-bottom{
				margin-bottom: 0;
				position: relative;
			}
			.event-box{
				/*overflow: hidden;*/
			    background-color: #fff;
			    opacity: 0.7;
			    font-weight: 900;
			    border: 3px solid #333;
			    border-radius: 50%;
			}
			body{
				background-color: transparent;
			}
		</style>
	</head>
	<body>
	<?php
    	include 'db_connnection.php';
		$events_featch_query = 'SELECT * from M_EVENT_TYPE';
		$retval = mysql_query( $events_featch_query, $conn );

		if(! $retval ) {
		die('Could not get data: ' . mysql_error());
		}
    ?>

	<!-- nav bar container -->
		<nav class="navbar navbar-inverse nav-bar-bottom">
			<div class="container-fluid">
		    	<div class="navbar-header">
		    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
		      		</button>
		    		<a class="navbar-brand" href="#">WebSiteName</a>
		    	</div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			    	<ul class="nav navbar-nav">
				        <li class="active"><a href="#">Home</a></li>
				        <li><a href="#">Page 1</a></li>
				        <li><a href="#">Page 2</a></li> 
				        <li><a href="#">Page 3</a></li> 
			      	</ul>
			    	<ul class="nav navbar-nav navbar-right">
				        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			    	</ul>
			    </div>
			</div>
		</nav>
	<!-- ends nav bar container -->

	<!-- background img container -->
		<div class="container back-ground-img">
			<!-- event types -->
			<div class="navbar-bottom">
				<?php
				while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
					$event_type_icon = '"img/icons/'.$row["event_type"].'.png"';
				?>
					<div class="col-sm-1 event-box text-center">
						<img src= <?php echo"$event_type_icon"; ?> class="img-responsive">
					<?php
						echo "{$row['event_type']}";
					?>
					</div>
				<?php
				}
				?>
			</div>	
			<!-- ends event types -->
		</div>
	<!-- backgroung image container ends -->
	</body>
</html>
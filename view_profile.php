<?php 
session_start();
// if(!isset($_SESSION['login_user'])) { 
// 	header("Location: login.php");
// }
if(!isset($_GET['ac_id'])){
	header("Location: landingpage.php");
}
if(!isset($_COOKIE["ev_id"])){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
	<?php ob_start(); ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>jQuery UI Slider functionality</title>
		<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style type="text/css">
			.sidenav {
			    /*background-color: #f1f1f1;*/
			    background-color: #00BFFF;
			    height: 100%;
			    padding-top: 70px;
			    padding-left: 0;
			    padding-right: 0;
			    color:#fff;
		    }
		    .deatils-title{
		    	background-color: #00BFFF;
		    	height: 50px;
		    	color: #fff;
		    	text-align: center;
		    	padding-top: 15px;
		    }
		    .deatils-title h4{
		    	margin-top: 0;
		    	font-weight: 600;
		    }
		    .row.content {height: 100vh !important}
		    .profile-pic{
		    	height: 270px;
		    	width: 300px;
		    	overflow: hidden;
		    	margin-left: 15px;
		    	/*border-radius: 70%;
		    	border: 10px solid #333;*/
		    }
		    .navbar-inverse {
		    	background-color: #00BFFF;
    			border-color: #FFF;
		    }
		    .profile-container{
		    	/*width: 50%;
		    	margin-left: auto;
		    	margin-right: auto;*/
		    	/*border-radius: 5px;*/
		    }
		    .navbar-inverse .navbar-brand {
		    	color: #fff;
		    }
		    .navbar-inverse .navbar-nav>li>a{
		    	color: #fff;
		    	font-weight: 600;
		    	font-size: 16px;
		    }
		    .user-general-details ul{
		    	padding-right: 100px;
		    }
		    .user-general-details ul li{
		    	padding-bottom: 10px;
		    }
		    .biography{
		    	display: block;
		    	padding-top: 150px;
		    }
		    /*.row.content{
		    	height: 100%;
		    }*/
		    .booking-info{
		    	padding-top: 100px;
		    }
		    .shape {
			    width: 200px; 
			    height: 50px; 
			    -webkit-transform: skew(-30deg); 
			    -moz-transform: skew(-30deg); 
			    transform: skew(-30deg);
			    background: #000;
			    margin: 20px;
			}
			.buttons-container{
				margin-top: 70px;
			}
			.booking-info h3{
				margin-bottom: 15px;
			}
			.booking-details-container{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				width: 31%;
			    margin-left: 18px;
			    margin-bottom: 31px;
			    height: 170px;
			    padding: 0;
			    border-radius: 10%;
			}
			.details-full-view{
				padding-left: 15px;
				padding-right: 15px;
				padding-top: 25px;
				overflow-wrap: break-word;
			}
			.time{
				width: 50%;
			}
			.left{
				float: left;
			}
		</style>
		<script type="text/javascript">
        $(document).ready(function(){
          $("#btn-biography").click(function(){
            $("#biography").show();
            $("#photos").hide();
            $("#booking-info").hide();
            $("#btn-booking-info").removeClass("actived");
            $("#btn-photos").removeClass("actived");
            $("#btn-biography").addClass("actived");
          });

          $("#btn-booking-info").click(function(){
            $("#biography").hide();
            $("#photos").hide();
            $("#booking-info").show();
            $("#btn-biography").removeClass("actived");
            $("#btn-photos").removeClass("actived");
            $("#btn-booking-info").addClass("actived");
          });

          $("#btn-photos").click(function(){
            $("#biography").hide();
            $("#photos").show();
            $("#booking-info").hide();
            $("#btn-booking-info").removeClass("actived");
            $("#btn-biography").removeClass("actived");
            $("#btn-photos").addClass("actived");
          });
          $("#btn-biography").addClass("actived");
        });
      </script>
	</head>
	<body>
	<?php
          include 'db_connnection.php';
          $sql = 'SELECT * from B_ANCHOR_DETAILS where anchor_id ='.$_GET['ac_id'];
          $retval = mysql_query( $sql, $conn );
   
          if(! $retval ) {
            die('Could not get data: ' . mysql_error());
          }          
        ?>
	<!-- header -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Portfolio</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="#" id="btn-biography">Biography</a>
						</li>
						<li>
							<a href="#" id="btn-booking-info">Booking Info</a>
						</li>
						<li>
							<a href="#" id="btn-photos">Photo</a>
						</li>
						<li>
							<a href="#" id="btn-video">Video</a>
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
									$url = '"login.php?location=view_profile.php?ac_id='.$_GET["ac_id"].'"';
									?>
									<a href= <?php echo $url; ?> >
								<span class="glyphicon glyphicon-log-in"></span> Login
								</a>
								<?php } ?>
							
						</li>
					</ul>
				</div>
			</div>
		</nav>
	<!-- ends header -->
	<?php while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){ ?>
	<!-- side bar -->
		<div class="container-fluid">
			<div class="row content">
				<div class="col-sm-3 sidenav">
					<div class="profile-container">
						<div class="profile-pic">
							<?php $dp = $row['image_path'].'main.jpg"';?>
							<img src=<?php echo "$dp"; ?> class="img-responsive">
						</div>
					</div>	
					<div class="text-center">
						<h2><?php echo "{$row['anchor_name']}"; ?></h2>
						<h3>
						<?php
               $sql = 'SELECT * from ANCHOR_CATEGORY_CONNECTER where anchor_id='.$_GET['ac_id'];
               $retval2 = mysql_query( $sql, $conn );
   
               if(! $retval2 ) {
               die('Could not get data: ' . mysql_error());
               }
             
               while($row2 = mysql_fetch_array($retval2, MYSQL_ASSOC)) {
                $sql = 'SELECT * from anchor_category where category_id='.$row2['category_id'];
                $retval3 = mysql_query( $sql, $conn );
   
                if(! $retval3 ) {
                  die('Could not get data: ' . mysql_error());
                }
                ?>
               <span><?php 
                $j=0;
                while($row3 = mysql_fetch_array($retval3, MYSQL_ASSOC)) {  
                if($j==1)
                {
                  echo " / ";
                }
                echo "{$row3['category']}"; 
                $j=1;
                
                }}?></span></h3>
						<!-- <h3>Emcee/Anchor</h3> -->
					</div>		
					<!-- <div class="user-general-details">
						<ul>
							<li class="glyphicon glyphicon-th-list">
								<span>Height: 5ft 5inch</span>
							</li>
							<li class="glyphicon glyphicon-th-list">
								<span>Weight: 50</span>
							</li>
							<li class="glyphicon glyphicon-th-list">
								<span>Marital status: Single</span>
							</li>
							<li class="glyphicon glyphicon-th-list">
								<span>Nationality: Indian</span>
							</li>
							<li class="glyphicon glyphicon-th-list">
								<span>Languages known: English and malayalam</span>
							</li>
							<li class="glyphicon glyphicon-th-list">
								<span>4 years of experience on stage</span>
							</li>
						</ul>
					</div> -->
				</div>
				<div class="col-sm-9">
					<!-- buttons -->
					<!-- <div class="buttons-container text-center">
						<div class="shape col-md-4">
						</div>
						<div class="shape col-md-4">
						</div>
						<div class="shape col-md-4">
						</div>

					</div> -->
					<!-- ends buttons -->

					<!-- biography -->
					<div class="biography" id="biography">
						<h3 class="text-center">Biography</h3>
						<div class="biography-details">
							<p><?php echo "{$row['anchor_biography']}"; ?></p>

							<!-- <p>Flamboyant host,VJ,presenter &amp; a proffessional singer who is entertaining,dynamic &amp; passionate in bringing your events instyle &amp; beyond your ecpectation.Now with almost 4 years of experience on stage.</p> -->

						</div>
					</div>
					<!-- ends biograpgy -->
					<!-- photos -->
					<div class="photos text-center" id="photos">
						<div class="row">
						<?php for($i=1;$i<=6;$i++){
							$pics=$row['image_path'].$i.'.jpg"';
						?>
							<div class="col-md-4 actor-images">
								<img src=<?php echo "$pics"; ?> class="img-responsive anchor-container">
							</div>
							<!-- <div class="col-md-4 actor-images">
								<img src="img/anchors/anjana/_91A9422.jpg" class="img-responsive anchor-container">
							</div>
							<div class="col-md-4 actor-images">
								<img src="img/anchors/anjana/_91A9440.jpg" class="img-responsive anchor-container">
							</div> -->
							<?php } ?>
						</div>

						<!-- <div class="row">
							<div class="col-md-4 actor-images">
								<img src="img/anchors/anjana/_91A9491.jpg" class="img-responsive anchor-container">
							</div>
							<div class="col-md-4 actor-images">
								<img src="img/anchors/anjana/_91A9506.jpg" class="img-responsive anchor-container">
							</div>
							<div class="col-md-4 actor-images">
								<img src="img/anchors/anjana/_91A9618.jpg" class="img-responsive anchor-container">
							</div>
						</div> -->
					</div>
					<!-- end photos -->

					<!-- booking info -->
					<div class="booking-info" id="booking-info">
						<h3 class="text-center">Booking Information</h3>
						<div class="booking-info-details">
							<div class="row">
								<div class="col-md-4 booking-details-container">
									<div class="deatils-title">
										<h4>Performing Team</h4>
									</div>
									<div class="details-full-view">
										<span><?php echo "{$row['anchor_performing_team']}"; ?> Member/s</span>
									</div>
								</div>
								<div class="col-md-4 booking-details-container">
									<div class="deatils-title">
										<h4>Performance Duration</h4>
									</div>
									<div class="details-full-view">
												<?php
												$ev_id=$_COOKIE["ev_id"];
               									$sql = 'SELECT * from M_EVENT_TYPE where event_id='.$ev_id;
               									$retvl = mysql_query( $sql, $conn );
   
               									if(! $retvl ) {
         									      die('Could not get data: ' . mysql_error());
            								   }
            								   
             
       									        while($row5 = mysql_fetch_array($retvl, MYSQL_ASSOC)) {
       									        ?>
										<span> <?php echo "{$row5['performance_duration']}"; }?> </span>
									</div>
								</div>
								<div class="col-md-4 booking-details-container">
									<div class="deatils-title">
										<h4>Languages Known</h4>
									</div>
									<div class="details-full-view">
										<span><?php echo "{$row['anchor_language']}"; ?></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 booking-details-container">
									<div class="deatils-title">
										<h4>Events Preferred</h4>
									</div>
									<div class="details-full-view">
										<span>CAMPUS EVENTS, CONCERTS/FESTIVALS, CORPORATE EVENTS, RESTAURANTS-PUBS-BARS, WEDDINGS</span>
									</div>
								</div>
								<div class="col-md-4 booking-details-container">
									<div class="deatils-title">
										<h4>Open To Travel</h4>
									</div>
									<div class="details-full-view">
										<span>Nationwide</span>
									</div>
								</div>
								<div class="col-md-4 booking-details-container">
									<div class="deatils-title">
										<h4>Performance Fee</h4>
									</div>
									<div class="details-full-view text-center">
										<!-- <span>10000</span> -->
										<button class="budget-fix" data-toggle="modal" data-target="#myModal" data-ids=<?php echo "{$row['anchor_id']}"; ?> >Fix Budget</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ends biograpgy -->
					<?php } ?>
				</div>
			</div>
		</div>
	<!-- ends side bar -->

	    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Check Your Budget</h4>
        </div>
        <div class="modal-body">
          <div id="available_form">
            <form id="form1" method="POST">
              Duration
              <br>
              <select class="form-control time left" name="hour">
              	<?php 
              	for($i=0;$i<=24;$i++){?>
              	<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
              	<?php
              	}
              	?>
              </select>

              <select class="form-control time" name="minute">
              	<?php 
              	for($i=0;$i<=60;$i++){?>
              	<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
              	<?php
              	}
              	?>
              </select>
              Days: <select class="form-control " name="days">
              	<?php 
              	for($i=1;$i<=30;$i++){?>
              	<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
              	<?php
              	}
              	?>
              </select>
              <div id="append"></div>
              <button id="test" type="button" class="btn btn-info">Check Amount</button>
            </form>
          </div>
          <div id="available_result">
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- modal ends -->


  <script type="text/javascript">
      $(".budget-fix").click(function (e) {
        console.log("inside")
        var Id=$(this).attr('data-ids');
        var input = "<input type='hidden' value='"+Id+"' name='jishnu'/>"
        $('#append').append(input);
        $("#available_result").hide(); // appending data response to result-page div
        $('#available_form').show();  //hiding form
        $("#available_result").empty();
        console.log(Id);
      });
      $("#test").click(function (e) {
        var frm = $('#form1');
        e.preventDefault;
      $.ajax({
        url: 'check_rate.php',
        type: 'POST',
        data: frm.serialize(),
        success: function (data) {
            $("#available_result").append(data).show(); // appending data response to result-page div
            $('#available_form').hide();  //hiding form
            setTimeout(function () {
                $("#result-page").hide(); 
                $("#link-page").show();
            }, 5000);
        }
      });
      });
    </script>

	</body>
</html>
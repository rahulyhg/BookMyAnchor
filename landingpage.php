<?php 
session_start();
// if(!isset($_SESSION['login_user'])) { 
//   header("Location: login.php");
// }
include 'db_connnection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <?php ob_start(); ?>
  <head>
    <title>Bootstrap Example</title>
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
      <style>
        body{
          overflow-x: hidden;
        }
        .ui-widget-header{
          background: #b30000;
        }
        button a{
          color: #fff;
          text-decoration: none;
        }
        button a:hover{
          color: #fff;
          text-decoration: none;
        }
        .sub-category>ul{
          list-style-type: none;
        }
        .right{
          float: right;
        }
        .img{
          height: 180px !important;
        }
        .online{
          background-color: green;
        }
        .ofline{
          background-color: #D3D3D3;
        }
        .busy{
          background-color: #FFA909; 
        }
        .status{
          width: 15px;
          height: 15px;
          border-radius: 50%;
        }
        .anchor-container>div>h3{
          padding-bottom: 30px;
        }
        .anchor-star{
          padding-bottom: 50px;
        }
        @media screen and (max-width: 700px) and (min-width: 300px) {
            .anchor-container{
              width: 78%;
            }
        } 
      </style>
      <!-- Javascript -->
      <script>
         $(function() {
            $( "#slider-3" ).slider({
               range:true,
               min: 0,
               max: 100000,
               values: [ 5000, 7000 ],
               slide: function( event, ui ) {
                  $( "#price1" ).val(ui.values[ 0 ]);
                  $( "#price2" ).val(ui.values[ 1 ]);
               }
           });
         $( "#price1" ).val($( "#slider-3" ).slider( "values", 0 ));
         $( "#price2" ).val($( "#slider-3" ).slider( "values", 1 ));
         });

         $(function() {
            $( "#slider-4" ).slider({
               range:true,
               min: 1,
               max: 6,
               values: [ 1, 6 ],
               slide: function( event, ui ) {
                  $( "#price3" ).val(ui.values[ 0 ]);
                  $( "#price4" ).val(ui.values[ 1 ]);
               }
           });
         $( "#price3" ).val($( "#slider-4" ).slider( "values", 0 ));
         $( "#price4" ).val($( "#slider-4" ).slider( "values", 1 ));
         });
      </script>
  </head>
  <body>

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
              <form class="navbar-form navbar-left" role="search" method="POST" action="search.php" >
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search" name="search_id">
                </div>
                <button type="submit" class="btn btn-default" id="search">Search</button>
              </form>
            </li>
            <li>
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
                  <a href="login.php?location=landingpage.php">
                <span class="glyphicon glyphicon-log-in"></span> Login
                </a>
                <?php } ?>
              
            </li>
          </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron logo-container">
      <img class="img-responsive" src="img/logo/png.png">
    </div>
    <div class="row">
      <div class="col-sm-3 sidenav">
        <form action="filter.php" method="post">
          <div class="price-container">
            <h4 class="text-center">Price Range</h4>
            <input type="text" id="price1" name="min_price" class="form-control">
              <div id="slider-3"></div>
            <input type="text" id="price2" name="max_price" class="form-control">
          </div>
          <!-- <div class="">
            <h4 class="text-center">Rating</h4>
            <input type="checkbox">  </input>
            <span class="glyphicon glyphicon-star"></span>
            <br>
            <input type="checkbox">  </input>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <br>
            <input type="checkbox">  </input>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <br>
            <input type="checkbox">  </input>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <br>
            <input type="checkbox">  </input>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
          </div> -->
          <div>
            <h4 class="text-center">Available</h4>
            <input type="checkbox" name="online">  Online</input>
            <br/>
            <input type="checkbox" name="offline">  Offline</input>
          </div>
          <div>
            <h4 class="text-center">Gender</h4>
            <input type="checkbox" name="male">  Male</input>
            <br/>
            <input type="checkbox" name="female">  Female</input>
          </div>
          <div>
            <h4>Performing Members</h4>
            <input type="text" id="price3" name="min_members" class="form-control">
              <div id="slider-4"></div>
            <input type="text" id="price4" name="max_members" class="form-control">
          </div>
          <div>
            <h4>Event Type</h4>
            <select class="form-control" name="event_type">
              <?php 
              $event_sql = 'SELECT * from M_EVENT_TYPE';
              $event_retval = mysql_query( $event_sql, $conn );
       
              if(! $event_retval ) {
                die('Could not get data: ' . mysql_error());
              }   
              while($event_row = mysql_fetch_array($event_retval, MYSQL_ASSOC)) {
              ?>
              <option value=<?php echo "{$event_row['event_type']}"; ?>><?php echo "{$event_row['event_type']}"; ?></option>
              <?php } ?>
            </select>
          </div>
          <div>
            <h4>Languages</h4>
            <input type="checkbox" name="english">English</input><br>
            <input type="checkbox" name="malayalam">Malayalam</input><br>
            <input type="checkbox" name="tamil">Tamil</input><br>
            <input type="checkbox" name="kanada">Kanada</input><br>
            <input type="checkbox" name="punjabi">Punjabi</input><br>
            <input type="checkbox" name="telugu">Telugu</input><br>
            <input type="checkbox" name="marati">Marathi</input>
          </div>
          <div class="text-center">
            <button class="btn btn-primary" type="submit">Apply Filter</button>
          </div>
        </form>
      </div>
      <div class="col-sm-9 anchor-main-container">
       <div class="row anchor-new-row">
        <?php
          if(!isset($_COOKIE['ev_id']))
          {
            if($_GET['ev_id']){
              $ev_id=$_GET['ev_id'];
              setcookie("ev_id", $ev_id, time() + 3600);  
            }
            else{
              header("Location: index.php");
            }
          }
          

          $sql = 'SELECT * from B_ANCHOR_DETAILS';
          $retval = mysql_query( $sql, $conn );
   
          if(! $retval ) {
            die('Could not get data: ' . mysql_error());
          }
          $i=0;   
          while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
          $i++;
            
        ?>

        
          <div class="col-sm-6 anchor-container">
            <div class="img anchor-image">
              <?php $dp = $row['image_path'].'main.jpg"';?>
              <?php $status = 'status right '.$row['status'];?>
              <br>
              <img src=<?php echo $dp; ?> class="img-responsive">
            </div>
            <div>
              <h3><?php echo "{$row['anchor_name']}"; ?><a title="<?php echo $row['status'];?>" ><div class="<?php echo $status;?>" ></div></a>
              </h3>
               <?php
               $sql = 'SELECT * from ANCHOR_CATEGORY_CONNECTER where anchor_id='.$row['anchor_id'];
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
                if($j!=0)
                {
                  echo " / ";
                }
                echo "{$row3['category']} / "; 
                $j=1;
                
                }}?></span>
              <p><?php echo "{$row['anchor_place']}"; ?> <span class="glyphicon glyphicon-map-marker"></span></p>
              <div class="anchor-star">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
              </div>
            </div>
            <button id="" class="check_available btn btn-default col-md-6" data-toggle="modal" data-target="#myModal" data-ids=<?php echo "{$row['anchor_name']}"; ?> >Check Available</button>
            <a href="view_profile.php?ac_id=<?php echo"{$row['anchor_id']}";?>"><button class="btn btn-default col-md-6">View Profile</button></a>
            <a href="book.html"><button class="btn btn-default col-md-12">Book Now</button></a>
          </div>
                    
        
        <?php
        if($i%2==0){ ?>
        </div>
        <div class="row anchor-new-row">
        <?php }
         } 

         ?>
        
          
        </div>

      </div>  
    </div>  

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Check available</h4>
        </div>
        <div class="modal-body">
          <div id="available_form">
            <form id="form1" method="POST">
              Event date:<input type="date" name="" class="form-control">
              Event Time:<input type="time" name="" class="form-control">
              <div id="append"></div>
              <button id="test" type="button" class="btn btn-info">Check available</button>
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


  <!-- Privacy Modal -->
  <div class="modal fade" id="privacy" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Privacy Policy</h4>
        </div>
        <div class="modal-body">
          test nsfkg snkgfn snkg 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- modal ends -->

  <!-- Terms Modal -->
  <div class="modal fade" id="terms" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Terms and Conditions</h4>
        </div>
        <div class="modal-body">
          test nsfkg snkgfn snkg 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- modal ends -->

    <footer class="container-fluid text-center">
      <div class="col-md-6 sub-category">
        <ul>
          <li>
            <a href="#">FAQs</a>
          </li>
          <li>
            <a href="#" data-toggle="modal" data-target="#privacy">Privacy Policy</a>
          </li>
          <li>
            <a href="#" data-toggle="modal" data-target="#terms">Terms and Conditions</a>
          </li>
        </ul>
      </div>
      <div class="col-md-6 sub-category">
        <ul>
          <li>
            <a href="#">Blog</a>
          </li>
          <li>
            <a href="#">Press Release</a>
          </li>
          <li>
            <a href="#">Contact Us</a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <span class="glyphicon glyphicon-earphone"></span>
        <span>+91 9995599449</span>
      </div>
      <div class="col-md-4">
        <span class="glyphicon glyphicon-envelope"></span>
        <span>info@bookmyanchors.com</span>
      </div>
      <div class="col-md-4">
        <span class="glyphicon glyphicon-map-marker"></span>
        <span>skldmglsmg</span>
      </div>
      <div class="col-md-6">
        <span>www.shadowtechlt.com</span>
      </div>
      <div class="col-md-6">
        <div>
          <div class="google"></div>
        </div>
      </div>
    </footer>

    <script type="text/javascript">
      $(".check_available").click(function (e) {
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
      $.ajax({
        url: 'check_available.php',
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


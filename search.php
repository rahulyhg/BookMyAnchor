<?php 
session_start();
//if(!isset($_SESSION['login_user'])) { 
  //header("Location: login.php");
//}
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
        .sub-category>ul{
          list-style-type: none;
        }
        button a:hover{
          color: #fff;
          text-decoration: none;
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
        .offline{
          background-color: #D3D3D3;
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
      </style>
      <!-- Javascript -->
      <script>
         $(function() {
            $( "#slider-3" ).slider({
               range:true,
               min: 0,
               max: 500,
               values: [ 35, 200 ],
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
                  <a href="login.php?location=search.php">
                <span class="glyphicon glyphicon-log-in"></span> Login
                </a>
                <?php } ?>
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
        <form>
          <div class="price-container">
            <h4 class="text-center">Price Range</h4>
            <input type="text" id="price1" class="form-control">
              <div id="slider-3"></div>
            <input type="text" id="price2" class="form-control">
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
            <input type="checkbox">  Online</input>
            <br/>
            <input type="checkbox">  Offline</input>
          </div>
          <div>
            <h4 class="text-center">Gender</h4>
            <input type="checkbox">  Male</input>
            <br/>
            <input type="checkbox">  Female</input>
          </div>
          <div>
            <h4>Performing Members</h4>
            <input type="text" id="price3" class="form-control">
              <div id="slider-4"></div>
            <input type="text" id="price4" class="form-control">
          </div>
          <div>
            <h4>Event Type</h4>
            <select class="form-control">
              <option>a</option>
              <option>a</option>
              <option>a</option>
              <option>a</option>
            </select>
          </div>
          <div>
            <h4>Languages</h4>
            <input type="checkbox">English</input><br>
            <input type="checkbox">Malayalam</input><br>
            <input type="checkbox">Tamil</input><br>
            <input type="checkbox">Kanada</input><br>
            <input type="checkbox">Punjabi</input><br>
            <input type="checkbox">Telugu</input><br>
            <input type="checkbox">Marathi</input>
          </div>
          <div class="text-center">
            <button class="btn btn-primary">Apply Filter</button>
          </div>
        </form>
      </div>
      <div class="col-sm-9 anchor-main-container">
      <a href="landingpage.php">back to profile</a>
       <div class="row anchor-new-row">
        <?php
          $flag_data=False;
          if(isset($_POST['search_id'])){
          $bma_code = (string)$_POST['search_id']; 
          include 'db_connnection.php';
          
          $sql = 'SELECT * from B_ANCHOR_DETAILS where bma_code='.$bma_code;
          $retval = mysql_query( $sql, $conn );
   
          if(! $retval ) {
            $sql1 = 'SELECT * from B_ANCHOR_DETAILS where anchor_name="'.$bma_code.'"';
            $retval1 = mysql_query( $sql1, $conn );
            if(! $retval1){
            die('Could not get data: ' . mysql_error());
            }
            if(mysql_num_rows($retval1)>0){
              $flag_data=True;
              $featch_data=$retval1;
            }
          }
          else{
            if(mysql_num_rows($retval)>0){
              $flag_data=True;
              $featch_data=$retval;
            }
          }
          }
          else{
          header("Location: landingpage.php");
          }
          $i=0;
          if($flag_data==True){

          while($row = mysql_fetch_array($featch_data, MYSQL_ASSOC)) {
          $i++;
            
        ?>

        
          <div class="col-sm-6 anchor-container">
            <div class="img anchor-image">

              <?php $dp = $row['image_path'].'main.jpg"';?>
              <br>
              <img src=<?php echo "$dp"; ?> class="img-responsive">
            </div>
            <div>
              <h3><?php echo "{$row['anchor_name']}"; ?><div class="status right online"></div></h3>
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
         }
         else{
         echo "no data found";
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

    <footer class="container-fluid text-center">
      <div class="col-md-6 sub-category">
        <ul>
          <li>
            <a href="#">FAQs</a>
          </li>
          <li>
            <a href="#">Privacy Policy</a>
          </li>
          <li>
            <a href="#">Terms and Conditions</a>
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


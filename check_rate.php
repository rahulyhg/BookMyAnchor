<?php
	include 'db_connnection.php';
	$achor_id = $_POST['jishnu'];
	$days = $_POST['days'];
	// $time_duration = $_POST['time_duration'];
	$hour = $_POST['hour'];
	$minute = $_POST['minute'];
	

	$ev_id=$_COOKIE["ev_id"];
	$sql = 'SELECT * from M_EVENT_TYPE where event_id='.$ev_id;
	$retvl = mysql_query( $sql, $conn );

	if(! $retvl ) {
	die('Could not get data: ' . mysql_error());
	}


	while($row5 = mysql_fetch_array($retvl, MYSQL_ASSOC)) {
		$duration = $row5['performance_duration'];
	}

	// $time_split = explode(":", $time_duration);
	$sql = 'SELECT * from B_ANCHOR_DETAILS where anchor_id='.$achor_id;
	$retval = mysql_query( $sql, $conn );
	if(! $retval ) {
		die('Could not get data: ' . mysql_error());
	} 
	$min_minute = substr($duration, 0, 2);
	$max_minute = substr($duration, 6, 3);
	

	$amount = 0;
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		$anchor_price = $row['price'];
		$anchor_name = $row['anchor_name'];	
	}


	$max_minute_to_hour = (int)((int)$max_minute / 60) + 1;
	if ($hour or $minute){
		if($max_minute_to_hour == $hour)
		{	
			$amount =  $amount + $anchor_price ;
		}
		else
		{	$amount = $anchor_price;
			while($max_minute_to_hour<$hour)
			{
				$amount = $amount + 500;
				$max_minute_to_hour++;
			}
		}
		if($days)
		{
			$amount = $amount * $days;
		}
	}
	else
	{
		$amount = $anchor_price * $days;
	}
	
		
	echo $anchor_name." costs almost for :". $amount;
?>
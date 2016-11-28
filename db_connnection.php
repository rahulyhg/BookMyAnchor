<?php
  // $dbhost = 'localhost:3306';
  // $dbuser = 'bookmyanchor';
  // $dbpass = 'radhika422';

  $dbhost = 'localhost:8080';
  $dbuser = 'root';
  $dbpass = 'jishnu';

  $conn = mysql_connect($dbhost, $dbuser, $dbpass);

  if(! $conn ) {
    die('Could not connect: ' . mysql_error());
  }
  mysql_select_db('BOOK_MY_ANCHORS');
?>
<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);	
    /*$myServer = "localhost";
	$myUser = "root";
	$myPass = "";
	$myDB = "jrs_ceramic";*/
	
/*	$myServer = "mysql2001.my-virtual-panel.com";
	$myUser = "umsgloba_dbadmin";
	$myPass = "jrs007007#";
	$myDB = "umsgloba_db";*/

	// $myServer = "localhost";
	// $myUser = "fineartl_dbadmin";
	// $myPass = "jrs007007#";
	// $myDB = "fineartl_db";


	$myServer = "localhost";
	$myUser = "root";
	$myPass = "";
	$myDB = "utsabnl_db";

$dbhandle = mysqli_connect($myServer, $myUser, $myPass,$myDB) or die("Couldn't connect to SQL Server on $myServer");
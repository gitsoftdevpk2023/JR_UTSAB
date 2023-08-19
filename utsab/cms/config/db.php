<?php

/*	$myServer = "localhost";
	$myUser = "northerndbadmin";//aorangecube_cmsdb
	$myPass = "jrs007007#";//
	$myDB = "northernwooddb";*/
	
	// $myServer = "localhost";
	// $myUser = "utsabnl_dbadmin";//aorangecube_cmsdb
	// $myPass = "jrs007007#";//
	// $myDB = "utsabnl_db";


	$myServer = "localhost";
	$myUser = "root";//aorangecube_cmsdb
	$myPass = "";//
	$myDB = "utsabnl_db";

/*	$myServer = "localhost";
	$myUser = "root";
	$myPass = "";
	$myDB = "ceramicdb";*/	


//DB connection string

$dbhandle = mysqli_connect($myServer, $myUser, $myPass,$myDB) or die("Couldn't connect to SQL Server on $myServer");
?>


<?php
if(isset($_REQUEST['op'])){
	$op=$_REQUEST['op'];
	switch ($op){
	   case $op;
	   		include "pages/".$op.".php";
	   break;

	   default :
			include "pages/dashboard.php";
	   break;
	}

} 	else{
		include "pages/dashboard.php";

}


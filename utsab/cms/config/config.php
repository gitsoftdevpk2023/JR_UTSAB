<?php
//session module -- start
session_start();
if(isset($_SESSION['login_flag'])){
    if($_SESSION['login_flag'] == 0 && $_SESSION['sess_id']!=session_id()){
        header("location:index.php");
    }
}else{
	header("location:index.php");
}
//session module -- end
// Branch Code
define("BRC","R");
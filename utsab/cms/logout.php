<?php
$_SESSION['login_flag'] = 'FALSE';
session_start();
session_unset();

header("location:index.php");
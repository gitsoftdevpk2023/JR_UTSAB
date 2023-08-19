<?php include_once "config/db.php"; ?>
<?php
//include_once "config/config.php";
session_start();

/*if($_SESSION['login_flag'] == 'TRUE')
{
$path="../".$_SESSION['login_type']."/";
	echo "<script>";
		echo "window.location='".$path."home.php'";
	echo "</script>";
}*/
//echo ($_SESSION['login_flag']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
   <link rel="shortcut icon" href="img/favicon.png"> 
  <title>UTSAB :: CMS Portal</title>

  <!-- Icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
  <!-- Main styles for this application -->

  <link href="css/style.css" rel="stylesheet">
  <!-- Styles required by this views -->
</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">
              <form name="frm" action="checklogin.php" method="post"/>
              <h1>Login</h1>
            <p class="text-muted">Sign In to your account</p>
            
              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name= "usertext" class="form-control" placeholder="Username">
              </div>
              <div class="input-group mb-4">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
            <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary px-4">Login</button>
                </div>
                <div class="col-6 text-right">
                  <!--<button type="submit" class="btn btn-link px-0">Forgot password?</button>-->
                </div>
             </div>
            </form>  
            </div>
          </div>
          <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>UTSAB</h2>
                <p>Customer Content Management</p>
                <!--<button type="button" class="btn btn-primary active mt-3">Register Now!</button>-->
				<img src="img/logo1.png">              
		</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap and necessary plugins -->
  <script src="js/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>
</html>

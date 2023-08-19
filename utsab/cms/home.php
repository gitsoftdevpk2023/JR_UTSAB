<?php
include "config/db.php";
include "config/config.php";
?>

<!DOCTYPE html>

<html lang="en">

  	<?php include("common/head.php"); ?>
  	<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
	  	<?php include("common/header.php"); ?>
	  	<div class="app-body">
	  		<?php include("common/navbar.php"); ?>
			<!-- Main content -->
		    <main class="main">
		        <!-- Breadcrumb Menu-->
		      <div class="container-fluid">
		        <div class="animated fadeIn">
		            <?php include_once "body.php"; ?>
		        </div>
		      </div>
		    </main>  
		</div>
	  	<?php include("common/footer.php"); ?>
		<!-- Bootstrap and necessary plugins -->
		<script src="js/bootstrap.js"></script>
		<!-- CoreUI main scripts -->
		<script src="js/app.js"></script>
		<script>
		$(".switch-input").click(function() {
			if($(this).is(':checked'))
			    alert($(this).attr('id')+" ON"); // 
			else
			    alert($(this).attr('id')+" OFF");
		});
		</script>
	</body>
</html>
<header class="app-header navbar">
	<button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
	  <span class="navbar-toggler-icon"></span>
	</button>

	<a class="navbar-brand" href="#"></a>
	<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
	  <span class="navbar-toggler-icon"></span>
	</button>

	<ul class="nav navbar-nav d-md-down-none">
	  <li class="nav-item px-3">
	    <a class="nav-link" href="#"><strong></strong> <?php  ?></a>
	  </li> 
	</ul>

	<ul class="nav navbar-nav ml-auto">
	 <li class="nav-item d-md-down-none"  style="right: 60px">
	    <?php 
	    ?>
	    <a class="nav-link" href="#">Logged in 
	    	<?php echo '['.date("d/m/Y") . ']';?>
	    </a>
	  </li>

      <!--<li class="nav-item d-md-down-none" style="right: 40px">
	    <a class="nav-link" href="home.php?op=change_password1">Change Super Pwd&nbsp;</a>
	  </li>-->

	  <li class="nav-item d-md-down-none" style="right: 40px">
	    <a class="nav-link" href="home.php?op=change_password">Change Pwd&nbsp;</a>
	  </li>

	  <li class="nav-item d-md-down-none" style="right: 40px">
	    <a class="nav-link" href="logout.php">Logout</a>
	  </li>

	</ul>

</header>
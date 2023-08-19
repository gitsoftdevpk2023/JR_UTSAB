<?php
  session_start();
  
  	if($_SESSION['text']=="")
	{
		
		
		header("location:index.php");	
		
   }
  
      include "util.php";
	 $obj=new help;
	 $msg="";
	 
         $id=$_REQUEST['id'];
   
     if($_SERVER['REQUEST_METHOD']=="POST")
		{
		    $fb_link=$_REQUEST['fb_link'];
			$twitter_link=$_REQUEST['twitter_link'];
			$youtube_link=$_REQUEST['youtube_link'];
			$map_link=$_REQUEST['map_link'];
			
    	$sql="update sns_master set fb_link='".$fb_link."', twitter_link='".$twitter_link."', youtube_link='".$youtube_link."',map_link='".$map_link."' where id='".$id."'";

			
				mysqli_query($dbhandle,$sql);
				
				$msg="<div style='background:lime; margin-left:10px; margin-top:10px; padding-left:10px; padding-top:10px; border:1px solid black; width:200px; height:50px; border-radius:10px 10px 10px 10px;'>Data has been inserted.........</div>";
		}
		$sql1="select * from sns_master where id='".$id."'";
		$rs=mysqli_query($dbhandle,$sql1);
		$d=mysqli_fetch_assoc($rs);
?>
<html>
<head>
<title>Admin MOS Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<?php
     include "header.php";
?>

<div id="wrapper">
	<?php
	     include "leftpanel.php";
	?>
		<div id="rightContent">
	<h3>Edit Social Link Page</h3>
	<div class="quoteOfDay">
	<b>Quote of the day :</b><br>
	<i style="color: #5b5b5b;">"If you think you can, you really can"</i>
	</div>
		
		<form class="form-horizontal"name="form1" method="post" action="">
		<table width="95%">
		  <tr>
		    <td width="125">Facebook</td>
		    <td><label for="twitter_link"></label>
	        <input class="form-control" type="text" name="fb_link" id="textfield2" value="<?php echo $d['fb_link'];?>"></td>
	      </tr>
		  <tr>
		    <td>Twitter</td>
		    <td><label for="textfield3"></label>
            <input class="form-control" name="twitter_link" type="text" id="textfield3" value="<?php echo $d['twitter_link'];?>"></td>
	      </tr>
           <tr>
		    <td>Youtube</td>
		    <td><label for="textfield3"></label>
            <input class="form-control" type="text" name="youtube_link" id="textfield3" value="<?php echo $d['youtube_link'];?>"></td>
	      </tr>
            <tr>
		    <td>Google map</td>
		    <td><label for="textfield3"></label>
            <input class="form-control" type="text" name="map_link" id="textfield3" value="<?php echo $d['map_link'];?>"></td>
	      </tr>
		  <tr>
		    <td></td>
		    <td><input class="form-control button" type="submit" value="Submit">
		      <input class="form-control button" type="reset" value="Reset"></td>
	      </tr>
		  </table>
          </form>
             
		</table>
        <td colspan="4"><?php echo $msg;?></td>
        
		
</div>
<div class="clear"></div>
<?php
     include "footer.php";
?>
</div>
</body>
</html>
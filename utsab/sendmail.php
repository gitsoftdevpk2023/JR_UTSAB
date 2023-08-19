<?php include("common/head.php");?>
<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

if(isset($_REQUEST['sbmt']))
{
		try
		{
			$to="mail@utsab.nl,utsab.netherlands@gmail.com,info@jayantaroy.com";
//			$from="info"."@".$_SERVER['HTTP_HOST'];
			$from=$_POST['form_email'];
			
			$msgx = "<b>Name: </b>".htmlentities($_POST['form_name'])."<br>";
			$msgx .= "<b>Contact No.: </b>".htmlentities($_POST['form_phone'])."<br>";
			$msgx .= "<b>Email: </b>".htmlentities($_POST['form_email'])."<br>";
			$msgx .= "<b>About Event: </b>".htmlentities($_POST['ddlevent'])."<br>";

			$msgx .= "<b>Rate US in : Hospitality: </b>".htmlentities($_POST['field1'])."<br>";
			$msgx .= "<b>Rate US in : Food: </b>".htmlentities($_POST['field2'])."<br>";
			$msgx .= "<b>Rate US in : Event Arrangements: </b>".htmlentities($_POST['field3'])."<br>";
			$msgx .= "<b>Rate US in : Cleanliness: </b>".htmlentities($_POST['field4'])."<br>";
			$msgx .= "<b>Rate US in : Cultural Programs: </b>".htmlentities($_POST['field5'])."<br>";
			$msgx .= "<b>Rate US in : Location: </b>".htmlentities($_POST['field6'])."<br>";
			
			$msgx .= "<b>Message: </b>".htmlentities($_POST['form_message'])."<br>";
			

			$subject="Online Enquiry";//$_POST['form_subject'];
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: <'.$from.'>' . "\r\n";
		//	$headers .= 'Cc: info@jayantaroy.com' . "\r\n";
		
			mail($to,$subject,$msgx,$headers);
			//echo "Email message sent.";
			echo "<script>";
				echo "window.location='contact.php?succ=1'";
			echo "</script>";
		} 
		catch (Exception $e) 
		{
			echo "<script>";
				echo "window.location='contact.php?succ=0'";
			echo "</script>";
		}
}
?>

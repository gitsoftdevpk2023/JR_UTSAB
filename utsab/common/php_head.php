<?php  
include "cms/config/db.php";

$sql = "select * from sns_master where status='ACTIVE'";
$selet= mysqli_query($dbhandle,$sql);
while($res =mysqli_fetch_assoc($selet))
 {
 $fb=$res['fb_link'];
 $tw=$res['twitter_link'];
 $yt=$res['youtube_link'];
 $inst=$res['instagram_link'];
 $map=$res['map_link'];
 $ld=$res['linkdin_link']; 
 $im=$res['indiamart_link']; 
 $ti=$res['tradeindia_link']; 
 $ab=$res['alibaba_link']; 
 }

$sql = "select * from profile_master where status='ACTIVE'";
$selet= mysqli_query($dbhandle,$sql);
while($res =mysqli_fetch_assoc($selet))
 {
 $comp_name=$res['comp_name'];
 $comp_logo=$res['comp_logo'];
 $comp_favicon=$res['comp_favicon'];
 $comp_app_bgcolor=$res['comp_app_bgcolor'];
 $comp_slogan=$res['comp_slogan']; 
 }

$sql = "select * from contact_master";
$sele= mysqli_query($dbhandle,$sql);
while($res =mysqli_fetch_assoc($sele))
 {
	 $address=$res['address'];
	 $contact_no=$res['contact_no'];
	 $mobile_no=$res['mobile_no'];
	 $email=$res['email'];							  
 } 

$sql = "select * from sns_master";
$sele= mysqli_query($dbhandle,$sql);
while($res =mysqli_fetch_assoc($sele))
 {
	 $map_link=$res['map_link'];								  
 }

 $sql="select * from product_details where status='ACTIVE'";
 $sele= mysqli_query($dbhandle,$sql);
while($res =mysqli_fetch_assoc($sele))
 {
	$product_details=$res['product_details'];
	$product_name=$res['product_name'];
	$pro_pic=$res['pro_pic'];
	$pro_id=$res['pro_id'];
	$product_price=$res['product_price'];
	$product_features=$res['product_features'];
 }

 $sql="select * from testi_master where status='ACTIVE'";
 $sele= mysqli_query($dbhandle,$sql);
while($res =mysqli_fetch_assoc($sele))
 {
	$testi_pic=$res['testi_pic'];
	$testi_name=$res['testi_name'];
	$testi_details=$res['testi_details'];	 
 }

 $sql="select * from client_master where status='ACTIVE'";
 $sele= mysqli_query($dbhandle,$sql);
while($res =mysqli_fetch_assoc($sele))
 {
	$client_logo=$res['client_logo'];
	$client_location=$res['client_location'];
	$client_name=$res['client_name'];	 
 }

 $sql="select * from service_master where serv_status='ACTIVE'";
 $sele= mysqli_query($dbhandle,$sql);
while($res =mysqli_fetch_assoc($sele))
 {
	$serv_name=$res['serv_name'];
	$serv_details=$res['serv_details'];
	$serv_pic=$res['serv_pic'];	 
 }
 

 $sql="select * from project_master where proj_status='ACTIVE'";
 $sele= mysqli_query($dbhandle,$sql);
while($res =mysqli_fetch_assoc($sele))
 {
	$proj_pic=$res['proj_pic'];
	$proj_location=$res['proj_location'];
	$proj_name=$res['proj_name'];	 
 }

 $sql="select * from team_master where team_status='ACTIVE'";
 $sele= mysqli_query($dbhandle,$sql);
while($res =mysqli_fetch_assoc($sele))
 {
	$team_name=$res['team_name'];
	$team_desig=$res['team_desig'];
	$team_details=$res['team_details'];
	$team_pic=$res['team_pic'];	
 }

   $sql ="select * from product_category where status='ACTIVE'";
 $sele= mysqli_query($dbhandle,$sql);
 while($res=mysqli_fetch_assoc($sele))
 {
	$category_name=$res['category_name'];
	$category_type=$res['category_type'];
	$cat_desc=$res['cat_desc'];
	$cat_pic=$res['cat_pic'];	 
 }



?>
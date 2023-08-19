// JavaScript Document
function checkid(){
	var id=document.getElementById( "UserId" ).value;
	if(id){
		$.ajax({
			type: 'post',
			url: 'pages/login_user_validation_script.php',
			data: {
				user_id:id,
			},
			success: function (response) {
				$( '#id_status' ).html(response);
				$( '#frm_ok' ).html(response);
				if(response=="OK"){
					$( '#id_status' ).html('<span style="color:green">User Id Is Available</span>');
					return true;	
				}else{
					return false;	
				}
			}
		});
	}else{
		$( '#id_status' ).html("");
		alert("enter the id");
		//return false;
	}
}

function checkall(){
	var idhtml=document.getElementById("frm_ok").innerHTML;
	if(idhtml =="OK"){
		return true;
	}else{
		//return false;
	}
}
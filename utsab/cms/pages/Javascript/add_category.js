// JavaScript Document
function checkname(){
	var name=document.getElementById( "username" ).value;
	if(name){
		$.ajax({
			type: 'post',
			url: 'pages/add_category_script.php',
			data: {
				user_name:name,
			},
			success: function (response) {
					$( '#name_status' ).html(response);
					$( '#frm_ok' ).html(response);
					if(response=="OK"){
						$( '#name_status' ).html('<span style="color:green">Name Is Available</span>');
						return true;	
					}
					else{
						return false;	
					}
			}
		});
	}else{
		$( '#name_status' ).html("");
		alert("enter the name");
		//return false;
	}
}

function checkall(){
	var namehtml=document.getElementById("frm_ok").innerHTML;
	if(namehtml =="OK"){
		return true;
	}else{
		//return false;
	}
}
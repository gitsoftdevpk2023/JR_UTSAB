// JavaScript Document
function checkmes(){
	var mes=document.getElementById( "mes_no" ).value;
	if(mes){
		$.ajax({
			type: 'post',
			url: 'pages/srvc_bk_offcr_mes_no_validation_script.php',
			data: {
				mes_no:mes,
			},
			success: function (response) {
				$( '#mes_status' ).html(response);
				$( '#frm_ok' ).html(response);
				if(response=="OK"){
					$( '#mes_status' ).html('<span style="color:green">Mes No. Is Available</span>');
					return true;	
				}else{
					return false;	
				}
			}
		});
	}else{
		$( '#mes_status' ).html("");
		alert("Please enter the mes no.");
		//return false;
	}
}

function checkall(){
	var meshtml=document.getElementById("frm_ok").innerHTML;
	if(meshtml =="OK"){
		return true;
	}
		/*else{
			return false;
		}*/
}
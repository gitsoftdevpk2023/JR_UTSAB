function checkname(){
	var g_name  = $('#customer').val();
	
		if( g_name == ""){
		
			alert('Customer is empty :');
			return false;
		     
	    }
}


function fac(ob){

if (ob.value.length > 10)
      ob.value = ob.value.slice(0, ob.maxLength);
}

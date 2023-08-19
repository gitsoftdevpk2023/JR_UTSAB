function fun(){
	var a =0,b=0;
	var d_name  = $('#dealer').val();
	var d_email = $('#d_email').val();
	var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	if(d_email != ""){
	
		if(filter.test(d_email)){
	
		return true;


		}else{
			a=1;
			alert('Not a valid email id');	
		}
	}
		if( d_name == ""){
		     b=1;
			alert('Dealer is empty :');
		     
	    }
		if(a==1 || b==1){
	
			return false;
	}
}


function fac(ob){

if (ob.value.length > 10)
      ob.value = ob.value.slice(0, ob.maxLength);
}

function checkname(){
	var a =0,b=0;
	var g_name  = $('#brnch').val();
	var g_email = $('#email').val();
	var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	if(g_email != ""){
		if(filter.test(g_email)){
	
		return true;


		}else{
			a=1;
			alert('Not a valid email id');	
		}
	}
		if( g_name == ""){
		     b=1;
			alert('Branch is empty :');
		     
	    }
		if(a==1 || b==1){
	
			return false;
	}
}

function check_branch(){
        var br_name = $("#brnch").val();
		

     $.ajax({
              url: "pages/branch_master_check_branch_name_ajax.php",
               type: "POST",
               data: {'br_name': br_name},
               success:function(data){

                if(data == 0){
                
				$("#brnch").val("");
		           $('#txtHint').html('<span style="color: red">This name is already taken </span>');
                 return false;
                } else{
                         $('#txtHint').html('<span style="color: green">This name can be taken </span>');   
					
                       }
               }
        });
}


function fac(ob){

if (ob.value.length > 10)
      ob.value = ob.value.slice(0, ob.maxLength);
}

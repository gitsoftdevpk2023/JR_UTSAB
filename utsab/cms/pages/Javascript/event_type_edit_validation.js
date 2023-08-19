// JavaScript Document
function FormValidation(){
	 
    // Name Validation..
	
    var n=document.forms["myForm"]["mm_e_t_name"].value;
    if(n == ""){
        alert('Please Enter The Event Name');
		
        document.forms["myForm"]["mm_e_t_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["mm_e_t_name"].style.borderColor = "green";
    }
    if (/^[0-9]+$/.test(document.forms["myForm"]["mm_e_t_name"].value)) {
        alert("Event Name Contains Numbers!");
        document.forms["myForm"]["mm_e_t_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["mm_e_t_name"].style.borderColor = "green";
    }
    if(n.length <=2){
        alert('Event Name is To Short');
        document.forms["myForm"]["mm_e_t_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["mm_e_t_name"].style.borderColor = "green";
    }
}
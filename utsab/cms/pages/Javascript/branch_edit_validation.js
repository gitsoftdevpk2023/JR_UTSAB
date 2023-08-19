// JavaScript Document

function FormValidation(){
	 
    //Branch Name Validation..
	
    var n=document.forms["myForm"]["mm_b_branch_name"].value;
    if(n == ""){
        alert('Please Enter The Branch Name');
		
        document.forms["myForm"]["mm_b_branch_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["mm_b_branch_name"].style.borderColor = "green";
    }
    if (/^[0-9]+$/.test(document.forms["myForm"]["mm_b_branch_name"].value)) {
        alert("Branch Name Contains Numbers!");
        document.forms["myForm"]["mm_b_branch_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["mm_b_branch_name"].style.borderColor = "green";
    }
    if(n.length <=2){
        alert('Branch Name is To Short');
        document.forms["myForm"]["mm_b_branch_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["mm_b_branch_name"].style.borderColor = "green";
    }
	//contact no. validation
	var mbl = document.forms["myForm"]["mm_b_contact_no"].value;
    if ( mbl == "") {
        alert("Please Provide Your Mobile No..!");
        document.forms["myForm"]["mm_b_contact_no"].style.borderColor = "red";
    } else {
        document.forms["myForm"]["mm_b_contact_no"].style.borderColor = "green";
    } 
	if ( /^[a-z]+$/.test(document.forms["myForm"]["mm_b_contact_no"].value)) {
        alert("This is not a mobile number..!!");
        document.forms["myForm"]["mm_b_contact_no"].style.borderColor = "red";
    } else {
        document.forms["myForm"]["mm_b_contact_no"].style.borderColor = "green";
    } 
}
// JavaScript Document
// JavaScript Document

 function FormValidation(){
	 
    // Name Validation..
	
    var n=document.forms["myForm"]["rd_name"].value;
    if(n == ""){
        alert('Please Enter Your Name');
        document.forms["myForm"]["rd_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["rd_name"].style.borderColor = "green";
    }
    if (/^[0-9]+$/.test(document.forms["myForm"]["rd_name"].value)) {
        alert("Your Name Contains Numbers!");
        document.forms["myForm"]["rd_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["rd_name"].style.borderColor = "green";
    }
    if(n.length <=3){
        alert('Your Name is To Short');
        document.forms["myForm"]["rd_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["rd_name"].style.borderColor = "green";
    }
	
	//validation for father name..
	
	// var fn=document.forms["myForm"]["ofsr_fthr_name"].value;
    /*if(fn == ""){
        alert('Please Enter Name');
        document.forms["myForm"]["ofsr_fthr_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["ofsr_fthr_name"].style.borderColor = "green";
    }
    if (/^[0-9]+$/.test(document.forms["myForm"]["ofsr_fthr_name"].value)) {
        alert("Father Name Contains Numbers..!");
        document.forms["myForm"]["ofsr_fthr_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["ofsr_fthr_name"].style.borderColor = "green";
    }
    if(fn.length <=3){
        alert('Name is To Short..');
        document.forms["myForm"]["ofsr_fthr_name"].style.borderColor = "red";
        return false;
    }else{
        document.forms["myForm"]["ofsr_fthr_name"].style.borderColor = "green";
    }*/
	
	//validity.rangeOverflow  //validation for contact no..
	
	var mbl = document.forms["myForm"]["rd_contact_no"].value;
    if ( mbl == "") {
        alert("Please Provide Your Mobile No..!");
        document.forms["myForm"]["rd_contact_no"].style.borderColor = "red";
    } else {
        document.forms["myForm"]["rd_contact_no"].style.borderColor = "green";
    } 
	if ( /^[a-z]+$/.test(document.forms["myForm"]["rd_contact_no"].value)) {
        alert("This is not a mobile number..!!");
        document.forms["myForm"]["rd_contact_no"].style.borderColor = "red";
    } else {
        document.forms["myForm"]["rd_contact_no"].style.borderColor = "green";
    } 
 
   /* //validation for date..
	if ( /^[a-z]+$/.test(document.forms["myForm"]["ofsr_dob"].value)) {
        alert("You have to select date..!!");
        document.forms["myForm"]["ofsr_dob"].style.borderColor = "red";
    } else {
        document.forms["myForm"]["ofsr_dob"].style.borderColor = "green";
    } */
	
	//validation for pran no.
	if ( /^[a-z]+$/.test(document.forms["myForm"]["rd_pran_no"].value)) {
        alert("Please Provide valid Adhar No..!!");
        document.forms["myForm"]["rd_pran_no"].style.borderColor = "red";
    } else {
        document.forms["myForm"]["rd_pran_no"].style.borderColor = "green";
    } 

	/*//validation for height..
	if ( /^[a-z]+$/.test(document.forms["myForm"]["ofsr_hght"].value)) {
        alert("Insert Proper Height..!");
        document.forms["myForm"]["ofsr_hght"].style.borderColor = "red";
    } else {
        document.forms["myForm"]["ofsr_hght"].style.borderColor = "green";
    } 
	*/
	//validation for Pan no..
	if ( /^[a-z]+$/.test(document.forms["myForm"]["rd_pan"].value)) {
        alert("Insert Proper Pan No..!");
        document.forms["myForm"]["rd_pan"].style.borderColor = "red";
    } else {
        document.forms["myForm"]["rd_pan"].style.borderColor = "green";
    } 
}

// JavaScript Document
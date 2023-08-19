$(document).ready(function(){

 

      $(".add-row").click(function(){
        	
      	 		  var vehicle = $("#vehicle_id").val();
      	 		  var v_res = vehicle.split("|");
                  
        

                  var color = $("#color_id").val();
                  var c_res = color.split("|");

                  var purchase_quantity = $("#purchase_quantity").val();
                  var v_price = $('#price').val();
                  var total = $('#total_price').val();

                  var a=0,c=0,d=0,e=0,f=0;
                  if(vehicle == ""){
                  	a=1;
				  	alert('Select a vehicle');
				  }
				  
                  		if(color == ""){
				  	
				  	c=1;
				  	alert('Color is empty');
				  }
				  if(purchase_quantity == ""){
				  	d=1;
				  	alert('Quantity is empty');
				  }

				  if(v_price == ""){
				  	e=1;
				  	alert('Price is empty');
				  }
				  if(a==1 || c==1 || d==1 || e==1 ){
				  	
				  	return false;
				  }else{

                  	 var markup = "<tr><td><input type='checkbox' class='checkBoxClass' name='record'></td><td><input type='hidden' name='vehicle[]' value='" + v_res[0] + "' size='25' readonly>" + v_res[1] + "</td><td><input type='hidden' name='color[]' class='form-control' value='" + c_res[0] + "' size='5' readonly>" + c_res[1] + "</td><td><input type='text' name='quantity[]' class='form-control' value='" + purchase_quantity + "' size='5' readonly></td><td><input type='text' name='price[]' class='form-control' value='" + v_price + "' size='5' readonly></td><td><input type='text' class='form-control' name='total[]' value='" + total + "' size='5' readonly></td></tr>";



	                 $(".apn").append(markup);
					}
    });

        $(".delete-row").click(function(){
            var a=0;
            $(".apn").find('input[name="record"]').each(function()
            {
                if($(this).is(":checked"))
                {
                $(this).parents("tr").remove();
                a =1;
                document.getElementById('ckbCheckAll').checked = false;
                }
            });
            if(a==0)
            {
                $('#ckbCheckAll').checked = false;
                      alert('Select a Vehicle');
            }
        });

              
          $("#ckbCheckAll").click(function () 
          {
                  $(".checkBoxClass").prop('checked', $(this).prop('checked'));
          });

     $('#price').blur(function () {

     	var purchase_quantity = parseInt($('#purchase_quantity').val());
     	var price = $('#price').val();
     	var tot = purchase_quantity * price;
     	$('#total_price').val(tot);


     });

});

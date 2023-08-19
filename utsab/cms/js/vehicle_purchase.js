$(document).ready(function(){

      $(".add-row").click(function(){
        	
      	 		  var vehicle = $("#vehicle_id").val();
      	 		  var v_res = vehicle.split("|");
                  
        

                  var color = $("#color_id").val();
                  var c_res = color.split("|");

                  var purchase_quantity = $("#purchase_quantity").val();
                  
                  var a=0,c=0,d=0;
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

				  
				  if(a==1 || c==1 || d==1){
				  	
				  	return false;
				  }else{

                  	 var markup = "<tr><td><input type='checkbox' class='checkBoxClass' name='record'></td><td><input type='hidden' name='vehicle[]' value='" + v_res[0] + "' size='25' readonly>" + v_res[1] + "</td><td><input type='hidden' name='color[]' class='form-control' value='" + c_res[0] + "' size='5' readonly>" + c_res[1] + "</td><td><input type='text' name='quantity[]' class='form-control' value='" + purchase_quantity + "' size='5' readonly></td></tr>";

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

     

});

function vehicle_colour(){
        var slno = $('#vehicle_id').val();
        var vehicle_id = slno.split("|");
  $.ajax({ 
        url: 'pages/purchase_entry_vehicle_color_ajax.php',
        type: 'POST',
        data: {'data' : vehicle_id[0]},
        success: function(result){
            $('#colour').html(result);
        }
      });

  }
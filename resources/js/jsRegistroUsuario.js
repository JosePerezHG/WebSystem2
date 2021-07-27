function doaction(){ 

	$("#error").hide();
  $("#succ").hide();
  	$("#paneltabla2").hide();

  $('#frmreg').submit(function() {
  	$("#error").hide();
	  $("#succ").hide();

  	$.ajax({
  		url:  ruta+"/RegistroUsuario/doSave",
  		type: 'post',
  		dataType: 'json',
  		data: $('#frmreg').serialize(),
  		success: function(e){  			
  			if(e.error==""){
  				$("#succ").show();
				$("#mensaje_ok").html(e.ok);   
				 $('#frmreg')[0].reset();
				 $("#succ").hide(6000);  
  			}else{
  				$("#error").show();
  				$("#mensaje_error").html(e.error);
  			}
  		}
  	})
  	.done(function() {
  		console.log("success");
  	})
  	.fail(function() {
  		console.log("error");
  	})
  	.always(function() {
  		console.log("complete");
  	});
  	  return false;
  	/* Act on the event */
  });

}
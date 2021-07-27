function doaction(){ 

	$("#error").hide();
  $("#succ").hide();
  	$("#paneltabla2").hide();

  $('#frmreg').submit(function() {
  	$("#error").hide();
	  $("#succ").hide();

  	$.ajax({
  		url:  ruta+"/AdminServicio/doSave",
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
// //////////////////////////////////////////////////////////////////// //

  $("#btn_mostrar").click(function() {
        $("#reporte").html("");
    $.ajax({
      url: ruta+"/AdminServicio/doList",
      type: 'post',
      dataType: 'json',
      data: {},
      success: function(e){  
        $("#reporte").html(e.data);
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
    
  });


  // $.ajax({
  //   url: ruta+"/AdminServicio/doList",
  //   type: 'post',
  //   dataType: 'json',
  //   data: {},
  //   success: function(e){  
  //      if (e.data.length>0){
  //         $("#paneltabla2").show();
  //       $(function () {
  //              $('#table').bootstrapTable({
  //                 data: e.data
  //               });
  //       $('#table').bootstrapTable('hideColumn', 'v1');      
  //         });
  //     }
  //      else{
  //       alert("No hay Registros");
  //      }  
  //   }
  // })
  // .done(function() {
  //   console.log("success");
  // })
  // .fail(function() {
  //   console.log("error");
  // })
  // .always(function() {
  //   console.log("complete");
  // });

}
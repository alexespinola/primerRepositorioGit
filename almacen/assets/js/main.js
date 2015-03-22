$(document).ready(function() {

    $('#example').DataTable({
            "language": {
                "url": "assets/js/dataTables.spanish.lang"
            }
        });


    $( ".cabecera_a tr th" ).on( "click", function() {

    	var orden = $(this).attr('orden');
	 	if(typeof orden != 'undefined'){

 			if($('#orientacion').val() == 'asc'){
 				$("#orientacion").val('desc');
 			}else{
 				$("#orientacion").val('asc');
 			}
	 		

	 		$("#orden").val(orden).change();


	 	}
	
	});

  



} );
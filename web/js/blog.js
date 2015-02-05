"use strict";

$('.remove-btn').click(
	function(e){

		e.preventDefault();
		var action = $(this).attr('href');

		$.ajax({
			url:action,
			data:'',
			type:'DELETE',
			dataType:'HTML',
			success:function(response){

				console.log(response);

				window.location.reload();
			},
			error:function(e){
				console.log(e);
				//window.location.reload();
			}
		});
	})
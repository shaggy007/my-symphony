"use strict";

$('.remove-btn').click(
	function(e){

		e.preventDefault();
		var action = $(this).attr('href');
		var id = $(this).data('id');

		$.ajax({
			url:action,
			data:'',
			type:'DELETE',
			dataType:'HTML',
			success:function(response){

				$('.well-'+id).slideUp();
			},
			error:function(e){
				console.log(e);
				//window.location.reload();
			}
		});
	})
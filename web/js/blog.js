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
				window.location.reload();
			}
		});
	})
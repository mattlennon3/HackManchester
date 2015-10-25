$(document).ready(function(){
	$.ajax({
		type: 'get',
		url: 'byyou',
		success: function(result){
			console.log(result);
		}
	}).fail(function(err){
		console.log(err.responseText);
	})

});
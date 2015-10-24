$(document).ready(function(){
	$(".cat").bind('click', function(){
		$('#dropdownMenu1').text(this.text);
	});

	$("#search").bind('click', function(){
		var text = $("#searchtext").val();

		$.ajax({
			url:"challenges",
			method:"post",
			data: { title : text },
			success: function(data){
				console.log(data)
			}
		}).fail(function(err){
			console.log(err.responseText);
		});

	});

});


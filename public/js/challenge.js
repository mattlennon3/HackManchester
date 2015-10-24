$(document).ready(function(){
	$(".cat").bind('click', function(){
		$('#dropdownMenu1').text(this.text);
	});

	$("#search").bind('click', function(){
		var text = $("#searchtext").val();
		var category = $("#dropdownMenu1").text();
		console.log("Category: " + category)
		if (category == "Categories"){
			category = "";
		}

		$.ajax({
			url:"challenges",
			method:"post",
			data: { title : text,
					category : category
			 },
			success: function(data){
				console.log(data);

				$.each(data, function(index, element){
					$('#title'+index).attr('data-parent', '#accordiondata'+index);
					$('#title'+index).text(data[index].Title)
					$('#accordion'+index).clone().attr('id','accordion'+(index+1)).insertAfter('#accordion'+index);

					



					console.log(data[index].Title);

										//data[index].Title

				});
			}
		}).fail(function(err){
			console.log(err.responseText);
		});

	});

});


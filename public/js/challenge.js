$(document).ready(function(){
	$(".cat").bind('click', function(){
		$('#dropdownMenu1').text(this.text);
	});

	$("#search").bind('click', function(){
		var text = $("#searchtext").val();
		var category = $("#dropdownMenu1").text();
		if (text.trim() != ''){
			text = null;
		}
		if (category == ("Categories" || "All")){
			category = null;
		}
		console.log("Category: " + category)

		$.ajax({
			url:"challenges",
			method:"post",
			data: { title : text,
					category : category
			 },
			success: function(data){
			
				// need to reset search
				var result = $('#sresults').children(':first');
				$('#sresults').empty();
				$('#sresults').append(result);

				console.log(data);
				$('#sresults').children(':first').show();
				$.each(data, function(index, element){
					if (index>30) {
						console.log("too many .... AHHHH");
					}
					// NO IDEA WHY THIS SHIT DOESNT REMOVE ATTR DATA-PARENT, breaks acordion.
					$('#accordion'+index).find('.panel-title').removeAttr('data-parent', ('#accordiondata'+index));
					//$('#accordion'+index).find('.panel-title').attr('data-parent', ('#accordiondata'+index));
					$('#accordion'+index).find('.panel-title').children().text(data[index].Title + " - " + data[index].Category);
					$('#accordion'+index).find('.description').text(data[index].Description)
					
					$('#accordion'+index).clone().attr('id','accordion'+(index+1)).insertAfter('#accordion'+index);
					
					console.log(data[index].Title);
				});
				//$('#sresults').last().empty();
			}
		}).fail(function(err){
			console.log(err.responseText);
		});

	});

});


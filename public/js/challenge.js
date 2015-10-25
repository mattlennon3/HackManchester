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
				$('#accordion').empty();
                
				console.log(data);
                
				$.each(data, function(index, element){
					if (index>30) {
						console.log("too many .... AHHHH");
					}
					// NO IDEA WHY THIS SHIT DOESNT REMOVE ATTR DATA-PARENT, breaks acordion.
					//$('#accordion'+index).find('.panel-title').removeAttr('data-parent', ('#accordion'));
					//$('#accordion'+index).find('.panel-title').attr('data-parent', ('#accordion'));
					//$('#accordion'+index).find('.panel-title').children().text(data[index].Title + " - " + data[index].Category);//title set here
					///$('#accordion'+index).find('.description').text(data[index].Description) //description written here
					
					//$('#accordion'+index).clone().attr('id','accordion'+(index+1)).insertAfter('#accordion'+index);
					var id = "collapse" + index;
                    var html ='<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#';
                    html += id + '">' + data[index].Title +'</a></h4></div><div id="' + id +'" class="panel-collapse collapse';
                    if(index == 0){
                        html+= " in";
                    }
                    html += '"><div class="panel-body"><p>' + data[index].Description + '</p></div></div></div></div>';

                    var $jQueryObject = $.parseHTML(html);
                    console.log($jQueryObject)
                    $( $jQueryObject ).appendTo( "#accordion" );
                    //data[index].Title
					console.log(html);
				});

			}
		}).fail(function(err){
			console.log(err.responseText);
		});

	});

});


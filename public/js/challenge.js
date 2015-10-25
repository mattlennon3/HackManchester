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

					var id = "collapse" + index;
                    var html ='<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#';
                    html += id + '">' + data[index].Title +'</a></h4></div><div id="' + id +'" class="panel-collapse collapse';
                    if(index == 0){
                        html+= " in";
                    }
                    html += '"><div class="panel-body"><p>' + data[index].Description + '</p><div>\n<p>Donate below!</p></div>';
                    html +=   '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">'
					html +=        '<input type="hidden" name="cmd" value="_donations">'
					html +=        '<input type="hidden" name="business" value="mattlennon3@hotmail.co.uk">'
					html +=        '<input type="hidden" name="lc" value="BM">'
					html +=        '<input type="hidden" name="item_name" value="Challengr">'
					html +=        '<input type="hidden" name="amount" value="10.00">'
					html +=        '<input type="hidden" name="currency_code" value="GBP">'
					html +=        '<input type="hidden" name="no_note" value="0">'
					html +=        '<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">'
					html +=        '<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">'
					html +=        '<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">'
					html +=    '</form>'
                    html += '</div></div></div></div>';

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
$("#search").click();

});


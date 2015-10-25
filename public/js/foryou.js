$(document).ready(function(){
	$.ajax({
		type: 'get',
		url: 'foryou',
		success: function(data){
			
			$('#accordionForYou').empty();
                console.log(data);
				$.each(data, function(index, element){

					var id = "collapseForYou" + index;
                    var html ='<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordionForYou" href="#';
                    html += id + '">' + data[index].Title + '<span style="float:right">Bounty: £'+ data[index].BountyAmount+'</span></a></h4></div><div id="' + id +'" class="panel-collapse collapse';
                    if(index == 0){
                        html+= " in";
                    }
                    html += '"><div class="panel-body"><p>' + data[index].Description + '</p><div><span><h4>Category: '+data[index].Category+'</h4></span></div></div></div></div>';
                    
                    if (data[index].Status == 1){

                    	// code to add button to donate money/accept proof.
                    	// html += <button id=gimmeyourmoney>
					}

                    var $jQueryObject = $.parseHTML(html);
                    	$( $jQueryObject ).appendTo( "#accordionForYou" );
					});
                    

				}
	}).fail(function(err){
		console.log(err.responseText);
	});


	$(function() {
		$( "#accordionForYou" ).accordion({
			collapsible: true
		});
	});	
});
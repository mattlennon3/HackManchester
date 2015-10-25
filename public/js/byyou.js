$(document).ready(function(){
	$.ajax({
		type: 'get',
		url: 'byyou',
		success: function(data){
			console.log(data);
			$('#accordion').empty();
                
				$.each(data, function(index, element){
					if (index>30) {
						//console.log("too many .... AHHHH");
					}

					var id = "collapse" + index;
                    var html ='<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#';
                    html += id + '">' + data[index].Title + '<span style="float:right">Bounty: £'+ data[index].BountyAmount+'</span></a></h4></div><div id="' + id +'" class="panel-collapse collapse';
                    if(index == 0){
                        html+= " in";
                    }
                    html += '"><div class="panel-body"><p>'+ data[index].Description + '</p><div><span><h4>Category: '+data[index].Category+'  </h4></span><span>Proof Description: '+data[index].ProofDescription+'  </span><span>Proof: '+data[index].ProofLink+'</span></div></div></div></div></div>';
                    if (data[index].Status == 5){

                    	// code to add button to donate money/accept proof.
                    	// html += <button id=gimmeyourmoney>

                    }


                    var $jQueryObject = $.parseHTML(html);
                    //console.log($jQueryObject)
                    $( $jQueryObject ).appendTo( "#accordion" );
					//console.log(data[index].BountyAmount);

				});


		}
	}).fail(function(err){
		console.log(err.responseText);
	});


	$(function() {
	    $( "#accordion" ).accordion({
	      collapsible: true
	    });
	  });
});



$(".createChallengeButton").click(function(){
    $(".initial").hide();
    $(".connect").show();
});
$(".connectButton").click(function(){
    $(".connect").hide();
    $(".createTemplate").show();
});
$(".saveTemplateButton").click(function(){
    $(".createTemplate").hide();
    $(".nominateFriend").show();
});
$(".NominateButton").click(function(){
    $(".nominateFriend").hide();
    $(".selectCharity").show();
});


$(document).ready(function(){


	$('#PickCategory').bind('change', function(){
		var text = $(this).find("option:selected").text();

		$.ajax({
			url: 'getChallengesByCat',
			type: 'POST',
			data: {
				category : text
			},
			success: function(challenges){

				$('#searchByCatResult').html('');

				for(var ind in challenges){
					$('#searchByCatResult').append(challenges[ind].Title);
				}
			}
		}).fail(function(err){
			console.log(err.responseText);
		});
	});
});


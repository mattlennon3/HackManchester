
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

	/*$(".initial").hide();
    $(".createTemplate").show();*/

	$('#PickCategory').bind('change', function(){
		var text = $(this).find("option:selected").text();

		$.ajax({
			url: 'getChallengesByCat',
			type: 'POST',
			data: {
				category : text
			},
			success: function(challenges){
				//console.log(challenges);
				$('#searchByCatResult').html('');

				for(var ind in challenges){

					var titleDiv = $('<div></div>').attr('class', 'challenge-title').append($('<h4></h4>').append(challenges[ind].Title));
					var descDiv = $('<div></div>').attr('class', 'challenge-desc').html(challenges[ind].Description);

					var useBtn = $('<button></button>').addClass('btn btn-default').attr('onclick', 'pickThis('+ challenges[ind].ID +')').append('This one!');
					var btnDiv = $('<div></div>').append(useBtn);
					var wholeDiv = $('<div></div>').attr('id', 'c'+challenges[ind].ID).append(titleDiv).append(descDiv).append(btnDiv);

					$('#searchByCatResult').append(wholeDiv);
				}
			}
		}).fail(function(err){
			console.log(err.responseText);
		});
	});
});

function pickThis(cID){
	var title = $('#c'+cID+ ' > .challenge-title').text();
	var desc = $('#c'+cID+ ' > .challenge-desc').text();
	var cat = $('#PickCategory').find('option:selected').val();

	$('#Title').val(title);
	$('#Description').val(desc);
	$('#Category').val(cat);
}

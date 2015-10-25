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
$(".NominateBack").click(function(){
	$(".nominateFriend").hide();
	$(".createTemplate").show();
});
$(".CharityButton").click(function(){

	var emailFriends = $('#selectedFriends > .email');

    var postData = {
    	Title : $('#Title').val(),
    	Description : $('#Description').val(),
    	Category : $('#Category').val(),

    	Name : $('#friendlist').find('option:selected').val(),

    	CharityID : $('#SelectCharity').val(),
    	BountyAmount : $('#totalBounty').val()
    };

    $.ajax({
    	type: 'POST',
    	url: '/createChallenge',
    	data: postData,
    	success : function(data){
    		console.log(data);
    		window.location.href = 'http://localhost:8000/dashboard';
    	}
    }).fail(function(err){
    	console.log(err.responseText);
    });
});
$(".CharityBack").click(function(){
	$(".selectCharity").hide();
	$(".nominateFriend").show();
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
				//console.log(challenges);
				$('#searchByCatResult').html('');

				for(var ind in challenges){

					var titleDiv = $('<div></div>').attr('class', 'challenge-title').append($('<h4></h4>').append(challenges[ind].Title));
					var descDiv = $('<div></div>').attr('class', 'challenge-desc').html(challenges[ind].Description);

					var useBtn = $('<button></button>').addClass('btn btn-default btn-sm').attr('onclick', 'pickThis('+ challenges[ind].ID +')').append('This one!');
					var btnDiv = $('<div></div>').css('text-align', 'right').append(useBtn);
					var wholeDiv = $('<div></div>').attr('id', 'c'+challenges[ind].ID).append(titleDiv).append(descDiv).append(btnDiv);

					$('#searchByCatResult').append(wholeDiv);
				}
			}
		}).fail(function(err){
			console.log(err.responseText);
		});
	});

	populateCharities();
});

/*
	Create-Challenge
*/
function pickThis(cID){
	var title = $('#c'+cID+ ' > .challenge-title').text();
	var desc = $('#c'+cID+ ' > .challenge-desc').text();
	var cat = $('#PickCategory').find('option:selected').val();

	$('#Title').val(title);
	$('#Description').val(desc);
	$('#Category').val(cat);
}

/*
	Nominate-Friend
*/
var friendCount = 1;
function addEmail(){
	var email = $('#FriendEmail').val();
	$('#FriendEmail').val('');

	var removeBtn = $('<i></i>').attr({
		'class': 'glyphicon glyphicon-remove',
		'onclick' : 'removeEmail(this)'
	});
	var emailSpan = $('<span></span>').attr('class','label label-primary label-md email').append(email).append(removeBtn);
	$('#selectedFriends').append(emailSpan);

	friendCount++;
	updateFriendCounter();
}

function removeEmail(obj){
	$(obj).parent().remove();
	friendCount--;
	updateFriendCounter();
}

/*
	Select-Charity	
*/
var charities;
function populateCharities(){
	$.ajax({
		url: 'getCharities',
		type: 'GET',
		success: function(result){
			charities = result;
			$('#SelectCharity').append($('<option></option>').val(-1).text('-----'));
			$.each(charities, function(index, item){
				$('#SelectCharity').append($('<option></option>').val(item.ID).text(item.Name));
			});
		}
	});
}

function displayCharity(obj){
	var index = obj.selectedIndex - 1;
	$('#charityInfoName').text(charities[index].Name);
	$('#charityInfoDesc').text(charities[index].Description);
}

function updateFriendCounter(){
	$('#friendCount').val(friendCount);
}

function updateBountyPerPerson(){
	console.log(parseFloat($('#totalBounty').val()));
	var total = parseFloat($('#totalBounty').val());
	$('#bpp').val(parseFloat(total / friendCount).toFixed(2));
}

function updateTotalBounty(obj){
	var bpp = parseFloat($('#bpp').val());
	$('#totalBounty').val(parseFloat(bpp * friendCount).toFixed(2));
}
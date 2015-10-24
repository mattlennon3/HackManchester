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


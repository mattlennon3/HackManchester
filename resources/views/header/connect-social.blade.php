<?php 

########## app ID and app SECRET (Replace with yours) #############
$appId = '1923124637913401'; //Facebook App ID
$appSecret = '2da0289593faf4ce0711d8305413f828'; // Facebook App Secret
$return_url = 'http://localhost/Hackmanchester/public/';  //path to script folder
$fbPermissions = 'user_friends, publish_actions'; // more permissions : https://developers.facebook.com/docs/authentication/permissions/

########## MySql details (Replace with yours) #############
$db_username = "root"; //Database Username
$db_password = ""; //Database Password
$hostname = "localhost"; //Mysql Hostname
$db_name = 'demo'; //Database Name
###################################################################

?>
<p>Connect through Facebook or Login Above!</p> 
<div id="fbButton" class="col-xs-6 col-sm-4 col-md-3 col-lg-3 center-block">
 <a class="btn btn-block btn-social btn-facebook"   onClick="javascript:CallAfterLogin();return false;">
    <i class="fa fa-facebook"></i> Sign in with Facebook
  </a>
</div>
 <div id="fb-root"></div>
        <script type="text/javascript">
window.fbAsyncInit = function() {
    FB.init({
        appId: '<?php echo $appId; ?>',
        cookie: true,xfbml: true,
        channelUrl: '<?php echo $return_url; ?>channel.php',
        oauth: true
        });
    };
(function() {
    var e = document.createElement('script');
    e.async = true;e.src = document.location.protocol +'//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);}());
var friends = '';
function CallAfterLogin(){
    FB.login(function(response) {       
        if (response.status === "connected") 
        {

            LodingAnimate(); //Animate login
            var test = '';
            FB.api('/me', function(data) {
                
              if(data.id == null)
              {
                    //Facbeook user email is empty, you can check something like this.
                    alert("You must allow us to access your email id!"); 
                    ResetAnimate();

              }else{
                    test = data;
          
                    //AjaxResponse(data.id, data.name, friends);
              }
            });
            FB.getLoginStatus(function(response) {
                if (response.status === 'connected') {
                 FB.api('/me/taggable_friends?limit=5000', function(response){
                    if (response && response.data){
                        var info = test;
                        globalFriends = response.data;
                    AjaxResponse(info.id, info.name, response.data);
                //AjaxResponseFriends(response)
      } else {
        console.log('Something goes wrong', response);
      }
    });
  }
});

         }
    },

    {scope:'<?php echo $fbPermissions; ?>'});
}

$(document).ready(function() {
    var globalFriends = '';
    $(".CharityButton").click(function(){
         alert('button clicked');
              postToWall();
    }); 
});

//functions
function AjaxResponse(id, name, friends)
{
var friendsdata = friends;

var options = $(".friendlist");
$.each(friends, function(index, element) {
    options.append($("<option />").val(element.name).text(element.name));
   
});

            $.ajax({
                    type: "POST",
                    url: '/Hackmanchester/public/',
                    data: { id : id, name: name},
                    success: function(data){
                            //alert(data);
                            $(".connect").hide();
    						$(".createTemplate").show();
                            
    						
                    }
                });
     //Load data from the server and place the returned HTML into the matched element using jQuery Load().
     $( "#results" ).load( "process_facebook.php" );
}
function postToWall(){
   var friendName = $(".friendlist option:selected").text();
    debugger;
   var fr = globalFriends[4].Id;
   var token = '';
   $.each(globalFriends, function(index, element) {
    var tempname = element.name;
    if(tempname === friendName){
        token = element.id;
        }
    });

    FB.api(
  'me/challengrhack:challenge',
  'post',
  {
    'challenge': '"http://samples.ogp.me/1923324824560049"',
    'image': 'http://www.newarksimpact.com/wp-content/uploads/2015/03/i-challenge-you.jpg',
    'tags': token,
    'access_token': FB.getAuthResponse()['accessToken'],

  },

 function(response) {
    if (!response || response.error)
                          {
                              console.log(response.error);
                              alert('Posting error occured');
                          }else{
                              alert('Success - Post ID: ' + response.id);
                          }
  }
);
        FB.api(
  'me/objects/game',
  'post',
  {'object': {
    'og:url': 'http://samples.ogp.me/163382137069945',
    'og:title': 'test Game',
    'og:type': 'game',
    'og:image': 'http://static.ak.fbcdn.net/images/devsite/attachment_blank.png',
    'og:description': 'Sample Game Description',
    'fb:app_id': '1923124637913401'
  }},

 function(response) {
    // handle the response
  }
);
   /* var opts = {
                message : 'HachManchester - You been Challenged!! @Matthew Lennon @AdamChappell',
                name : 'Post Title',
                link : 'www.postlink.com',
                description : 'post description',
                picture : 'http://2.gravatar.com/avatar/8a13ef9d2ad87de23c6962b216f8e9f4?s=128&amp;d=mm&amp;r=G'
            };
                        FB.api('/me/feed', 'post', opts, function(response)
                         {
                          if (!response || response.error)
                          {
                              console.log(response.error);
                              alert('Posting error occured');
                          }else{
                              alert('Success - Post ID: ' + response.id);
                          }
                         });*/
}
//Show loading Image
function LodingAnimate() 
{
    $("#LoginButton").hide(); //hide login button once user authorize the application
    $("#results").html('<img src="img/ajax-loader.gif" /> Please Wait Connecting...'); //show loading image while we process user
}

//Reset User button
function ResetAnimate() 
{
    $("#LoginButton").show(); //Show login button 
    $("#results").html(''); //reset element html
}

</script>
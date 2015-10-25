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
<p>Use Fast track buttons or input fields to Connect!</p> 

 <a class="btn btn-block btn-social btn-facebook"  onClick="javascript:CallAfterLogin();return false;">
    <i class="fa fa-facebook"></i> Sign in with Facebook
  </a>
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
                            alert(data);
                            //$(".connect").hide();
    						//$(".createTemplate").show();
    						
                    }
                });
     //Load data from the server and place the returned HTML into the matched element using jQuery Load().
     $( "#results" ).load( "process_facebook.php" );
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
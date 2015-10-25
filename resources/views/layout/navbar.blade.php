<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();        
    }
    $_SESSION['logged'] = 0;
        
    //checks if user is logged in, user would contain the id of the current logged in user 
    if (isset($_SESSION['user'])) {
        $_SESSION['logged'] = 1;
    }
?>
<style type="text/css">
    #formLogin{
        padding:17px;
        width:300px !important;
    }
    
    .hidden {
        display:none !important;
    }
    
    .shown{
        display:block !important;
    }
    
    @media only screen and (max-width: 768px){
        #formLogin{
            width:100% !important;
        }    
    }
    #logo{
        height: 50px;
    }
</style>
<script type="text/javascript">
    var hidden = true;
    var register = false;
    function displayLoginBox(){
        if($("#btnLogin").text() == "Login"){
            if ($("#confirmDiv:hidden")){
                $("#confirmDiv").show();
                $("#nameDiv").show();
                register = true;

                $("#btnLogin").text("Register");
                $("#regText").text("Cancel");
                $("#register").val(1);
            }
        } else {
            $("#confirmDiv").hide();
            $("#nameDiv").hide();
            register = false;

            $("#btnLogin").text("Login");
            $("#regText").text("Register");
            $("#register").val(0);
            $("#errMsg").hide();
        }
    }
</script>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-header" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="img/challengr-blue-sm.png" id="logo" alt="Challengr" /> </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-header">
      <ul class="nav navbar-nav navbar-left">
            <li><a href="/about">About Us</a></li>
            <li><a href="/challenges">Challenges</a></li>          
        </ul>
      <ul class="nav navbar-nav navbar-right">
            <?php if($_SESSION['logged'] == 0){ //if user logged out ?>             
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login</a>
          <ul class="dropdown-menu">
            <form class="form" id="formLogin" action="/login" method="post"> 
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group" id="nameDiv"  hidden>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group" id="confirmDiv" hidden>
                    <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm Password">
                </div>
                <input type="hidden" id ="register" name="register" value=0>
                <button type="submit" id="btnLogin" class="btn">Login</button>
                <a onclick="javascript:displayLoginBox()" id="regText" href="#">Register</a>
                <?php if(isset($_SESSION['error']) and $_SESSION['error'] == 1){
                        echo '<script type="text/javascript">displayLoginBox()</script>';
                        echo '<p class="bg-danger" id="errMsg">Your passwords do not match!</p>';
                    }?>
              </form>
          </ul>
        </li>
            <?php } else { //if logged in?>
            <li><a href="/dashboard"><span class="glyphicon glyphicon-tasks"></span> Dashboard</a></li>
            <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>
            <?php } ?>
      </ul>
    </div>
  </div>
</nav>
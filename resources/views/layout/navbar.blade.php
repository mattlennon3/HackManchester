<?php 
    session_start();        
    $_SESSION['logged'] = 0;
        
    //checks if user is logged in, user would contain the id of the current logged in user 
    if (isset($_SESSION['user'])) {
        $_SESSION['logged'] = 1;
    }
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-header" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Challengr </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-header">
      <ul class="nav navbar-nav navbar-left">
            <li><a>About Us</a></li>
            <li><a>Leaderboards</a></li>          
        </ul>
      <ul class="nav navbar-nav navbar-right">
            <?php if($_SESSION['logged'] == 0){ //if user logged out ?>             
            <li><button type="button" class="btn btn-default navbar-btn">Sign in</button></li>
            <?php } else { //if logged in?>
            <li><a>Dashboard</a></li>
            <li><a>Sign Out</a></li>
            <?php } ?>
      </ul>
    </div>
  </div>
</nav>
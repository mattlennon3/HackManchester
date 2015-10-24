@extends('master')

@section('content')

<nav class="navbar navbar-default">
  <div class="container-fluid">
  <form class="navbar-form navbar-left" role="search">
    <div class ="form-group col-md-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" id="dropdownMenu1" aria-expanded="false">Categories<span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" >
		    <li><a class="cat">Athletics</a></li>
		    <li><a class="cat">Fundraising</a></li>
		    <li><a class="cat">Trollololol</a></li>
		    <li><a class="cat">Running</a></li>
		  </ul>
		 </li>
	
  		</ul>
  	</div>	
    <div class="form-group col-md-1">
      <input type="text" class="form-control" placeholder="Search for Challenges" style="width: 200px" id="searchtext">
    
      <button type="button" id="search" class="btn btn-default">Search</button>
    </div>
    </form>    
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


{!! HTML::script('js/challenge.js') !!}
@stop
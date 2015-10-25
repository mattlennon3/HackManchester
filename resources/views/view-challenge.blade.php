@extends('master')

@section('content')
  <div class="container">
      <form class="navbar-form navbar-left" role="search">
          <div class ="form-group">
                <div class="input-group">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownMenu1">Categories <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a class="cat">All</a></li>
                            <li><a class="cat">Sports</a></li>
                            <li><a class="cat">Health</a></li>
                            <li><a class="cat">Trollololol</a></li>
                            <li><a class="cat">Running</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control" id="searchtext" placeholder="Search for Challenges">
                </div><!-- /input-group -->   
                <button type="button" id="search" class="btn btn-default">Search</button>
            </div>
        </form>
    </div>

<div id="sresults">
	<div class="panel-group" id="accordion0" style="display: none">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <h4 class="panel-title">
	                <a id="title0" data-toggle="collapse" data-parent="#accordiondata0" href="#collapse0">Title</a>
	            </h4>
	        </div>
	        <div id="collapse0" class="panel-collapse collapse in">
	            <div class="panel-body">
	                <p class="description">TEXT HERE </p>
	            </div>
	        </div>
	    </div>
	</div>
</div>
{!! HTML::script('js/challenge.js') !!}
@stop
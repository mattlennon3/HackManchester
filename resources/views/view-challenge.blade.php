@extends('master')

@section('content')

    <style type="text/css">
        #searchtext {
            width:300px;
        }
    </style>
  <div class="container-fluid">
      <form class="navbar-form" role="search">
          <div class ="form-group">
                <div class="input-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
<div class="bs-example">
    <div class="panel-group" id="accordion">
        
    </div>
    <br/><br/><br/><br/><br/>
</div>
{!! HTML::script('js/challenge.js') !!}
@stop
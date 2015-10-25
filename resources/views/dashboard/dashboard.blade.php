  @extends('master')

@section('content')

{!! HTML::style('css/bootstrap.vertical-tabs.css') !!}
  <div class="dashboardcontent">

<div class="col-xs-3"> <!-- required for floating -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs tabs-left">
      <li class="active"><a href="#home" data-toggle="tab">Summary</a></li>
      <li><a href="#profile" data-toggle="tab">For You</a></li>
      <li><a href="#messages" data-toggle="tab">By you</a></li>
      <li><a href="#settings" data-toggle="tab">Payments</a></li>
    </ul>
</div>

<div class="col-xs-9">
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="home">@include('dashboard.summary')</div>
      <div class="tab-pane" id="profile">@include('dashboard.for-you')</div>
      <div class="tab-pane" id="messages">@include('dashboard.by-you')</div>
      <div class="tab-pane" id="settings">@include('dashboard.account-payment')</div>
    </div>
</div>  
<!--
    <div class="background block_5">
    </div>
    <div class="center_block block_5">
      <div class="dashboardcontent">
      @include('dashboard.by-you')
      </div>
    </div>-->
  </div>
  @stop
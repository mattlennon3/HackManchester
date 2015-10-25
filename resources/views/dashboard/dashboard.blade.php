  @extends('master')

@section('content')
  <div class="dashboardcontent">
    <div class="background block_3">
    </div>
    <div class="left_block block_3">
      <div class="dashboardcontent">
      		<div class="summaryIcon">
      		Summary
      		</div>
      		<div class="foryouIcon">
      		For You
      		</div>
      		<div class="byyouIcon">
      		By you
      		</div>
      		<div class="paymentsIcon">
      		Payments
      		</div>
      </div>
    </div>
    <div class="background block_5">
    </div>
    <div class="center_block block_5">
      <div class="dashboardcontent">
      @include('dashboard.by-you')
      </div>
    </div>
  </div>
  @stop
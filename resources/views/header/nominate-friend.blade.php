
Select friend you would like to Challenge
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="mattlennon3@hotmail.co.uk">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="item_name" value="Charity Name">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

<select class="form-control friendlist" data-style="btn-primary" id="friendlist"> 
  <option value="volvo">Select Friend</option>
</select>

<?php

	$socialMedia = [
		'-1' => 'Social Media',
		'FB' => 'Facebook',
		'Google+' => 'Google+',
		'Twitter' => 'Twitter'
	];
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 form-horizontal">
			<div class="sub-title"><h3>Nominate Friends!</h3></div>

			<div class="form-group">
					{!! Form::label('FriendEmail', 'Email', ['class'=>'col-sm-2 control-label']) !!}
				<div class="col-sm-5">
					{!! Form::text('FriendEmail', '', ['class'=>'form-control']) !!}
				</div>
				<div class="col-sm-2">
					{!! Form::button('Add', ['class' => 'btn btn-default btn-sm form-control col-sm-5', 'onclick' => 'addEmail()']) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-12" id="selectedFriends">
					<!-- Selected friends added by JS -->
				</div>
			</div>

			<div class="content"></div>
		</div>


		<div class="col-sm-6">
			<div class="sub-title"><h3>Invite from Social Media</h3></div>

			<div class="row">
				<div class="col-sm-6">
					{!! Form::select('PickSocialMedia', $socialMedia, '', ["class" => "form-control", "id" => "PickSocialMedia", "style" => "width:100%"]) !!}
				</div>
			</div>

			<div class="scrollArea row" style="height:200px; overflow:auto;">
				<div class="col-sm-12" id="searchByCatResult">
					
				</div>
			</div>

			<div class="content"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6" style="text-align:left;">
			<button class="btn btn-default NominateBack">Back</button>
		</div>
		<div class="col-sm-6" style="text-align:right;">
			<button class="btn btn-default NominateButton">Next</button>
		</div>
	</div>
</div>



<<<<<<< HEAD
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
=======
>>>>>>> ae66edafca177b41c3964d0db68ba81ca39b5716
<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<div class="sub-title"><h3>Nominate Friend!</h3></div>

			<div class="form-group">
					{!! Form::label('', 'Select friend you would like to Challenge', ['class'=>'col-sm-5 control-label']) !!}
				<div class="col-sm-5">
					<select class="form-control friendlist" data-style="btn-primary" id="friendlist"> 
					  <option value="volvo">Select Friend</option>
					</select>
				</div>
			</div>
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


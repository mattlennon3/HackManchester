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
		<div class="col-sm-6">
			<div class="sub-title"><h3>Nominate Friends!</h3></div>

			<div class="form-group row">
				{!! Form::label('FriendEmail', 'Email', sm(2)) !!}
				{!! Form::text('FriendEmail', '', ['class' => '']) !!}
				{!! Form::button('Add', ['class' => 'btn btn-default btn-sm', 'onclick' => 'addEmail()']) !!}
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
					{!! Form::select('PickSocialMedia', $socialMedia, '', ["id" => "PickSocialMedia", "style" => "width:100%"]) !!}
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
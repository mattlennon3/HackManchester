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
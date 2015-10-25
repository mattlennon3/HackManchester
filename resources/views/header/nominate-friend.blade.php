<div class="container">
	<div class="row" style="padding-top:50px;">
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


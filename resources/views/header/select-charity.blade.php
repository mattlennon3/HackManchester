<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="sub-title"><h3>Select Charity</h3></div>

			<div class="form-group row">
				<div class="col-sm-6">
					{!! Form::select('Charity', [], '', ['class' => 'form-control', 'style' => 'width:100%', 'id' => 'SelectCharity', 'onchange' => 'displayCharity(this)']) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-12" id="selectedFriends">
					<!-- Selected friends added by JS -->
				</div>
			</div>

			<div class="scrollArea row" style="height:200px; overflow:auto;">
				<div class="col-sm-12">
					<h3 id="charityInfoName"></h3>
					<div id="charityInfoDesc"></div>
				</div>
			</div>

			<div class="content"></div>
		</div>


		<div class="col-sm-6">
			<div class="sub-title"><h3>Challenge Bounty</h3></div>

			<div class="row">
				<div class="col-sm-12 form-horizontal">
					<div class="form-group">
						<label class="control-label col-sm-5">Nominated</label>
						<div class="col-sm-6">
							<input class="form-control" style="text-align:right" readonly="true" id="friendCount" value="0">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-5">Bounty / person</label>
						<div class="col-sm-6">
							<input class="form-control" type="text" style="text-align:right" id="bpp" value="0.00" onkeyup="updateTotalBounty()" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-5">Total</label>
						<div class="col-sm-6">
							<input class="form-control" type="text" style="text-align:right" id="totalBounty" value="0.00" onkeyup="updateBountyPerPerson()"/>
						</div>
					</div>
				</div>
			</div>

			<div class="content"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6" style="text-align:left;">
			<button class="btn btn-default CharityBack">Back</button>
		</div>
		<div class="col-sm-6" style="text-align:right;">
			<button class="btn btn-default CharityButton">Challenge Now!</button>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="sub-title"><h3>Select Charity</h3></div>

			<div class="form-group row">
				<div class="col-sm-6">
					{!! Form::select('Charity', [], '', ['style' => 'width:100%', 'id' => 'SelectCharity', 'onchange' => 'displayCharity(this)']) !!}
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
				<div class="col-sm-12">
					<table style="width:80%">
						<tr>
							<td>Nominated</td>
							<td style="text-align:right" id="friendCount">0</td>
						</tr>
						<tr>
							<td>Bounty / person</td>
							<td style="text-align:right">
								<input type="text" style="text-align:right" id="bpp" value="0.00" onkeyup="updateTotalBounty()" />
							</td>
						</tr>
						<tr>
							<td>Total</td>
							<td style="text-align:right">
								<input type="text" style="text-align:right" id="totalBounty" value="0.00" onkeyup="updateBountyPerPerson()"/>
							</td>
						</tr>
					</table>
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
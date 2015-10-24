<?php
	function sm($num){
		return ["class" => "col-sm-".$num];
	}

	$categories = [
		'Sports' => 'Sports',
		'Health' => 'Health'
	];
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="sub-title"><h3>Create Your Own</h3></div>

				<div class="form-group row">
					{!! Form::label('Title', 'Title', sm(3)) !!}
					{!! Form::text('Title', '', sm(6)) !!}
				</div>

				<div class="form-group row">
					{!! Form::label('Description', 'Description', sm(3)) !!}
					{!! Form::text('Description', '', sm(6)) !!}
				</div>

				<div class="form-group row">
					{!! Form::label('Category', 'Category', sm(3)) !!}
					{!! Form::select('Category', $categories, '', sm(6)) !!}
				</div>

			<div class="content"></div>
		</div>


		<div class="col-sm-6">
			<div class="sub-title"><h3>Pick From Existing Categories</h3></div>

				<div class="row">
					<div class="col-sm-6">
						{!! Form::select('PickCategory', $categories, '', ["id" => "PickCategory", "style" => "width:100%"]) !!}
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
		<div class="col-sm-12" style="text-align:right;">
			<button class="btn btn-default saveTemplateButton">Next</button>
		</div>
	</div>
</div>
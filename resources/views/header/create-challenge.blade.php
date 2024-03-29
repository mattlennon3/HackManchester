<?php
	function sm($num, $extra=''){
		return ["class" => "col-sm-".$num." ".$extra];
	}

	$categories = [
		'-1' => '-----',
		'Sports' => 'Sports',
		'Health' => 'Health'
	];
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 form-horizontal">
			<div class="sub-title"><h3>Create Your Own</h3></div>

			<div class="form-group">
				{!! Form::label('Title', 'Title', sm(3,'control-label')) !!}
				<div class="col-sm-6">
					{!! Form::text('Title', '', ['class'=>'form-control']) !!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('Description', 'Description', sm(3,'control-label')) !!}
				<div class="col-sm-6">
					{!! Form::text('Description', '', ['class'=>'form-control']) !!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('Category', 'Category', sm(3,'control-label')) !!}
				<div class="col-sm-6">
					{!! Form::select('Category', $categories, '', ['class'=>'form-control']) !!}
				</div>
			</div>
		</div>


		<div class="col-sm-6">
			<div class="sub-title"><h3>Pick From Existing Categories</h3></div>

				<div class="row">
					<div class="col-sm-6">
						{!! Form::select('PickCategory', $categories, '', ["id" => "PickCategory", "style" => "width:100%", 'class' => 'form-control']) !!}
					</div>
				</div>

				<div class="scrollArea row" style="height:200px; overflow:auto;">
					<div class="col-sm-12" id="searchByCatResult">
						
					</div>
				</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12" style="text-align:right;">
			<button class="btn btn-default saveTemplateButton">Next</button>
		</div>
	</div>
</div>
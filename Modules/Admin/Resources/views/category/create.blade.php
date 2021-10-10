@extends('admin::layouts.main')

@section('content')
<div class="right_col" role="main">
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>THÊM DANH MỤC</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<br>
				<form id="demo-form2" action="store" method="post" class="form-horizontal form-label-left" novalidate="">
					@include('alert')
					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên danh mục<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="name" type="text" id="first-name" required="required" class="form-control " value="{{ old('name') }}">
						</div>
						@if($errors->has('name'))
							<span style="color:red">{{ $errors->first('name') }}</span>
							
						@endif
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Icon<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="icon" type="text" id="first-name" required="required" class="form-control ">
						</div>
						@if($errors->has('name'))
							<span style="color:red">{{ $errors->first('icon') }}</span>
							
						@endif
					</div>

					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Meta title<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="meta_title" type="text" id="first-name" required="required" class="form-control " value="{{ old('name') }}">
						</div>
			
					</div>					
					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Meta Description<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="meta_description" type="text" id="first-name" required="required" class="form-control " value="{{ old('name') }}">
						</div>

					</div>					
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nổi bật<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="checked" type="checkbox">
						</div>
					</div>
					
					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button class="btn btn-primary" type="button">Cancel</button>
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
					@csrf
				</form>
			</div>
		</div>
	</div>
					
</div>


@endsection
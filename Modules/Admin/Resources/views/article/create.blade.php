@extends('admin::layouts.main')

@section('content')
<div class="right_col" role="main">
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>BÀI VIẾT</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<br>
				<form id="demo-form2" action="store" method="post" class="form-horizontal form-label-left" novalidate="">
					@include('alert')
					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên bài viết<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="a_name" type="text" id="first-name" required="required" class="form-control " value="">
						</div>
						@if($errors->has('a_name'))
							<span style="color:red">{{ $errors->first('a_name') }}</span>
							
						@endif
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Description<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<textarea id="editor2" name="a_description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						@if($errors->has('a_description'))
							<span style="color:red">{{ $errors->first('a_description') }}</span>
							
						@endif
					</div>

					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nội dung<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<textarea id="editor1" name="a_content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						@if($errors->has('a_content'))
							<span style="color:red">{{ $errors->first('a_content') }}</span>
							
						@endif
					</div>	

		



					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Meta title<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="a_title_seo" type="text" id="first-name" required="required" class="form-control " value="">
						</div>

					</div>
					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Meta Description<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="a_description_seo" type="text" id="first-name" required="required" class="form-control " value="">
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

@section('load_img')
<script type='text/javascript'>
	function preview_image(event) 
	{
	 var reader = new FileReader();
	 reader.onload = function()
	 {
	  var output = document.getElementById('output_image');
	  output.src = reader.result;
	 }
	 reader.readAsDataURL(event.target.files[0]);
	}
</script>
@endsection

@section('ckeditor')
	<script src="{{ asset('public/ckeditor/ckeditor.js') }}"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
    </script>
@endsection
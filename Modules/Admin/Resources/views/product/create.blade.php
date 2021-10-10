@extends('admin::layouts.main')

@section('content')
<div class="right_col" role="main">
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>SẢN PHẨM</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<br>
				<form id="demo-form2" action="store" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" >

					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên sản phẩm<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="pro_name" type="text" id="first-name" required="required" class="form-control " value="">
						</div>
						@if($errors->has('pro_name'))
							<span style="color:red">{{ $errors->first('pro_name') }}</span>
							
						@endif
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Description<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<textarea name="pro_description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						@if($errors->has('pro_description'))
							<span style="color:red">{{ $errors->first('pro_description') }}</span>
							
						@endif
					</div>

					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nội dung<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<textarea id="editor1" name="pro_content"  class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						@if($errors->has('pro_content'))
							<span style="color:red">{{ $errors->first('pro_content') }}</span>
							
						@endif
					</div>	

		



					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Meta title<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="pro_title_seo" type="text" id="first-name" required="required" class="form-control " value="">
						</div>

					</div>
					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Meta Description<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="pro_description_seo" type="text" id="first-name" required="required" class="form-control " value="">
						</div>

					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Loại sản phẩm</label>
						<div class="col-md-6 col-sm-6 ">
							<select class="form-control" name="pro_category_id">
								<option value="0">Choose option</option>
								@if(isset($category))
									@foreach($category as $menu)
										<option value="{{ $menu->id }}">{{ $menu->c_name }}</option>
									@endforeach
								@endif
h
								

							</select>
						</div>
						@if($errors->has('pro_category_id'))
							<span style="color:red">{{ $errors->first('pro_category_id') }}</span>
							
						@endif

					</div>						
					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Gía sản phẩm<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="pro_price" type="text" id="first-name" required="required" class="form-control " value="">
						</div>
						@if($errors->has('pro_price'))
							<span style="color:red">{{ $errors->first('pro_price') }}</span>
							
						@endif
					</div>
					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Khuyến mãi<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="pro_sale" type="text" id="first-name" required="required" class="form-control " value="">
						</div>

					</div>
					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Số lượng<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="pro_number" type="text" id="first-name" required="required" class="form-control " value="">
						</div>

					</div>
									
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nổi bật<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="checked" type="checkbox">
						</div>
					</div>
				  <div class="item form-group">
				    <label class="col-form-label col-md-3 col-sm-3 label-align">Ảnh</label>
				    <div class="col-md-6 col-sm-6 ">
							<input onchange="preview_image(event)" name="picture" type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
				    
				  </div>
				  <div class="item form-group">
				    <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
				    <div class="col-md-6 col-sm-6 ">
							<img id="output_image" style="max-width: 300px; max-height: 300px; " alt="">
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
    </script>
@endsection
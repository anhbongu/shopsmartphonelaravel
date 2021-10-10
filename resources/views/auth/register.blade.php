@extends('main')
@section('content')
<div class="customer-login-area">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-xs-12">
				<div class="customer-register my-account">
					<form method="post" class="register">
						<div class="form-fields">
							<h2>Đăng ký</h2>
							<p class="form-row form-row-wide">
								<label for="reg_email">Name<span class="required">*</span></label>
								<input type="text" class="input-text" name="name" value="">
							</p>
							<p class="form-row form-row-wide">
								<label for="reg_email">Email address <span class="required">*</span></label>
								<input type="email" class="input-text" name="email" id="reg_email" value="">
							</p>

							<p class="form-row form-row-wide">
								<label for="reg_password">Password <span class="required">*</span></label>
								<input type="password" class="input-text" name="password" id="reg_password">
							</p>

							<p class="form-row form-row-wide">
								<label for="">Phone <span class="required">*</span></label>
								<input type="text" class="input-text" name="phone" id="">
							</p>
							

						</div>
						<div class="form-action">
							<div class="actions-log">
								<input type="submit" class="button" name="register" value="Register">
							</div>
						</div>
						@csrf
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
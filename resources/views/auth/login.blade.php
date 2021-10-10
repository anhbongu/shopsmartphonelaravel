@extends('main')
@section('content')
<div class="customer-login-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="customer-login my-account">
					<form action="" method="post" class="login">
						@include('alert')
						<div class="form-fields">
							<h2>Login</h2>
							<p class="form-row form-row-wide">
								<label for="username">Username or email address <span class="required">*</span></label>
								<input type="text" class="input-text" name="email" id="username" value="">
							</p>
							<p class="form-row form-row-wide">
								<label for="password">Password <span class="required">*</span></label>
								<input class="input-text" type="password" name="password" id="password">
							</p>
						</div>
						<div class="form-action">
							<p class="lost_password"> <a href="#">Lost your password?</a></p>
							<div class="actions-log">
								<input type="submit" class="button" name="login" value="Login">
							</div>
							<label for="rememberme" class="inline"> 
							<input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
						</div>
						@csrf
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection
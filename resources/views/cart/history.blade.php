@extends('main')
@section('content')
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container-inner">
					<ul>
						<li class="home">
							<a href="{{ route('home') }}">Home</a>
							<span><i class="fa fa-angle-right"></i></span>
						</li>
						<li class="category3"><span>Lịch sử mua hàng</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="cart-area-start">
	<div class="container">
		<form action="http://localhost/blog/shopping/buy" method="post">
			<!-- Shopping Cart Table -->
			<div class="row">
				<div class="col-md-12">
					{{ Helper::cmsHistory($history) }}


				</div>
			</div>
			
			<!-- Shopping Coupon -->	

			
		

	</form></div>	
</div>
@endsection
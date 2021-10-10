@extends('main')
@section('content')
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container-inner">
					<ul>
						<li class="home">
							<a href="index.html">Home</a>
							<span><i class="fa fa-angle-right"></i></span>
						</li>
						<li class="category3"><span>Shopping Cart</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="cart-area-start">
	<div class="container">
		<form action="{{ route('shopping.buy') }}" method="post">
			<!-- Shopping Cart Table -->
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="cart-table">
							<thead>
								<tr>
									<th>Product</th>
									<th>Product name</th>
									<th></th>
									<th>Unit Price</th>
									<th>Qty</th>
									<th>Subtotal</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php $total = 0; ?>
								@if($cart)
									@foreach($cart as $items)
										<?php $total += $items->totalPrice  ?>
										<tr>
											<td>
												<a href="#"><img style="width:100px; height:100px " src="{{ asset('public/uploads/product') }}/{{ $items->pro_avatar }}" class="img-responsive" alt=""></a>
											</td>
											<td>
												<h6>{{ $items->pro_name }}</h6>
											</td>
											<td><a href="#">Edit</a></td>
											<td>
												<div class="cart-price">{{ number_format($items->pro_price) }} vnđ</div>
											</td>
											<td>
												<form>
													<input type="text" placeholder="{{ $items->quantity }}">
												</form>
											</td>
											<td>
												<div class="cart-subtotal">{{ number_format($items->totalPrice) }} vnđ</div>
											</td>
											<td><a href="{{ route('shopping.cart.delete', ['id'=>$items->id]) }}"><i class="fa fa-times"></i>Xóa</a></td>
										</tr>
										<input type="hidden" name="form[id][]" value="{{ $items->id }}">
										<input type="hidden" name="form[name][]" value="{{ $items->pro_name }}">
										<input type="hidden" name="form[picture][]" value="{{ $items->pro_avatar }}">
										<input type="hidden" name="form[price][]" value="{{ $items->pro_price }}">
										<input type="hidden" name="form[quantity][]" value="{{ $items->quantity }}">
										@endforeach
								@endif

										<tr>
											<td colspan="7" style="text-align: right; color:red "><a href="{{ route('shopping.cart.delete') }}">hủy đơn hàng</a></td>
										</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Shopping Cart Table -->
			<!-- Shopping Coupon -->
			<div class="row">
				<div class="col-md-12 vendee-clue">
					<!-- Shopping Estimate -->
					<div class="shipping coupon">
						<h5>Estimate Shipping and Tax</h5>
						<p>Enter your destination to get a shipping estimate.</p>
						<form>
							<div class="shippingTitle"><p><span>*</span>Country</p></div>
							<div class="selectOption">
								<div class="selectParent">
									<select>
										<option value="">Please Select</option>
										<option value="1">Country 1</option>
										<option value="2">Country 2</option>
										<option value="1">Country 3</option>
										<option value="2">Country 4</option>
										<option value="1">Country 5</option>
										<option value="2">Country 6</option>
										<option value="1">Country 7</option>
										<option value="2">Country 8</option>
									</select>
								</div>
							</div>
							
							<div class="shippingTitle"><p>State/Province</p></div>
							<div class="selectOption">
								<div class="selectParent">
									<select>
										<option value="">Please Select</option>
										<option value="1">Region 1</option>
										<option value="2">Region 2</option>
										<option value="1">Region 3</option>
										<option value="2">Region 4</option>
										<option value="1">Region 5</option>
										<option value="2">Region 6</option>
										<option value="1">Region 7</option>
										<option value="2">Region 8</option>
									</select>
								</div>
							</div>
							
							<div class="shippingTitle"><p>Zip/Postal Code</p></div>
							<div class="selectOption">
								<input type="text">
							</div>
							<button type="submit">Get Quotes</button>
						</form>
					</div>
					<!-- Shopping Estimate -->
					<!-- Shopping Code -->
					<div class="shipping coupon hidden-sm">
						<div class=""><h5>Discount Codes</h5></div>
						<p>Enter your coupon code if you have one.</p>
						<form>
							<input type="text" class="coupon-input">
							<button class="pull-left" type="submit">APPLY COUPON</button>
						</form>
					</div>
					<!-- Shopping Code -->
					<!-- Shopping Totals -->
					<div class="shipping coupon cart-totals">
						<ul>
							
							<li class="cartSubT">Tổng cộng:    <span>{{ number_format($total) }} vnđ</span></li>
						</ul>
						<button type="submit">PROCEED TO CHECK OUT</button>
						<div class="multiCheckout">
							<a href="#">Checkout with Multiple Addresses</a>
						</div>
					</div>
					<!-- Shopping Totals -->
				</div>
			</div>
			<!-- Shopping Coupon -->	

			@csrf		
		</form>

	</div>	
</div>
@endsection
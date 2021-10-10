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
						<li class="category3"><span>{{ $cate_name->c_name }}</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shop-with-sidebar">
	<div class="container">
		<div class="row">
			<!-- left sidebar start -->
			<div class="col-md-3 col-sm-12 col-xs-12 text-left">
				<div class="topbar-left">
					<aside class="widge-topbar">
						<div class="bar-title">
							<div class="bar-ping"><img src="../public/user/img/bar-ping.png" alt=""></div>
							<h2>Lọc</h2>
						</div>
					</aside>
					<aside class="sidebar-content">
						<div class="sidebar-title">
							<h6>Chọn khoảng giá</h6>
						</div>
						<ul class="sidebar-tags">
							<li><a class="{{ Request::get('price')==1 ? 'sort-active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '1']) }}">Dưới 1 triệu</a></li>
							<li><a class="{{ Request::get('price')==2 ? 'sort-active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '2']) }}">1000.000 đến 3.000.000</a></li>
							<li><a class="{{ Request::get('price')==3 ? 'sort-active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '3']) }}">3000.000 đến 5.000.000</a></li>
							<li><a class="{{ Request::get('price')==4 ? 'sort-active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '4']) }}">5000.000 đến 7.000.000</a></li>
							<li><a class="{{ Request::get('price')==5 ? 'sort-active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '5']) }}">7000.000 đến 10.000.000</a></li>
							<li><a class="{{ Request::get('price')==6 ? 'sort-active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '6']) }}">Trên 10.000.000</a></li>
						
						</ul>
					</aside>


		
					<aside class="widge-topbar">
						<div class="bar-title">
							<div class="bar-ping"><img src="../public/user/img/bar-ping.png" alt=""></div>
							<h2>Tags</h2>
						</div>
						<div class="exp-tags">
							<div class="tags">
								<a href="#">camera</a>
								<a href="#">mobile</a>
								<a href="#">electronic</a>
								<a href="#">destop</a>
								<a href="#">tablet</a>
								<a href="#">accessories</a>
								<a href="#">camcorder</a>
								<a href="#">laptop</a>
							</div>
						</div>
					</aside>
				</div>
			</div>
			<!-- left sidebar end -->
			<!-- right sidebar start -->
			<div class="col-md-9 col-sm-12 col-xs-12">
				<!-- shop toolbar start -->
				<div class="shop-content-area">
					<div class="shop-toolbar">
						<div class="col-md-12 col-sm-4 col-xs-12 nopadding-left text-right">
							<form action="" id="sortBy" class="tree-most"  method="get">
								<div class="orderby-wrapper">
									<label>Sắp xếp</label>
									<select name="orderby" class="orderby">
										<option value="menu_order" selected="selected">Mặc định</option>
										<option {{ Request::get("orderby")=="price_desc" ? "selected" : "" }} value="price_desc">Gía giảm dần</option>
										<option {{ Request::get("orderby")=="price_asc" ? "selected" : "" }} value="price_asc">giá tăng dần</option>
									
									</select>
								</div>
							</form>
						</div>

					</div>
				</div>
				<!-- shop toolbar end -->
				<!-- product-row start -->
				<div class="tab-content">
					<div class="tab-pane fade in active" id="shop-grid-tab">
						<div class="row">
							<div class="shop-product-tab first-sale">
								@if($product)
									@foreach($product as $items)
										<div class="col-lg-4 col-md-4 col-sm-4">
											<div class="two-product">
												<!-- single-product start -->
												<div class="single-product">
													
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="../public/user/img/products/product-7.jpg" alt="">
															
														</a>
								
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
										
															</div>
														</div>
				
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}">{{ $items->pro_name }}</a></h2>
														<h2 class="new-price"><a href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}">{{ $items->pro_price }}</a></h2>
														<p>{{ $items->pro_description }}</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
										</div>
								@endforeach
								@endif

							</div>
						</div>
						<!-- product-row end -->

						<!-- product-row end -->
					</div>

					<!-- shop toolbar start -->
					<div class="shop-content-bottom">
						<div class="shop-toolbar btn-tlbr">

							<div class="col-md-4 col-sm-4 col-xs-12 text-center">
								<div class="pages">
									{!! $product->links() !!}
								</div>
							</div>
							
						</div>
					</div>
					<!-- shop toolbar end -->
				</div>
			</div>
			<!-- right sidebar end -->
		</div>
	</div>
</div>
@endsection
@section('script')
<script>
	jQuery(document).ready(function() {
		$(".orderby").change(function(){
			$("#sortBy").submit();
		});
	});

</script>
@endsection
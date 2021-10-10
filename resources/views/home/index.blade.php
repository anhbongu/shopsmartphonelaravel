@extends('main')
@section('content')
		@include('element.slider')

        <!-- end home slider -->
		<!-- main area start -->
		<div class="main-area">
			<div class="container">
				<div class="row">
						@include('element.sidebar')
					<div class="col-md-9">
						<!-- product section start -->
						<div class="our-product-area topo-product">
							<div class="area-title">
								<h2>Sản phẩm mới</h2>
							</div>
							<!-- our-product area start -->
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="featuresthree-curosel">
											<!-- single-product start --> 
											@if($pro_hot)
												@foreach($pro_hot as $items)
													<div class="col-lg-12 col-md-12">
														<div class="single-product ex-pro">
															<div class="product-img">
																<a href="#">
																	<img class="primary-image" src="public/user/img/iphone13.jpg" alt="" />
																	<img class="secondary-image" src="public/user/img/iphone13.jpg" alt="" />
																</a>
			
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="{{ route('shopping.order', [$items->id, $items->pro_price]) }}" title="Add to Cart"><i class="fa fa-cart-plus"></i></a>
																			</div>									
																		</div>
		
																	</div>
																</div>
					
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">{{ $items->pro_name }}</a></h2>
																<h2 class="product-name"><a href="#">{{ number_format($items->pro_price) }} vnđ</a></h2>
																<p>{{ $items->pro_description }}</p>
															</div>
														</div>
													</div>
												@endforeach
											@endif
											<!-- single-product end -->
										</div>
									</div>	
								</div>
							</div>
							<!-- our-product area end -->
						</div>
						<!-- product section end -->
						<!-- unit banner area start -->
						<div class="unit-banner-area">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-6">
									<!-- single banner start -->
									<div class="single-banner">
										<a href="#"><img src="public/user/img/banner/single-banner3-1.jpg" alt="" /></a>
									</div>
									<!-- single banner end -->
								</div>
								<div class="col-md-4 col-sm-4 hidden-xs">
									<!-- single banner start -->
									<div class="single-banner">
										<a href="#"><img src="public/user/img/banner/single-banner3-2.jpg" alt="" /></a>
									</div>
									<!-- single banner end -->
									<!-- single banner start -->
									<div class="single-banner bn-pro">
										<a href="#"><img src="public/user/img/banner/single-banner3-3.jpg" alt="" /></a>
									</div>
									<!-- single banner end -->
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<!-- single banner start -->
									<div class="single-banner">
										<a href="#"><img src="public/user/img/banner/single-banner3-4.jpg" alt="" /></a>
									</div>
									<!-- single banner end -->
								</div>
							</div>
						</div>
						<!-- unit banner area end -->
						<!-- product section start -->
						<div class="our-product-area">
							<!-- area title start -->
							<div class="area-title">
								<h2>Our products</h2>
							</div>
							<!-- area title end -->
							<!-- our-product area start -->
							<div class="row">
								<div class="col-md-12">
									<div class="features-tab">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs">
											<li role="presentation" class="active"><a href="#home" data-toggle="tab">Bestsellers</a></li>
											<li role="presentation"><a href="#profile" data-toggle="tab">Random Products</a></li>
										</ul>
										<!-- Tab panes -->
										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane fade in active" id="home">
												<div class="row">
													<div class="featuresthree-curosel">
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-1.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-2.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$222.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-3.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-4.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$240.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-5.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-6.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$280.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-7.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-8.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$333.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-9.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-10.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$400.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-12.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$300.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Accumsan elit</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-13.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-1.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$100.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-2.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-3.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$110.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Donec non est</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-4.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-5.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$222.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-6.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-7.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$300.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-8.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-9.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$400.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-10.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-12.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$330.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Pleasure rationally</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-12.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$213.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-13.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-2.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$340.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Consequences</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-2.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$250.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-12.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$222.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
														</div>
														<!-- single-product end -->
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="profile">
												<div class="row">
													<div class="featuresthree-curosel">
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-2.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$110.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-12.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$300.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Donec non est</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-12.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$200.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-13.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-2.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$250.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Fusce aliquam</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-8.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-9.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$370.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-10.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-12.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$170.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Pleasure rationally</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-13.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-1.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$450.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-2.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-3.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$300.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Consequences</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-4.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-5.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$350.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-6.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-7.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$250.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-9.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-10.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$180.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<span class="sale-text">Sale</span>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-11.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-12.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$310.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
														<div class="col-lg-12 col-md-12">
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-5.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-6.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$450.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
															<!-- single-product start -->
															<div class="single-product first-sale">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-image" src="public/user/img/products/product-7.jpg" alt="" />
																		<img class="secondary-image" src="public/user/img/products/product-8.jpg" alt="" />
																	</a>
																	<div class="action-zoom">
																		<div class="add-to-cart">
																			<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
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
																			<div class="quickviewbtn">
																				<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="price-box">
																		<span class="new-price">$178.00</span>
																	</div>
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="#">Donec non est</a></h2>
																	<p>Nunc facilisis sagittis ullamcorper...</p>
																</div>
															</div>
															<!-- single-product end -->
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>				
								</div>
							</div>
							<!-- our-product area end -->
						</div>
						<!-- product section end -->
						<!-- banner-area start -->

						<!-- banner-area end -->
					</div>
				</div>
			</div>
		</div>
		<!-- main area start -->
		<!-- Brand Logo Area Start -->
		<div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="banner-extension">
						<div class="brand-carousel">
							<div class="brand-item"><a href="#"><img src="public/user/img/brand/bg1-brand.jpg" alt="" /></a></div>
							<div class="brand-item"><a href="#"><img src="public/user/img/brand/bg2-brand.jpg" alt="" /></a></div>
							<div class="brand-item"><a href="#"><img src="public/user/img/brand/bg3-brand.jpg" alt="" /></a></div>
							<div class="brand-item"><a href="#"><img src="public/user/img/brand/bg4-brand.jpg" alt="" /></a></div>
							<div class="brand-item"><a href="#"><img src="public/user/img/brand/bg5-brand.jpg" alt="" /></a></div>
							<div class="brand-item"><a href="#"><img src="public/user/img/brand/bg2-brand.jpg" alt="" /></a></div>
							<div class="brand-item"><a href="#"><img src="public/user/img/brand/bg3-brand.jpg" alt="" /></a></div>
							<div class="brand-item"><a href="#"><img src="public/user/img/brand/bg4-brand.jpg" alt="" /></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="latest-post-area">
			<div class="container">
				<div class="area-title">
					<h2>Bài viết mới nhất</h2>
				</div>
				<div class="row">
					<div class="all-singlepost">
						<!-- single latestpost start -->
						@if($article)
							@foreach($article as $items)
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-post">
										<div class="post-thumb">
											<a href="{{ route('details', [$items->a_slug, $items->id])}}">
												<img src="public/user/img/post/post-1.jpg" alt="">
											</a>
										</div>
										<div class="post-thumb-info">
											<div class="post-time">
												<a href="#">{{ $items->a_name }}</a>
												
											</div>
											<div class="postexcerpt">
												<?php echo $items->a_description; ?>
												
												<a href="#" class="read-more">Read more</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						@endif


					</div>
				</div>
			</div>
		</div>		
@endsection


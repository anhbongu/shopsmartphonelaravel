			<div class="container">
				<div class="row">
					<!-- logo start -->
					<div class="col-md-3 text-center">
						<div class="top-logo">
							<a href="{{ route('home') }}"><img src="{{ asset('public/user/img/logo.gif') }}" alt="" /></a>
						</div>
					</div>
					<!-- logo end -->
					<!-- mainmenu area start -->
					<div class="col-md-6 text-center">
						<div class="mainmenu">
	
							<nav>
								<ul>
									@if($category)
										@foreach($category as $menu)
											<li class="expand"><a href="{{ route('get.list.Product', [$menu->c_slug, $menu->id]) }}">{{ $menu->c_name }}</a>
										<!--<ul class="restrain sub-menu">
													<li><a href="index-2.html">Home 2</a></li>
												</ul> -->									
											</li>
										@endforeach
									@endif

									
									<li class="expand"><a href="about-us.html">About</a></li>
									<li class="expand"><a href="contact-us.html">Contact</a></li>
								</ul>
							</nav>
						</div>
						<!-- mobile menu start -->
						<div class="row">
							<div class="col-sm-12 mobile-menu-area">
								<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
									<span class="mobile-menu-title">Menu</span>
									<nav>
										<ul>
											<li><a href="index.html">Home</a>
												<ul>
													<li><a href="index-2.html">Home 2</a></li>
													<li><a href="index-3.html">Home 3</a></li>
													<li><a href="index-4.html">Home 4</a></li>
													<li><a href="index-5.html">Home 5</a></li>
													<li><a href="index-6.html">Home 6</a></li>
													<li><a href="index-7.html">Home 7</a></li>
													<li><a href="index-8.html">Home 8</a></li>
												</ul>
											</li>
											<li><a href="shop-grid.html">Man</a>
												<ul>
													<li><a href="shop-grid.html">Dresses</a>
														<ul>
															<li><a href="shop-grid.html">Coctail</a></li>
															<li><a href="shop-grid.html">Day</a></li>
															<li><a href="shop-grid.html">Evening </a></li>
															<li><a href="shop-grid.html">Sports</a></li>
														</ul>
													</li>
													<li><a class="mega-menu-title" href="shop-grid.html"> Handbags </a>
														<ul>
															<li><a href="shop-grid.html">Blazers</a></li>
															<li><a href="shop-grid.html">Table</a></li>
															<li><a href="shop-grid.html">Coats</a></li>
															<li><a href="shop-grid.html">Kids</a></li>
														</ul>
													</li>
													<li><a class="mega-menu-title" href="shop-grid.html"> Clothing </a>
														<ul>
															<li><a href="shop-grid.html">T-Shirt</a></li>
															<li><a href="shop-grid.html">Coats</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
															<li><a href="shop-grid.html">Jeans</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="shop-list.html">Women</a>
												<ul>
													<li><a href="shop-grid.html">Rings</a>
														<ul>
															<li><a href="shop-grid.html">Coats & Jackets</a></li>
															<li><a href="shop-grid.html">Blazers</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
															<li><a href="shop-grid.html">Rincoats</a></li>
														</ul>
													</li>
													<li><a href="shop-grid.html">Dresses</a>
														<ul>
															<li><a href="shop-grid.html">Ankle Boots</a></li>
															<li><a href="shop-grid.html">Footwear</a></li>
															<li><a href="shop-grid.html">Clog Sandals</a></li>
															<li><a href="shop-grid.html">Combat Boots</a></li>
														</ul>
													</li>
													<li><a href="shop-grid.html">Accessories</a>
														<ul>
															<li><a href="shop-grid.html">Bootees bags</a></li>
															<li><a href="shop-grid.html">Blazers</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
														</ul>
													</li>
													<li><a href="shop-grid.html">Top</a>
														<ul>
															<li><a href="shop-grid.html">Briefs</a></li>
															<li><a href="shop-grid.html">Camis</a></li>
															<li><a href="shop-grid.html">Nigntwears</a></li>
															<li><a href="shop-grid.html">Shapewears</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="shop-grid.html">Shop</a>
												<ul>
													<li><a href="shop-list.html">Shop Pages</a>
														<ul>
															<li><a href="shop-list.html">List View </a></li>
															<li><a href="shop-grid.html">Grid View</a></li>
															<li><a href="login.html">My Account</a></li>
															<li><a href="wishlist.html">Wishlist</a></li>
															<li><a href="cart.html">Cart </a></li>
															<li><a href="checkout.html">Checkout </a></li>
														</ul>
													</li>
													<li><a href="product-details.html">Product Types</a>
														<ul>
															<li><a href="product-details.html">Simple Product</a></li>
															<li><a href="product-details.html">Variables Product</a></li>
															<li><a href="product-details.html">Grouped Product</a></li>
															<li><a href="product-details.html">Downloadable</a></li>
															<li><a href="product-details.html">Virtual Product</a></li>
															<li><a href="product-details.html">External Product</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="#">Pages</a>
												<ul>
													<li><a href="shop-grid.html">Shop Grid</a></li>
													<li><a href="shop-list.html">Shop List</a></li>
													<li><a href="product-details.html">Product Details</a></li>
													<li><a href="contact-us.html">Contact Us</a></li>
													<li><a href="about-us.html">About Us</a></li>
													<li><a href="cart.html">Shopping cart</a></li>
													<li><a href="checkout.html">Checkout</a></li>
													<li><a href="wishlist.html">Wishlist</a></li>
													<li><a href="login.html">Login</a></li>
													<li><a href="404.html">404 Error</a></li>
												</ul>													
											</li>
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="contact-us.html">Contact Us</a></li>
										</ul>
									</nav>
								</div>						
							</div>
						</div>
						<!-- mobile menu end -->
					</div>
					<!-- mainmenu area end -->
					<!-- top details area start -->
					<div class="col-md-3 text-center">
						<div class="top-detail">
							<!-- addcart top start -->
							<div class="disflow crt-edt">
								<div class="circle-shopping expand">
									<div class="shopping-carts text-right">
										@if (Auth::check())	
										<?php 
											$totalQuantity = 0;
											if(session()->has('totalQuantity')){
												$totalQuantity = session('totalQuantity');
											}
										 ?>
											
												<div class="cart-toggler">
													<a href="{{ route('shopping.cart') }}"><i class="icon-bag"></i></a>
														<a href=""><span class="cart-quantity">
															{{ $totalQuantity  }}

														</span></a>
															

													
												</div>
											@if(session('totalQuantity') > 0)
												<div class="restrain small-cart-content">
													<ul class="cart-list">
														<?php $total = 0 ?>
														@foreach($cart as $items)
															<?php $total +=  ($items->pro_price * $items->quantity)?>
															<li>
																<a class="sm-cart-product" href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}">
																	<img src="{{ asset('public/user/img/products/sm-products/cart1.jpg') }}" alt="">
																</a>
																<div class="small-cart-detail">
																	<a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
																	<a href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}" class="edit-btn"><img src="{{ asset('public/user/img/btn_edit.gif') }}" alt="Edit Button" /></a>
																	<a class="small-cart-name" href="">{{ $items->pro_name }}</a>
																	<span class="quantitys"><strong>{{ $items->quantity }}</strong>x<span>{{ number_format($items->pro_price) }} vnđ</span></span>
																</div>
															</li>
														@endforeach
														
													</ul>
													<p class="total">Subtotal: <span class="amount">{{ number_format($total) }}</span></p>
													<p class="buttons">
														<a href="{{ route('shopping.cart') }}" class="button">Checkout</a>
													</p>
												</div>
											@endif
										@endif
									</div>
								</div>
							</div>
							<!-- addcart top start -->
							<!-- search divition start -->
							<div class="disflow dflt-src">
								<div class="header-search expand">
									<div class="search-icon fa fa-search"></div>
									<div class="product-search restrain">
										<div class="container nopadding-right">
											<form action="index.html" id="searchform" method="get">
												<div class="input-group">
													<input type="text" class="form-control" maxlength="128" placeholder="Search product...">
													<span class="input-group-btn">
														<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
													</span>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- search divition end -->
							<div class="disflow">
								<div class="expand dropps-menu">
									<a href="#"><i class="fa fa-align-right"></i></a>
									<ul class="restrain language">
										@if(Auth::check())
											<li><a href="login.html">{{ Auth::user()->email }}</a></li>
											<li><a href="wishlist.html">My Wishlist</a></li>
											<li><a href="{{ route('shopping.cart') }}">My Cart</a></li>
											<li><a href="{{ route('shopping.history') }}">Lịch sử mua hàng</a></li>
											<li><a href="{{ route('logout') }}">Đăng xuất</a></li>

										@else
											<li><a href="{{ route('register') }}">Đăng ký</a></li>
											<li><a href="{{ route('login') }}">Đăng nhập</a></li>
										@endif

									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- top details area end -->
				</div>
			</div>
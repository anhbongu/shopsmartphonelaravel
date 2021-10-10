@extends('main')
@section('content')
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container-inner">
					<ul>
						<li class="home">
							<a href="index.html">Trang chủ</a>
							<span><i class="fa fa-angle-right"></i></span>
						</li>
						<li class="category3"><span>Tin công nghệ</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shop-with-sidebar">
	<div class="container">
		<div class="row">

			<!-- right sidebar start -->
			<div class="col-md-9 col-sm-12 col-xs-12">

				<!-- shop toolbar end -->
				<!-- product-row start -->
				<div class="tab-content">
					
					<!-- list view -->
					<div class="tab-pane fade in active" id="shop-list-tab">
						<div class="list-view">
							<!-- single-product start -->
							@if($article)
								@foreach($article as $items)
									<div class="product-list-wrapper">
										<div class="single-product">								
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="product-img">
													<a href="#">
														<img class="primary-image" src="../public/user/img/products/product-7.jpg" alt="">
														
													</a>
												</div>								
											</div>
											<div class="col-md-8 col-sm-8 col-xs-12">
												<div class="product-content">
													<h2 class="product-name"><a href="#">{{ $items->a_name }}</a></h2>

													<div class="product-desc">
														<p>{{ $items->a_description }}</p>
													</div>
												
												</div>									
											</div>
										</div>
									</div>
								@endforeach
							@endif

		
							<!-- single-product end -->
						</div>
					</div>
					<!-- shop toolbar start -->
					<div class="shop-content-bottom">
						<div class="shop-toolbar btn-tlbr">

							<div class="col-md-4 col-sm-4 col-xs-12 text-center">
								<div class="pages">
									<label>Page:</label>
									<ul>
										<li class="current">1</li>
										<li><a href="#">2</a></li>
										<li><a href="#" class="next i-next" title="Next"><i class="fa fa-arrow-right"></i></a></li>
									</ul>
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
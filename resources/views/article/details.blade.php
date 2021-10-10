@extends('main')
@section('content')
<div class="shop-with-sidebar">
	<div class="container">
		<div class="row">

			<!-- left sidebar end -->
			<!-- right sidebar start -->
			<div class="col-md-12 col-sm-12 col-xs-12">

				<!-- product-row start -->
				<div class="tab-content">

					<div class="tab-pane fade in active" id="shop-list-tab">
						<div class="list-view">
							<!-- single-product start -->
							<div class="product-list-wrapper">
								<div class="single-product">								

									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="product-content">
											<h1 class="product-name">{{ $article->a_name }}</h1>
											
											<div class="article-relate">
												<p>Xem thêm: <a href="#">Nghe Đồn Là: iPhone 13 sẽ nhận được nhiều cải tiến vô cùng đáng giá</a></p>
											</div>								
											
											<div class="product-desc">
												
												<?php echo $article->a_description; ?>
												<?php echo $article->a_content; ?>
												
											</div>
										
										</div>									
									</div>
								</div>
							</div>
				
						</div>
					</div>
					<!-- shop toolbar start -->

					<!-- shop toolbar end -->
				</div>
			</div>
			<!-- right sidebar end -->
		</div>
	</div>
</div>
@endsection
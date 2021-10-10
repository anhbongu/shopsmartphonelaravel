@extends('main')
@section('content')

<div class="product-details-area">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12">
				<div class="zoomWrapper">
					<div id="img-1" class="zoomWrapper single-zoom">
						<a href="#">
							<div style="height:450px;width:450px;" class="zoomWrapper"><img id="zoom1" src="{{ asset('public/uploads/product') }}/{{ $product->pro_avatar }}"></div>
						</a>
					</div>

				</div>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="product-list-wrapper">
					<div class="single-product">
						<div class="product-content">
							<h2 class="product-name"><a href="#">{{ $product->pro_name }}</a></h2>
							<div class="rating-price">	
								<div class="pro-rating">
									<?php 
										$totalNumber = 0;
										if($product->pro_total_number !=0){
											$totalNumber = ($product->pro_total_rating / $product->pro_total_number);
										}
										
									 ?>
									@for($i=1; $i<=$totalNumber; $i++)
										<i class="fa fa-star" style="color: #fb6e2e;"></i>
									@endfor
									({{ $totalNumber==0 ? "Chưa có đánh giá nào" : round($totalNumber, 1)." sao" }})
								</div>
								<div class="price-boxes">
									<span class="new-price">{{ number_format($product->pro_price) }} vnđ</span>
								</div>
							</div>
							<div class="product-desc">
								<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
							</div>
							<p class="availability in-stock">Availability: <span>In stock</span></p>
							<div class="actions-e">
								<div class="action-buttons-single">
									<div class="inputx-content">
										<label for="qty">Quantity:</label>
										<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
									</div>
									<div class="add-to-cart">
										<a href="#">Add to cart</a>
									</div>
									<div class="add-to-links">
										<div class="add-to-wishlist">
											<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
										</div>
										<div class="compare-button">
											<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
										</div>									
									</div>
								</div>
							</div>
							<div class="singl-share">
	                            <a href="#"><img src="../public/user/img/single-share.png" alt=""></a>
	                        </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="single-product-tab">
				  <!-- Nav tabs -->
				<ul class="details-tab">
					<li class="active"><a href="#home" data-toggle="tab">Chi tiết</a></li>
			
				</ul>
				  <!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">
						<div class="product-tab-content">

							{!! $product->pro_content !!}
						</div>
					</div>

				</div>					
			</div>
		</div>
	</div>
</div>
<div class="our-product-area new-product">
	<div class="container">
		<div class="area-title">
			<h2>Đánh giá</h2>
		</div>
		<!-- our-product area start -->
		<div class="row">
			<div class="rating-content">
				<div class="col-sm-3">
					<div class="rating-item">
						<div class="">
							<span class="fa fa-star icon" style=" font-size: 80px;"></span>
							<span class="rating-number">{{  round($totalNumber, 1) }}</span>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="list-rating" style="">
						
							@for($i=1;$i<=5;$i++)
								<div class="item-rating">
									<div class="" style="width: 10%">{{ $i }}<span class="fa fa-star"></span></div>
									<div class="" style="width: 60%; margin: 6px 10px;">
										<span style="width: 100%; height: 6px; display: block; border:1px solid black">
											<b class="rating-lenght"></b>
										</span>
									</div>
									<div class="" style="width: 20%"><a href="">290 đánh giá</a></div>
								</div>
							@endfor
						
					</div>
				</div>
				<div class="col-sm-2">
					<a onclick="javascript:return false" class="danhgia" href="">Gửi đánh giá của bạn</a>
				</div>				
			</div>

		</div>
		<div class="form-rating hide" >
			
			<div class="rating-me">
				<p>Chọn đánh giá của bạn</p>
				<span class="list-star">
					@for($i=1;$i<=5;$i++)
						<i class="fa fa-star" data-key={{ $i }}></i>
					@endfor
					
				</span>
				<span class="list-text"></span>
				<input type="hidden" value="" class="rating_number">
			</div>	
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Đánh giá</label>
		    <textarea class="form-control" id="ra_content" rows="3"></textarea>
		    <a href="{{ route('rating.product', ['id'=>$product->id]) }}" onclick="javascript:return false" class="btn btn-success btn-send js_rating_product">Gửi đánh giá</a>
		  </div>				
		</div>

		<div class="total-comment">({{ $product->pro_total_number }}) bình luận</div>
		
		<div class="comment">
			<div id="comment"></div>
			@foreach($rating as $items)
				<div class="comment-items">
					<div class="name"><span class="firt-name">T</span>{{ $items->ra_user }}</div>
					@for($i=1; $i<=$items->ra_number;$i++)
						<i class="fa fa-star" style="color: #fb6e2e"></i>
					@endfor
					<div class="content-comment">{{ $items->ra_content }}</div>				
				</div>
			@endforeach

			
		</div>

		<!-- our-product area end -->	
	</div>
</div>

@endsection

@section('script')
<script>
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	jQuery(document).ready(function($) {
		listRating = {
					1 : 'Không thích',
					2 : 'Tạm được',
					3 : 'Cũng ổn',
					4 : 'Tốt',
					5 : 'Tuyệt vời',
			};
		let listStar = $(".list-star .fa");

		listStar.mouseover(function() {
			let $this = $(this);
			let number = $this.attr('data-key');
			$(".rating_number").val(number);
			$.each(listRating, function(key, val) {
				 if(key <= number){
				 	$(this).addClass('rating-active');
				 }
			});
			$(".list-text").text('').text(listRating[number]);
		}); 

		$(".danhgia").click(function(){
			if($('.form-rating').hasClass('hide')){
				$(".form-rating").addClass('active').removeClass('hide');
			}else{
				$(".form-rating").addClass('hide').removeClass('active');
			}
		});
		$(".js_rating_product").click(function(){
			let content = $("#ra_content").val();
			let number = $(".rating_number").val();
			let url = $(".js_rating_product").attr("href");
			console.log(url);
		    $.ajax({
		    	url: url,
		    	type : "POST",
		    	data:{
		    		number  : number,
		    		content : content
		    	},
		    	success: function(result){
		      	if(result){
		      		$("#comment").html('').append(result);
		      		$("#ra_content").val("");
		      	}
		    }});
		});

	});
</script>
@endsection
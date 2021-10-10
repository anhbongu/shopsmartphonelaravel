@if(isset($order))
	<?php 
		$arrProduct_id 	= json_decode($order->product_ids);
		$arrNames 		= json_decode($order->names);
		$arrPrices		= json_decode($order->prices);
		$arrQuantitis	= json_decode($order->quantities);
		$arrPictures	= json_decode($order->pictures);
		$content = "";

		$totalPrice = 0;
		foreach ($arrProduct_id as $keyb => $valueb) {
			$prices = $arrPrices[$keyb] * $arrQuantitis[$keyb];
			$totalPrice += $prices;
			$content .= '<tr>
						<td class="cart_product">
							<a href="">'.$arrPictures[$keyb].'</a>
						</td>
						<td class="cart_description">
							<a href="">'.$arrNames[$keyb].'</a>
							
						</td>
						<td class="cart_price">
							<p>'.$arrPrices[$keyb].'</p>
						</td>
						<td class="cart_quantity">'.$arrQuantitis[$keyb].'
						</td>
						<td class="cart_total">
							<p class="cart_total_price">'.number_format($prices).'vnđ</p>
						</td>
						
					</tr>';				
		}




	 ?>
	<p>Mã đơn hàng: {{ $order->id }} - Ngày mua: {{ $order->created_at }} </p>
		<table class="table table-condensed">
	<thead>
		<tr class="cart_menu">
			<td class="">Ảnh</td>
			<td class="">Name</td>
			<td class="">Price</td>
			<td class="">Quantity</td>
			<td class="">Total</td>
			
		</tr>
	</thead><?php echo $content ?>
	<tr>
		<td colspan="5" style="text-align: right;">Tổng tiền <?php echo number_format($totalPrice)  ?> vnđ</td>
	</tr>
	
@endif
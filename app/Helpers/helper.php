<?php 
	class Helper{
		public static function cmsHistory($result){
			foreach ($result as $value) {
				$xhtml = '';

				$arrProduct_id 	= json_decode($value->product_ids);
				$arrNames 		= json_decode($value->names);
				$arrPrices		= json_decode($value->prices);
				$arrQuantitis	= json_decode($value->quantities);
				$arrPictures	= json_decode($value->pictures);
				$status = ($value->status==0) ? 'Đã nhận hàng thành công' : 'Đơn hàng đang được xử lý!';


				$content = "";
				$i = 1;
				$totalPrice = 0;
				foreach ($arrProduct_id as $keyb => $valueb) {
					$prices = $arrPrices[$keyb] * $arrQuantitis[$keyb];
					$totalPrice += $prices;
					$content .= '<tr>
								<td class="cart_product">
									<a href="">'.$arrPictures[$keyb].'</a>
								</td>
								<td class="cart_description">
									<h4><a href="">'.$arrNames[$keyb].'</a></h4>
									
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




				echo $xhtml.= ' <p>Mã đơn hàng: '.$value->id.' - Ngày mua: '.$value->created_at.' </p>
								<table class="table table-condensed">
							<thead>
								<tr class="cart_menu">
									<td class="image">Ảnh</td>
									<td class="description">Name</td>
									<td class="price">Price</td>
									<td class="quantity">Quantity</td>
									<td class="total">Total</td>
									
								</tr>
							</thead>
							<tbody>'.$content.'
							<tr>
								<td colspan="5"><p style="float: right; color: red; font-size: 20px;">Tổng tiền: '.number_format($totalPrice).'vnđ </p></td>
								
							</tr>
							<tr>
								<td colspan="5"><p style="float: right; color: red; font-size: 20px;">'.$status.'</p></td>
								
							</tr>

								
							</tbody>
						</table>';	

			}



			

		}

		public static function totalPrice($arrProduct_id, $arrPrices,$arrQuantitis ){
	            $arrProduct_id  = json_decode($arrProduct_id);
	            $arrPrices      = json_decode($arrPrices);
	            $arrQuantitis   = json_decode($arrQuantitis);
	            $totalPrice = 0;


	            foreach ($arrProduct_id as $keyb => $valueb) {
	                $prices = $arrPrices[$keyb] * $arrQuantitis[$keyb];
	                $totalPrice += $prices;               
	            }
	            echo number_format($totalPrice);
		
		}





	}

 ?>
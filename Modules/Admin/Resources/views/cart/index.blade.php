@extends('admin::layouts.main')

@section('content')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12  ">

		<div class="x_panel">
    
		  <div class="x_title">
		    <h2>Danh sách đơn hàng</h2>

		    <div class="clearfix"></div>
		  </div>

		  <div class="x_content">

		    

		    <div class="table-responsive">
		      <table class="table table-striped jambo_table bulk_action">
		        <thead>
		          <tr class="headings">
		            <th>Mã đơn hàng</th>
		            <th class="column-title">Người mua </th>
		            <th class="column-title">Tên sản phẩm</th>
		            <th class="column-title">tổng tiền</th>
		            <th class="column-title">Trạng thái</th>
		           	<th>Xử lý</th>
		           
		          </tr>
		        </thead>

		        <tbody>

		        	@if(isset($cart))
		        		@foreach($cart as $items)
				          <tr class="even pointer">
				            <td class="a-center ">{{ $items->id }}</td>
				            <td class=" ">{{  $items->username }}</td>

				            <td class=" "> 
				            	<ul>
				            		
				            
						          	<?php 
						          		$product_name = json_decode($items->names);
						          		$xhtml = "";
						          		foreach ($product_name as $value) {
						          			$xhtml .= '<li>'.$value.'</li>';
						          		}
						          		echo $xhtml;
						          	 ?>
						          	 
					          	</ul>

				            </td>
				              <td class=" ">{{ Helper::totalPrice($items->product_ids, $items->prices, $items->quantities) }} vnđ</td>
				            <td class=" ">
				            	<?php 
				            		$id = json_decode($items->product_ids);
				            		$quantity = json_decode($items->quantities);
				            		$str = "";
				            		foreach ($id as $key => $value) {
				            				$str .= $value."-".$quantity[$key]."and";
				            		}
				         
				            		$str = substr($str,0, -3);
				            	 ?>
				            	<a href="{{ route('admin.cart.action', ['action'=>'changstatus', 'id'=>$items->id, 'status'=>$items->status, 'value'=>$str]) }}" type="button" class="btn btn-round btn-success">
				            	{{ ($items->status == 1) ? 'Chưa xử lý' : 'Đang vận chuyển' }}
				            	</a>
				            </td>
				            <td class="last">
				            	<!-- {{ route('admin.view', [$items->id]) }} -->
	                                    <div class="zvn-box-btn-filter">
		                                    	<a onclick="javascript:return false" href="{{ route('admin.view', [$items->id]) }}" type="button" class="btn btn-icon btn-success js_order" data-toggle="tooltip" data-placement="top" >
		                                   chi tiết
		                                    </a>
		                                    <a href="{{ route('admin.cart.action', ['action'=>'delete', 'id'=>$items->id, 'status'=>$items->status, 'value'=>$str]) }}" type="button" class="btn btn-icon btn-danger btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
		                                        <i class="fa fa-trash"></i>
		                                    </a>
	                                    </div>
				            </td>

				      
				          </tr>
		        		@endforeach

		        	@endif

		         
		        </tbody>
		      </table>
		    </div>
					
				
		  </div>
		</div>
	</div>		
</div>
<!-- Modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="md-content">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

	jQuery(document).ready(function() {

		$(".js_order").click(function(){
			let $this = $(this);
			let url = $this.attr("href");
			$('#myModal').modal('show');
		    $.ajax({
		    	url: url,
		    	success: function(result){
		      	if(result){
		      		$("#md-content").html('').append(result);
		      	}
		    }});
			
		});
	});
</script>
@endsection


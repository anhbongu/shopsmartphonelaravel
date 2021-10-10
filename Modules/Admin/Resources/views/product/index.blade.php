@extends('admin::layouts.main')

@section('content')
<style>
	.icon-active{
		color: yellow;
	}
	
</style>
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12  ">

		<div class="x_panel">
			<div class="zvn-add-new pull-right">
	            <a href="{{ route('admin.product.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm mới</a>
	        </div>
	        
		  <div class="x_title">
		    <h2>Danh mục</h2>

		    <div class="clearfix"></div>
		  </div>

		  <div class="x_content">
		  	<form action="" method="post">
				<div class="row">

				    <div class="col-md-4">
				        <div class="input-group">
				            <input type="text" class="form-control" name="name">

				        </div>
				    </div>
				    <div class="col-md-2">

				         <select name="select_filter" class="form-control" data-field="level">
				            <option value="" selected="selected">Select Level</option>
				            @foreach($category as $item)
				            	<option value="{{ $item->id }}">{{ $item->c_name }}</option>

				            @endforeach
				            
				           
				        </select>

				    </div>
				    <button class="btn btn-danger" type='submit'>Tìm kiếm</button>

				</div>		
				@csrf  		
		  	</form>

		    

		    <div class="table-responsive">
		      <table class="table table-striped jambo_table bulk_action">
		        <thead>
		          <tr class="headings">
		            <th>id
		            </th>
		            <th class="column-title">Tên danh mục </th>
		            <th class="column-title">Gía</th>
		            <th class="column-title">sale</th>
		            <th class="column-title">Hình ảnh</th>
		            <th class="column-title">Trạng thái </th>
		            <th class="column-title">Nổi bậc </th>
		            <th class="column-title">Danh mục</th>
		            <th class="column-title">thao tác</th>
		           
		          </tr>
		        </thead>

		        <tbody>

		        	@if(isset($product))
		        		@foreach($product as $items)
				          <tr class="even pointer">
				            <td class="a-center ">1</td>
				            <td class=" ">{{  $items->pro_name }}
				            	<ul>
				            		<li>Đánh giá:
				            			<?php 
				            				$totalRating = 0;
				            				if($items->pro_total_number && $items->pro_total_rating){
				            					$totalRating = ($items->pro_total_rating / $items->pro_total_number);
				            				}
				            				
				            			 ?>
				            			@for ($i = 1; $i<=5; $i++)
				            				<i class="fa fa-star {{ $i<=$totalRating ? 'icon-active' : '' }}"></i>
				            			@endfor
				            			({{ $items->pro_total_number }}) đánh giá
				            		</li>
				            		<li>Số lượng:{{ $items->pro_number }}</li>
				            	</ul>


				            </td>
				            <td class=" "> {{ $items->pro_price }}</td>
				            <td class=" "> {{ $items->pro_sale }}%</td>
				            <td class=" "> 
				            	<img src="{{ asset('public/uploads/product') }}/{{ $items->pro_avatar }}" alt="" style="width: 80px;height: 80px;">
				            </td>
				            <td>
				            	<a href="{{ route('admin.product.action', ['action'=>'changstatus','id'=>$items->id, 'status'=>$items->pro_active, 'null'=>2]) }}" type="button" class="btn btn-round btn-success">
				            	{{ ($items->pro_active == 1) ? 'Active' : 'Unactive' }}
				            	</a>
				            </td>
				            <td>
				            	<a href="{{ route('admin.product.action', ['action'=>'changhot','id'=>$items->id, 'status'=>$items->pro_hot]) }}" type="button" class="btn btn-round btn-success">
				            	{{ ($items->pro_hot == 1) ? 'yes' : 'no' }}
				            	</a>				            	
				            </td>
				            <td class=" "> {{  $items->category_name }}</td>
				            <td class="last">
	                                    <div class="zvn-box-btn-filter"><a href="{{ route('admin.product.update', ['id'=>$items->id]) }}" type="button" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
	                                        <i class="fa fa-pencil"></i>
	                                    </a><a href="{{ route('admin.product.action', ['action'=>'delete', 'id'=>$items->id]) }}" type="button" class="btn btn-icon btn-danger btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
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


@endsection
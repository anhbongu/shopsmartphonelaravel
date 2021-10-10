@extends('admin::layouts.main')

@section('content')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12  ">

		<div class="x_panel">
			<div class="zvn-add-new pull-right">
	            <a href="{{ route('admin.category.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm mới</a>
	        </div>
 
		  <div class="x_title">
		    <h2>Danh mục</h2>

		    <div class="clearfix"></div>
		  </div>

		  <div class="x_content">

		    
		  	@include('alert')
		    <div class="table-responsive">
		      <table class="table table-striped jambo_table bulk_action">
		        <thead>
		          <tr class="headings">
		            <th>id
		            </th>
		            <th class="column-title">Tên danh mục </th>
		            <th class="column-title">Title seo</th>
		            <th class="column-title">Trạng thái </th>
		            <th class="column-title">thao tác</th>
		           
		          </tr>
		        </thead>

		        <tbody>

		        	@if(isset($category))
		        		@foreach($category as $items)
				          <tr class="even pointer">
				            <td class="a-center ">1</td>
				            <td class=" ">{{  $items->c_name }}</td>
				            <td class=" "> {{ $items->c_title_seo }}</td>
				            <td class=" "> {{  $items->c_active }}</td>
				            <td class="last">
	                                    <div class="zvn-box-btn-filter"><a href="{{ route('admin.category.update', ['id'=>$items->id]) }}" type="button" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
	                                        <i class="fa fa-pencil"></i>
	                                    </a><a href="{{ route('admin.category.action', ['action'=>'delete', 'id'=>$items->id]) }}" type="button" class="btn btn-icon btn-danger btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
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
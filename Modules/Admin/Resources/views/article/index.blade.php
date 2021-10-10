@extends('admin::layouts.main')

@section('content')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12  ">

		<div class="x_panel">
			<div class="zvn-add-new pull-right">
	            <a href="{{ route('admin.article.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm mới</a>
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
				            <input type="text" class="form-control" name="fillter">

				        </div>
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
		            <th class="column-title">Tên bài viết</th>
		            <th class="column-title">Người viết</th>

		            <th class="column-title">Trạng thái </th>
		            <th class="column-title">Created_at</th>
		            <th class="column-title">thao tác</th>
		           
		          </tr>
		        </thead>

		        <tbody>

		        	@if(isset($article))
		        		@foreach($article as $items)
				          <tr class="even pointer">
				            <td class="a-center ">1</td>
				            <td class=" ">{{  $items->a_name }}</td>
				            <td class=" "> {{ $items->a_author_id }}</td>
				          
				            <td>
				            	<a href="{{ route('admin.article.action', ['action'=>'changestatus', 'id'=>$items->id, 'status'=>$items->a_active]) }}" type="button" class="btn btn-round btn-success">
				            	{{ ($items->a_active == 1) ? 'Active' : 'Unactive' }}
				            	</a>
				            </td>
				            <td class=" "> {{  $items->created_at }}</td>
				            <td class="last">
	                                    <div class="zvn-box-btn-filter"><a href="{{ route('admin.article.update', ['id'=>$items->id]) }}" type="button" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
	                                        <i class="fa fa-pencil"></i>
	                                    </a><a href="{{ route('admin.article.action', ['action'=>'delete', 'id'=>$items->id]) }}" type="button" class="btn btn-icon btn-danger btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
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
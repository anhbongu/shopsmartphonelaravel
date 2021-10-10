@extends('admin::layouts.main')

@section('content')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12  ">

		<div class="x_panel">
			<div class="zvn-add-new pull-right">
	            <a href="{{ route('admin.user.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm mới</a>
	        </div>








	        
		  <div class="x_title">
		    <h2>Danh mục</h2>

		    <div class="clearfix"></div>
		  </div>

		  <div class="x_content">

		    

		    <div class="table-responsive">
		      <table class="table table-striped jambo_table bulk_action">
		        <thead>
		          <tr class="headings">
		            <th>id</th>
		            <th class="column-title">Tên thành viên </th>
		            <th class="column-title">Email</th>
		            <th class="column-title">Phone</th>
		            <th class="column-title">Trạng thái </th>
		            <th class="column-title">thao tác</th>
		           
		          </tr>
		        </thead>
		        @if($user)
		        	@foreach($user as $items)
		        	<tr>
			        	<td>{{ $items->id }}</td>
			        	<td>{{ $items->name }}</td>
			        	<td>{{ $items->email }}</td>
			        	<td>{{ $items->phone }}</td>
			            <td>
			            	<a href="{{ route('admin.user.action',['action'=>'changstatus', 'id'=>$items->id, 'status'=>$items->active]) }}" type="button" class="btn btn-round btn-success">
			            	{{ ($items->active == 1) ? 'Active' : 'Unactive' }}
			            	</a>
			            </td>
			            <td class="last">
                                    <div class="zvn-box-btn-filter"><a href="{{ route('admin.user.update', ['id'=>$items->id]) }}" type="button" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </a><a href="{{ route('admin.user.action', ['action'=>'delete', 'id'=>$items->id]) }}" type="button" class="btn btn-icon btn-danger btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    </div>
			            </td>
			        </tr>
		        	@endforeach
		        @endif

		        <tbody>



		         
		        </tbody>
		      </table>
		    </div>
					
				
		  </div>
		</div>
	</div>		
</div>


@endsection
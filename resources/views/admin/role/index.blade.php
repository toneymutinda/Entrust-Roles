@extends('admin.layouts.template')

@section('title')
	View All Roles
@endsection

@section('content')
    <div>
    	@include('messages.messages')
    </div>
    
    <h3 class="pull-left">User Roles</h3>
    <h3 class="pull-right"><a href="{{ route('roles.create') }}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create New Role</a></h3>

    <table class="table table-striped table-bordered table-responsive">
		<thead>
			<tr>
	            <th>Name</th>
	            <th>Display Name</th>
	            <th>Description</th>
	            <th>Action</th>
	        </tr>
		</thead>

		<tbody>
			@forelse ($roles as $role)
			<tr>
	            <td>{{$role->name}}</td>
	            <td>{{$role->display_name}}</td>
	            <td>{{$role->description}}</td>
	            <td>
	                <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-success btn-xs" title="Edit">Edit</a> &nbsp;
	                <form action="{{route('roles.destroy',$role->id)}}"  method="POST" style="display: inline;" title="Delete">
                       {{csrf_field()}}
                       {{method_field('DELETE')}}
                       <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                    </form>
	            </td>
	        </tr>
	        @empty
	         <tr>
	            <td>No roles</td>
	        </tr>
	        @endforelse
		</tbody>
	</table>
@endsection

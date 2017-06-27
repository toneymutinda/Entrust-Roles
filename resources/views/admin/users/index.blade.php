@extends('admin.layouts.template')

@section('title')
    View All Users
@endsection

@section('content')
    <div>
    	@include('messages.messages')
    </div>
    
    <h3 class="pull-left">Users</h3>

    <table class="table table-striped table-bordered table-responsive">
		<thead>
			<tr>
	            <th>Name</th>
	            <th>Email</th>
	            <th>Role</th>
	            <th>Action</th>
	        </tr>
		</thead>

		<tbody>
			@forelse ($users as $user)
			<tr>
	            <td>{{$user->name}}</td>
	            <td>{{$user->display_name}}</td>
	            <td>
	            	@foreach ($user->roles as $r)
	            	   <span class="label label-success" title="{{$r->description}}">{{$r->display_name}}</span>
	            	@endforeach
	            </td>
	            <td>
	                <a href="{{ route('users.edit',$user->id) }}" class="btn btn-success btn-xs" title="Edit">Edit</a> &nbsp;
	                <form action=""  method="POST" style="display: inline;" title="Delete">
                       {{csrf_field()}}
                       {{method_field('DELETE')}}
                       <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                    </form>
                    <button type="button" class="btn btn-primary btn-xs" title="Change role" data-toggle="modal" data-target="#myModal-{{$user->id}}">
                        Change role
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Edit {{$user->name}}'s Role</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('users.update',$user->id)}}" method="post" role="form" id="role-form-{{$user->id}}">
                                        {{csrf_field()}}
                                        {{method_field('PATCH')}}
                                        <div class="form-group">

                                            <select name="roles[]" multiple>
                                                @foreach($allroles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>


                                        </div>

                                        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" onclick="$('#role-form-{{$user->id}}').submit()">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

	            </td>
	        </tr>
	        @empty
	         <tr>
	            <td>No users</td>
	        </tr>
	        @endforelse
		</tbody>
	</table>
@endsection
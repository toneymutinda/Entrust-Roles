@extends('admin.layouts.template')

@section('title')
	Create New Role
@endsection

@section('content')
    <h3>Create New Role</h3>

    <form action="{{ route('roles.store') }}" method="POST" role="form">
    	{{csrf_field()}}

      <div class="row">

      	<div class="col-xs-6 col-xs-offset-3">
	    	<div class="form-group">
	    		<label for="name">Name of role</label>
	    		<input type="text" class="form-control" name="name" id="" placeholder="Name of role">
	    	</div>
	        <div class="form-group">
	    		<label for="display_name">Display name</label>
	    		<input type="text" class="form-control" name="display_name" id="" placeholder="Display name">
	    	</div>
	        <div class="form-group">
	    		<label for="description">Description</label>
	    		<input type="text" class="form-control" name="description" id="" placeholder="Description">
	    	</div>

	    	<div class="form-group text-left">
	            <h5>Permissions</h5>
	            @foreach($permissions as $permission)
	    		<input type="checkbox"   name="permission[]" value="{{$permission->id}}" > {{$permission->name}} <br>
	            @endforeach
	    	</div>

	    	<button type="submit" class="btn btn-primary">Submit</button>
      	</div>

      </div>

    </form>
@endsection
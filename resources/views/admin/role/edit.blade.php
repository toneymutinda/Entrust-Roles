@extends('admin.layouts.template')

@section('title')
    Edit Role
@endsection

@section('content')
    <h3>Edit This Role</h3>

    <form action="{{route('roles.update',$role->id)}}" method="post" role="form">
		{{method_field('PATCH')}}
		{{csrf_field()}}

    	<div class="row">

            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-group">
                    <label for="name">Name of role</label>
                    <input type="text" class="form-control" name="name" id="" placeholder="Name of role" value="{{ $role->name }}">
                </div>
                <div class="form-group">
                    <label for="display_name">Display name</label>
                    <input type="text" class="form-control" name="display_name" id="" placeholder="Display name" value="{{ $role->display_name }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="" placeholder="Description" value="{{ $role->description }}">
                </div>

                <div class="form-group text-left">
                    <h3>Permissions</h3>
                    @foreach($permissions as $permission)
                    <input type="checkbox" {{in_array($permission->id,$role_permissions)?"checked":""}}   name="permission[]" value="{{$permission->id}}" > {{$permission->name}} <br>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>
    </form>

@endsection

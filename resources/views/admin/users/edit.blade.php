@tends('admin.layouts.template')
@section('content')
    <h3>Edit This User</h3>

    <form action="{{route('users.update',$role->id)}}" method="post" role="form">
		{{method_field('PATCH')}}
		{{csrf_field()}}

    	<div class="row">

            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="" placeholder="Name of user" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="" placeholder="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="" placeholder="password" value="">
                </div>
                @role('admin')
                <div class="form-group text-left">
                    <h3>Roles</h3>
                    @foreach($roles as $role)
                    <input type="checkbox" {{in_array($role->id,$role_users)?"checked":""}}   name="role[]" value="{{$role->id}}" > {{$role->name}} <br>
                    @endforeach
                </div>
                @endrole
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>
    </form>

@endsection

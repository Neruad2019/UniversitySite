
@extends('layouts.adminpanel_layout')
@section('content')

<div class="col-6 offset-3">

    <form action="{{route('profile-edit-1')}}" method="post">
      @csrf
        <input type="hidden" name="user_id" value="{{$User->id}}">
        <input type="hidden" name="byadmin" value="1">
        <div class="form-group">
            <h3 class="text-center">User Data</h3>
            <label>Email address</label>
            <input type="email" class="form-control mb-sm-2" name="email" value="{{$User->email}}">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control mb-sm-2" name="name" value="{{$User->name}}">
        </div>
        <div class="form-group">
            <label>Surname</label>
            <input type="text" class="form-control mb-sm-2" name="surname" value="{{$User->surname}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-sm-4" style="background-color: #180b7a">Update User Data</button>
        </div>
    </form>

    <form action="{{route('userpasswordbyadmin')}}" method="post">
      @csrf
        <input type="hidden" name="user_id" value="{{$User->id}}">
        <div class="form-group">
            <h3 class="my-sm-5 text-center">Change Password</h3>
            <label>Current Password</label>
            <input type="text" class="form-control mb-sm-2" name="password" value="{{$User->password}}" readonly>
        </div>
        <div class="form-group">
            <label>New Password</label>
            <input type="password" class="form-control mb-sm-2" name="new_password">
            <h6 class="card-subtitle mb-2 text-muted"><small>Input new password</small></h6>
        </div>
        <div class="form-group">
            <input type="hidden" name="variant" value="3">
            <button type="submit" class="btn btn-primary mt-sm-4" style="background-color: #180b7a">Change Password</button>
        </div>
    </form>

    <h3 class="my-sm-5 text-center">Role</h3>



    <div class="btn-group" role="group" aria-label="Basic example">
        @foreach ($Roles as $role)
          @if($role->id==$User->role_id)
              <form action="{{route('userrolebyadmin')}}" method="post" id="editrole_{{$role->id}}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$User->id}}">
                    <input type="hidden" name="role_id" value="{{$role->id}}">
                </form>
                <button type="submit" form="editrole_{{$role->id}}" class="btn btn-secondary active">{{$role->role_name}}</button>
            @endif
            @if($role->id!=$User->role_id)
                <form action="{{route('userrolebyadmin')}}" method="post" id="editrole_{{$role->id}}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$User->id}}">
                    <input type="hidden" name="role_id" value="{{$role->id}}">
                </form>
                <button type="submit" form="editrole_{{$role->id}}" class="btn btn-secondary">{{$role->role_name}}</button>
            @endif
        @endforeach
    </div>
    <div class="form-group">
        <h6 class="card-subtitle mb-2 mt-sm-2 text-muted"><small>Warning: When changing the role, the user's data is erased</small></h6>
    </div>


    @if(1==$User->role_id)
        <form action="{{route('userGroupByadmin')}}" method="post">
            @csrf
            <div class="form-group mb-5">
                <h3 class="my-sm-5 text-center">Group</h3>

                <select class="form-control" name="group_id">
                  @if($User->group_id == null)

                        <option value="-1" selected>None</option>
                  @endif
                    @foreach ($Groups as $group)
                        @if($User->group_id == $group->id)
                            <option value="{{$group->id}}" selected>{{$group->group_name}}</option>
                        @endif
                        @if($User->group_id != $group->id)
                            <option value="{{$group->id}}">{{$group->group_name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="user_id" value="{{$User->id}}">
                <button type="submit" class="btn btn-primary mt-sm-4" style="background-color: #180b7a">Change Group</button>
            </div>
        </form>
    @endif
</div>
    @endsection

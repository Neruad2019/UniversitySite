@extends('layouts.profile_layout')
@section('content')

@include('layouts.message')
  <form action="{{route('profile-edit-1')}}" method="post">
    @csrf
      <div class="form-group">
          <input type="hidden" name="byadmin" value="0">
          <input type="hidden" name="user_id" value="{{$User->id}}">
          <h2 class="text-center">Sign in</h2>
          <label>Email address</label>
          <input type="email" class="form-control mb-sm-2" name="email" value="{{$User->email}}" required>
      </div>
      <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control mb-sm-2" name="name" value="{{$User->name}}" required>
      </div>
      <div class="form-group">
          <label>Surname</label>
          <input type="text" class="form-control mb-sm-2" name="surname" value="{{$User->surname}}" required>
      </div>
      <div class="form-group">
          <input type="hidden" name="variant" value="1">
          <button type="submit" class="btn btn-primary mt-sm-4" style="background-color: #180b7a">Update Profile</button>
      </div>
  </form>
  <hr class="my-2">
  <form action="{{route('profile-edit-4')}}" method="post">
    @csrf
      <div class="form-group">
          <input type="hidden" name="user_id" value="{{$User->id}}">
          <h2 class="my-sm-5 text-center">Edit Picture</h2>
          <label>URL</label>
          <input type="text" class="form-control mb-sm-2" name="picture_url" value="{{$User->picture_url}}">
          <h6 class="card-subtitle mb-2 text-muted"><small>Input url of your profile photo</small></h6>
      </div>
      <div class="form-group">
          <input type="hidden" name="variant" value="2">
          <button type="submit" class="btn btn-primary mt-sm-4" style="background-color: #180b7a">Update URL</button>
      </div>
  </form>
  <hr class="my-2">
  <form action="{{route('profile-edit-3')}}" method="post">
    @csrf
      <div class="form-group">
          <input type="hidden" name="user_id" value="{{$User->id}}">
          <h2 class="my-sm-5 text-center">Change Password</h2>
          <label>Current Password</label>
          <input type="password" class="form-control mb-sm-2" name="password">
          <h6 class="card-subtitle mb-2 text-muted"><small>Input current password</small></h6>
      </div>
      <div class="form-group">
          <label>New Password</label>
          <input type="password" class="form-control mb-sm-2" name="new_password">
          <h6 class="card-subtitle mb-2 text-muted"><small>Input new password</small></h6>
      </div>
      <div class="form-group">
          <label>Re-Input New Password</label>
          <input type="password" class="form-control mb-sm-2" name="re_new_password">
          <h6 class="card-subtitle mb-2 text-muted"><small>Re-input new password</small></h6>
      </div>
      <div class="form-group">
          <input type="hidden" name="variant" value="3">
          <button type="submit" class="btn btn-primary mt-sm-4" style="background-color: #180b7a">Change Password</button>
      </div>
  </form>

@endsection

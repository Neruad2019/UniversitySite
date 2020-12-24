
@extends('layouts.adminpanel_layout')
@section('content')

<div class="card">
    <div class="list-group-item list-group-item-action bg-dark text-white">
        USERS
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">SURNAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ROLE</th>
                    <th scope="col">DETAILS</th>
                </tr>
            </thead>
            @foreach ($Users as $Us)
                <tbody>
                <th scope="row">{{$Us->id}}</th>
                <td>{{$Us->name}}</td>
                <td>{{$Us->surname}}</td>
                <td>{{$Us->email}}</td>
                <td>{{$Us->role->role_name}}</td>
                <td>
                    <form action="{{route('userdetails')}}" id="edit_{{$Us->id}}" method="post">
                      @csrf
                      <input type="hidden" name="user_id" value="{{$Us->id}}">
                    </form>
                    <button type="button submit" form="edit_{{$Us->id}}" class="btn btn-primary btn-sm">EDIT</button>
                </td>
                </tbody>
            @endforeach
            </table>
        </div>
    </div>

@endsection

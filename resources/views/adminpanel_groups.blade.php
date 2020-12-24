@extends('layouts.adminpanel_layout')
@section('content')
<div class="card">
    <div class="list-group-item list-group-item-action bg-dark text-white">
        GROUPS
        <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal"
                data-target="#Modal1" data-whatever="Name of Groups...">
            ADD NEW
        </button>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">GROUP NAME</th>
                    <th scope="col">STUDENT AMOUNT</th>
                    <th scope="col">DETAILS</th>
                </tr>
            </thead>
            @foreach ($Groups as $group)
                <tbody>
                <td>{{$group->id}}</td>
                <td>{{$group->group_name}}</td>
                <td>{{$group->humans->count()}}</td>
                <td>
                    <form action="{{route('ToGroupDetails')}}" id="edit_{{$group->id}}" method="post">@csrf
                      <input type="hidden" name="group_id" value="{{$group->id}}">
                    </form>
                    <button type="button submit" form="edit_{{$group->id}}" class="btn btn-primary btn-sm">EDIT</button>
                </td>
                </tbody>
            @endforeach
        </table>
    </div>
</div>
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel1">Add New Group</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('AddGroup')}}" method="post">
                  @csrf
                    <div class="form-group">
                        <label class="col-form-label">Group Name:</label>
                        <input type="text" class="form-control" name="group_name" required>
                    </div>
                    <hr>
                    <div class="nav justify-content-end">
                        <button type="submit" class="btn btn-primary btn-sm">ADD</button>
                        <button type="button" class="btn btn-secondary ml-sm-1 btn-sm"
                                data-dismiss="modal">
                            CANCEL
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

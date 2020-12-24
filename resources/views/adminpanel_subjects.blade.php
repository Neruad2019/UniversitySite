@extends('layouts.adminpanel_layout')
@section('content')

<div class="card">
    <div class="list-group-item list-group-item-action bg-dark text-white">
        SUBJECTS
        <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal"
                data-target="#Modal1" data-whatever="Name of Subject...">
            ADD NEW
        </button>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">CREDIT AMOUNT</th>

                    <th scope="col">DETAILS</th>
                </tr>
            </thead>
            @foreach ($Subjects as $subject)

                <tbody>
                <th scope="row">{{$subject->id}}</th>
                <td>{{$subject->name}}</td>
                <td>{{$subject->credit_amount}}</td>

                <td>
                    <form action="{{route('ToSubjectDetails')}}" id="edit_{{$subject->id}}" method="post">
                        @csrf
                        <input type="hidden" name="subject_id" value="{{$subject->id}}">
                    </form>
                    <button type="button submit" form="edit_{{$subject->id}}" class="btn btn-primary btn-sm">EDIT</button>
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
                <h5 class="modal-title" id="ModalLabel1">Add New Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('AddSubject')}}" method="post">
                  @csrf
                    <div class="form-group">
                        <label class="col-form-label">NAME:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">CREDIT AMOUNT:</label>
                        <input class="form-control" name="credit_amount">
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

@extends('layouts.adminpanel_layout')
@section('content')

<div class="col-6 offset-3">


<form action="{{route('EditGroupName')}}" method="post" id="edit">
  @csrf
    <div class="form-group">
        <input type="hidden" name="group_id" value="{{$Group->id}}">
        <label class="col-form-label">NAME:</label>
        <input type="text" class="form-control" name="group_name" value="{{$Group->group_name}}">
    </div>

    <div class="form-group my-3">
        <label class="col-form-label">STUDENTS:</label>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">NAME</th>
                    <th scope="col">SURNAME</th>
                    <th scope="col">DETAILS</th>
                </tr>
            </thead>
            <form action="#" method="post">@csrf</form>
            @foreach ($Group->humans as $student)
                <tbody>
                <td>{{$student->name}}</td>
                <td>{{$student->surname}}</td>
                <td>
                    <form action="{{route('userdetails')}}" id="edit_{{$student->id}}" method="post">@csrf
                      <input type="hidden" name="user_id" value="{{$student->id}}">
                    </form>
                    <button type="button submit" form="edit_{{$student->id}}" class="btn btn-primary btn-sm">EDIT</button>
                </td>
                </tbody>
            @endforeach
        </table>
    </div>

    <hr>

    <div class="form-group">
        <label class="col-form-label">SUBJECTS:</label>
        <form accesskey="#" method="post"></form>
        @if($Student != null)
            @foreach ($Student->subjects as $subject)
                <form action="{{route('RejectSubject')}}" method="post" id="deletesubject_{{$subject->id}}">
                  @csrf
                    <input type="hidden" name="group_id" value="{{$Group->id}}">
                    <input type="hidden" name="subject_id" value="{{$subject->id}}">
                </form>
            @endforeach
            <table class="table table-striped">
                <tbody>
                    @foreach ($Student->subjects as $subject)
                        <tr>
                            <td>{{$subject->name}}</td>
                            <td width="10%">
                                <button type="submit" form="deletesubject_{{$subject->id}}" class="btn btn-danger btn-sm">-</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @else
            <br />
            <label class="col-form-label">NO STUDENTS IN THE GROUP!</label>
        @endif
    </div>
    <div class="form-group">
        <table class="table table-striped">
            <tbody>
                @foreach ($Subjects as $subject)
                    @if(($Student != null) && (!$Student->subjects->contains($subject)))
                        <tr>
                            <form action="{{route('AssignSubject')}}" method="post" id="subject_{{$subject->id}}">
                              @csrf
                                <input type="hidden" name="group_id" value="{{$Group->id}}">
                                <input type="hidden" name="subject_id" value="{{$subject->id}}">
                            </form>
                            <td>{{$subject->name}}</td>
                            <td width="10%">
                                <button form="subject_{{$subject->id}}" type="submit" class="btn btn-success btn-sm">+</button>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</form>
    <hr>
    <form action="{{route('DeleteGroup')}}" method="post" id="delete">
      @csrf
        <input type="hidden" name="group_id" value="{{$Group->id}}">
    </form>
    <div class="nav justify-content-end">
        <button type="submit" form="edit"
                class="btn btn-success btn-sm">
            EDIT
        </button>
        <button type="submit" form="delete"
                class="btn btn-danger ml-sm-1 btn-sm">
            DELETE
        </button>
    </div>
</div>
@endsection

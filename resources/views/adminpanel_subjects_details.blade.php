@extends('layouts.adminpanel_layout')
@section('content')


<div class="col-6 offset-3">

    <form action="{{route('EditSubject')}}" method="post" id="edit">
      @csrf
        <div class="form-group">
            <input type="hidden" name="subject_id" value="{{$Subject->id}}">
            <label class="col-form-label">NAME:</label>
            <input type="text" class="form-control" name="name" value="{{$Subject->name}}">
        </div>
        <div class="form-group">
            <label class="col-form-label">CREDIT AMOUNT:</label>
            <input type="text" class="form-control" name="credit_amount" value="{{$Subject->credit_amount}}">
        </div>
        <div class="form-group">
            <label class="col-form-label">TEACHER:</label>
            <form accesskey="#" method="post">@csrf</form>
            @foreach ($SubjectTeachers as $subjectteacher)

                    <form action="{{route('RejectTeacher')}}" method="post" id="deleteteacher_{{$subjectteacher->id}}">
                      @csrf
                      <input type="hidden" name="subject_id" value="{{$Subject->id}}">
                      <input type="hidden" name="teacher_id" value="{{$subjectteacher->id}}">
                    </form>
            @endforeach
            <table class="table table-striped">
                <tbody>
                    @foreach ($SubjectTeachers as $subjectteacher)
                            <tr>
                                <td>{{$subjectteacher->name.' '.$subjectteacher->surname}}</td>
                                <td width="10%">
                                    <button type="submit" form="deleteteacher_{{$subjectteacher->id}}" class="btn btn-danger btn-sm">-</button>
                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <table class="table table-striped">
                <tbody>
                  @foreach ($Teachers as $teacher)
                        @if (!$SubjectTeachers->contains($teacher))
                            <tr>
                                <form action="{{route('AssignTeacher')}}" method="post" id="teacher_{{$teacher->id}}">
                                    @csrf
                                    <input type="hidden" name="subject_id" value="{{$Subject->id}}">
                                    <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                                </form>
                                <td>{{$teacher->name.' '.$teacher->surname}}</td>
                                <td width="10%">
                                    <button form="teacher_{{$teacher->id}}" type="submit" class="btn btn-success btn-sm">+</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
    <hr>
    <form action="{{route('DeleteSubject')}}" method="post" id="delete">
        @csrf
        <input type="hidden" name="subject_id" value="{{$Subject->id}}">
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

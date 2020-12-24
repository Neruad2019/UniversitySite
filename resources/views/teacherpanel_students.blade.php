@extends('layouts.profile_layout')
@section('content')

<div class="card">
    <div class="list-group-item list-group-item-action text-white" style="background-color: #180b7a">
        Group: {{$Group->group_name}}
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FULLNAME</th>
                    <th scope="col">MidTerm</th>
                    <th scope="col">EndTerm</th>
                    <th scope="col">Final Exam</th>
                    <th scope="col">Final Grade</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            @for($i=0;$i<$Students->count();$i++)
                <tbody>
                <th scope="row">{{$i+1}}</th>
                <th scope="row">{{$Students[$i]->name.' '.$Students[$i]->surname}}</th>
                <th scope="row">{{$Assessments[$i]->midterm}}</th>
                <th scope="row">{{$Assessments[$i]->endterm}}</th>
                <th scope="row">{{$Assessments[$i]->final_exam}}</th>
                <th scope="row">{{$Assessments[$i]->final_grade}}</th>
                <td>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                            data-target="#Modal_{{$i}}" data-whatever="Name of User...">
                        Edit
                    </button>

                    <div class="modal fade" id="Modal_{{$i}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel_{{$i}}"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel_{{$i}}">{{$Subject->name.' / '.$Group->group_name." / ".$Students[$i]->name.' '.$Students[$i]->surname}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('TeacherGradeStudents')}}" method="post">
                                      @csrf
                                        <input type="hidden" name="teacher_id" value="{{$User->id}}">
                                        <input type="hidden" name="subject_id" value="{{$Subject->id}}">
                                        <input type="hidden" name="group_id" value="{{$Group->id}}">
                                        <input type="hidden" name="student_id" value="{{$Students[$i]->id}}">

                                        <div class="form-group">
                                            <label class="col-form-label">MidTerm:</label>
                                            <input type="text" class="form-control" name="midterm" value="{{$Assessments[$i]->midterm}}">
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">EndTerm:</label>
                                            <input type="text" class="form-control" name="endterm" value="{{$Assessments[$i]->endterm}}">
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">Final Exam:</label>
                                            <input type="text" class="form-control" name="final_exam" value="{{$Assessments[$i]->final_exam}}">
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


                </td>
                </tbody>
            @endfor
        </table>
    </div>
</div>


@endsection

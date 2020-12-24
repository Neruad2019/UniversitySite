
@extends('layouts.profile_layout')
@section('content')

<div class="card">
    <div class="list-group-item list-group-item-action text-white" style="background-color: #180b7a">
        GRADES
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Subject Name</th>
                    <th scope="col">MidTerm</th>
                    <th scope="col">EndTerm</th>
                    <th scope="col">Final Exam</th>
                    <th scope="col">Final Grade</th>
                </tr>
            </thead>
            @for($i=0;$i<$Subjects->count();$i++)
                <tbody>
                <!-- <th scope="row">{{$i+1}}</th> -->
                <th scope="row">{{$Subjects[$i]->name}}</th>
                <th scope="row">{{$Assessments[$i]->midterm}} %</th>
                <th scope="row">{{$Assessments[$i]->endterm}} %</th>
                <th scope="row">{{$Assessments[$i]->final_exam}} %</th>
                <th scope="row">{{$Assessments[$i]->final_grade}} %</th>
                </tbody>
            @endfor
        </table>
    </div>
</div>
@endsection

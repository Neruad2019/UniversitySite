@extends('layouts.profile_layout')
@section('content')

<div class="card">
    <div class="list-group-item list-group-item-action text-white" style="background-color: #180b7a">
        Groups
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DETAILS</th>
                </tr>
            </thead>
            @for($i=0;$i<$Groups->count();$i++)
                <tbody>
                <th scope="row">{{$i+1}}</th>
                <td>{{$Groups[$i]->group_name}}</td>
                <td>
                    <form action="{{route('TeacherStudents')}}" id="edit_{{$Groups[$i]->id}}" method="post">
                      @csrf
                        <input type="hidden" name="teacher_id" value="{{$User->id}}">
                        <input type="hidden" name="subject_id" value="{{$Subject->id}}">
                        <input type="hidden" name="group_id" value="{{$Groups[$i]->id}}">
                    </form>
                    <button type="button submit" form="edit_{{$Groups[$i]->id}}" class="btn btn-primary btn-sm">MORE</button>
                </td>
                </tbody>
            @endfor
        </table>
    </div>
</div>

@endsection

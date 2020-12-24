@extends('layouts.profile_layout')
@section('content')

<div class="card">
    <div class="list-group-item list-group-item-action text-white" style="background-color: #180b7a">
        Subjects
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">GROUPS</th>
                </tr>
            </thead>
            @for($i=0;$i<$Subjects->count();$i++)
                <tbody>
                <th scope="row">{{$i+1}}</th>
                <td>{{$Subjects[$i]->name}}</td>
                <td>
                    <form action="{{route('TeacherGroups')}}" id="edit_{{$Subjects[$i]->id}}" method="post">
                      @csrf
                        <input type="hidden" name="teacher_id" value="{{$User->id}}">
                        <input type="hidden" name="subject_id" value="{{$Subjects[$i]->id}}">
                    </form>
                    <button type="button submit" form="edit_{{$Subjects[$i]->id}}" class="btn btn-primary btn-sm">INFO</button>
                </td>
                </tbody>
            @endfor
        </table>
    </div>
</div>

@endsection

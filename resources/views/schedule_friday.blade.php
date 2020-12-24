
@extends('layouts.profile_layout')
@section('content')
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
              <a class="nav-link" href="javascript:;" onclick="document.getElementById('ToScheduleMonday').submit();">Monday</a>
              <form id="ToScheduleMonday" action="{{route('ScheduleMonday')}}" method="post">
                @csrf
                  <input type="hidden" name="student_id" value="{{$User->id}}">
              </form>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="javascript:;" onclick="document.getElementById('ToScheduleTuesday').submit();">Tuesday</a>
              <form id="ToScheduleTuesday" action="{{route('ScheduleTuesday')}}" method="post">
                @csrf
                  <input type="hidden" name="student_id" value="{{$User->id}}">
              </form>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Wednesday</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Thursday</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" href="javascript:;" onclick="document.getElementById('ToScheduleFriday').submit();">Friday</a>
              <form id="ToScheduleFriday" action="{{route('ScheduleFriday')}}" method="post">
                @csrf
                  <input type="hidden" name="student_id" value="{{$User->id}}">
              </form>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Saturday</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sunday</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="card mb-4">
            <div class="card-header">
                09:00-09:50
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Philosophy</p>
                    <footer>604 room</footer>
                    <footer class="blockquote-footer">Assossiated-Professor: Alibek Aliman</footer>
                </blockquote>
            </div>
        </div>
    <div class="card mb-4">
        <div class="card-header">
            10:00-10:50
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>C# .NET Framework</p>
                <footer>403 room</footer>
                <footer class="blockquote-footer">Assossiated-Professor: Nurkamilya Daurenbayeva</footer>
            </blockquote>
        </div>
    </div>
</div>
@endsection

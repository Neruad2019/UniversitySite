<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</head>
<body>
    <nav class="navbar justify-content-around" style="background-color: #180b7a">
        <div>
            <a class="navbar-brand text-decoration-none text-white" href="#">UniversityPortal</a>
        </div>
        <div class="d-flex flex-row">
          @if($User->role_id==1)
            <div class="nav-item ml-sm-5">
                <a class="text-decoration-none text-white" href="javascript:;" onclick="document.getElementById('Grades').submit();">Grades</a>
                <form id="Grades" action="{{route('StudentGrades')}}" method="post">
                  @csrf
                    <input type="hidden" name="student_id" value="{{$User->id}}">
                </form>
            </div>
                <div class="nav-item ml-sm-5">
                    <a class="text-decoration-none text-white" href="javascript:;" onclick="document.getElementById('ToSchedule').submit();">Schedule</a>
                    <form id="ToSchedule" action="{{route('ScheduleMonday')}}" method="post">
                      @csrf
                        <input type="hidden" name="student_id" value="{{$User->id}}">
                    </form>
                </div>
            }
            @endif
            @if($User->role_id==2)
                <div class="nav-item ml-sm-5">
                    <a class="text-decoration-none text-white" href="javascript:;" onclick="document.getElementById('subjects').submit();">Subjects</a>
                    <form id="subjects" action="{{route('TeacherSubjects')}}" method="post">
                      @csrf
                        <input type="hidden" name="teacher_id" value="{{$User->id}}">
                    </form>
                </div>
                <div class="nav-item ml-sm-5">
                    <a class="text-decoration-none text-white" href="javascript:;" onclick="document.getElementById('ToSchedule').submit();">Schedule</a>
                    <form id="ToSchedule" action="/Home/ToSchedule" method="post">
                      @csrf
                        <input type="hidden" name="student_id" value="{{$User->id}}">
                    </form>
                </div>
            @endif
        </div>
    </nav>
    <div class="row justify-content-center mt-sm-4">
        <div class="col-md-3">
            <img class="d-block img-thumbnail" src="{{$User->picture_url}}">
            <ul class="list-group mt-sm-2 d-block">

                <li class="list-group-item"><strong>{{$User->name.' '.$User->surname}}</strong></li>
                <li class="list-group-item"><strong><a class="nav-link active" href="javascript:;" onclick="document.getElementById('ProfileEdit').submit();">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Edit Profile</a></strong></li>
                    <form id="ProfileEdit" action="{{route('profile-edit')}}" method="post">
                      @csrf
                      <input type="hidden" name="user_id" value="{{$User->id}}">
                    </form>
                <li class="list-group-item"><strong><a class="nav-link active" href="#">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                    </svg>
                    Settings</a></strong></li>
                <li class="list-group-item text-danger"><strong><a class="nav-link active text-danger" href="{{route('login')}}">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-closed" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                    </svg>
                    Logout</a></strong></li>
            </ul>
        </div>
        <div class="col-md-7 ml-sm-4">
            @yield('content')
        </div>
    </div>

</body>
</html>
